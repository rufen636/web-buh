<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Http\Middleware\HandleInertiaRequests;
use App\Models\SeoPage;
use App\Models\User;
use App\Services\SeoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Inertia\Testing\AssertableInertia as Assert;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

final class SeoTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_pages_have_unique_metadata_in_initial_html(): void
    {
        $titles = [];
        $descriptions = [];

        foreach (app(SeoService::class)->pages() as $page) {
            $response = $this->get($page['path'])->assertOk();
            $html = $response->getContent();
            $head = substr($html, 0, strpos($html, '</head>'));

            $this->assertSame(1, substr_count($head, '<title '));
            $this->assertSame(1, substr_count($head, 'name="description"'));
            $this->assertSame(1, substr_count($head, 'rel="canonical"'));
            $response->assertSee('<title inertia>'.e($page['title']).'</title>', false);
            $response->assertSee('content="'.e($page['description']).'"', false);
            $response->assertSee('content="index, follow"', false);
            $titles[] = $page['title'];
            $descriptions[] = $page['description'];
        }

        $this->assertCount(4, array_unique($titles));
        $this->assertCount(4, array_unique($descriptions));
    }

    public function test_admin_can_save_metadata_and_it_is_escaped_in_html(): void
    {
        $pages = $this->pageData();
        $pages[1]['title'] = 'Контакты «Блог ин тайм» & партнёры';
        $pages[1]['description'] = 'Позвоните нам: "Консультация" <script>alert(1)</script>';

        $this->actingAs(User::factory()->create())
            ->put(route('admin.seo.update'), ['pages' => $pages])
            ->assertSessionHasNoErrors()
            ->assertRedirect(route('admin.seo.index'));

        $this->assertDatabaseHas('seo_pages', $pages[1]);
        $this->get('/contacts')
            ->assertOk()
            ->assertSee('<title inertia>'.e($pages[1]['title']).'</title>', false)
            ->assertSee('content="'.e($pages[1]['description']).'"', false)
            ->assertDontSee('<script>alert(1)</script>', false);

        $this->get(route('admin.seo.index'))->assertInertia(fn (Assert $page) => $page
            ->component('Admin/Seo/Index')
            ->has('pages', 4)
            ->where('pages.1.title', $pages[1]['title'])
        );
    }

    public function test_inertia_navigation_and_partial_reloads_receive_current_metadata(): void
    {
        SeoPage::query()->create([
            'path' => '/contacts',
            'title' => 'Свяжитесь с нами — Блог ин тайм',
            'description' => 'Телефон и адрес для связи с нашей бухгалтерской компанией.',
        ]);

        $this->get('/contacts?utm_source=yandex&yclid=123', [
            'X-Inertia' => 'true',
            'X-Inertia-Version' => app(HandleInertiaRequests::class)->version(Request::create('/contacts')),
            'X-Inertia-Partial-Component' => 'Contacts',
            'X-Inertia-Partial-Data' => 'country',
        ])->assertOk()
            ->assertJsonPath('props.seo.title', 'Свяжитесь с нами — Блог ин тайм')
            ->assertJsonPath('props.seo.description', 'Телефон и адрес для связи с нашей бухгалтерской компанией.')
            ->assertJsonPath('props.seo.canonical', rtrim(config('app.site_url'), '/').'/contacts');
    }

    public function test_tracking_parameters_do_not_change_the_canonical_url(): void
    {
        $this->get('/?utm_source=yandex&yclid=123')->assertOk()
            ->assertSee('rel="canonical" href="'.rtrim(config('app.site_url'), '/').'/"', false);
    }

    public function test_guest_cannot_read_or_change_seo_settings(): void
    {
        $this->get(route('admin.seo.index'))->assertRedirect(route('login'));
        $this->put(route('admin.seo.update'), ['pages' => $this->pageData()])
            ->assertRedirect(route('login'));
        $this->assertDatabaseCount('seo_pages', 0);
    }

    #[DataProvider('invalidSettings')]
    public function test_invalid_settings_are_rejected(string $scenario, string $error): void
    {
        $pages = $this->pageData();
        switch ($scenario) {
            case 'duplicate_title':
                $pages[1]['title'] = mb_strtoupper($pages[0]['title']);
                break;
            case 'duplicate_description':
                $pages[1]['description'] = $pages[0]['description'];
                break;
            case 'empty_title':
                $pages[0]['title'] = '   ';
                break;
            case 'empty_description':
                $pages[0]['description'] = '';
                break;
            case 'long_title':
                $pages[0]['title'] = str_repeat('я', 256);
                break;
            case 'long_description':
                $pages[0]['description'] = str_repeat('я', 501);
                break;
            case 'unknown_path':
                $pages[0]['path'] = '/unknown';
                break;
            case 'duplicate_path':
                $pages[1]['path'] = $pages[0]['path'];
                break;
            case 'missing_page':
                array_pop($pages);
                break;
        }

        $this->actingAs(User::factory()->create())
            ->put(route('admin.seo.update'), ['pages' => $pages])
            ->assertSessionHasErrors($error);
        $this->assertDatabaseCount('seo_pages', 0);
    }

    /** @return array<string, array{string, string}> */
    public static function invalidSettings(): array
    {
        return [
            'duplicate title' => ['duplicate_title', 'pages.1.title'],
            'duplicate description' => ['duplicate_description', 'pages.1.description'],
            'blank title' => ['empty_title', 'pages.0.title'],
            'blank description' => ['empty_description', 'pages.0.description'],
            'long title' => ['long_title', 'pages.0.title'],
            'long description' => ['long_description', 'pages.0.description'],
            'unknown path' => ['unknown_path', 'pages.0.path'],
            'duplicate path' => ['duplicate_path', 'pages.1.path'],
            'missing page' => ['missing_page', 'pages'],
        ];
    }

    #[DataProvider('urlAliases')]
    public function test_public_url_aliases_redirect_to_one_address(string $alias, string $canonical): void
    {
        $this->get($alias)->assertStatus(301)->assertRedirect($canonical);
    }

    /** @return array<string, array{string, string}> */
    public static function urlAliases(): array
    {
        return [
            'uppercase' => ['/CONTACTS', '/contacts'],
            'trailing slash' => ['http://localhost/payment/?utm_source=test', '/payment?utm_source=test'],
            'index php' => ['/index.php', '/'],
            'front controller path' => ['/index.php/discounts', '/discounts'],
            'encoded path' => ['/%63ontacts', '/contacts'],
            'tracking preserved' => ['/CONTACTS/?utm_source=yandex', '/contacts?utm_source=yandex'],
        ];
    }

    public function test_unknown_paths_return_404(): void
    {
        $this->get('/unknown-page')->assertNotFound();
    }

    public function test_front_controller_url_redirects_when_php_sets_the_base_url(): void
    {
        $this->withServerVariables([
            'SCRIPT_NAME' => '/index.php',
            'SCRIPT_FILENAME' => public_path('index.php'),
            'PHP_SELF' => '/index.php',
        ])->get('/index.php')->assertStatus(301)->assertRedirect('/');
    }

    public function test_private_pages_are_not_indexable(): void
    {
        $this->get('/login')->assertOk()->assertSee('name="robots" content="noindex, nofollow"', false);
        $this->actingAs(User::factory()->create())
            ->get(route('admin.seo.index'))->assertOk()
            ->assertSee('name="robots" content="noindex, nofollow"', false);
    }

    /** @return list<array{path: string, title: string, description: string}> */
    private function pageData(): array
    {
        return array_map(
            fn (array $page): array => array_intersect_key($page, array_flip(['path', 'title', 'description'])),
            app(SeoService::class)->pages(),
        );
    }
}
