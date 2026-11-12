<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\SeoPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

final class SeoService
{
    /** @return array<string, array{name: string, title: string, description: string}> */
    public function defaults(): array
    {
        return config('seo.pages');
    }

    /** @return list<array{path: string, name: string, title: string, description: string}> */
    public function pages(): array
    {
        $saved = SeoPage::query()->get()->keyBy('path');
        $pages = [];

        foreach ($this->defaults() as $path => $defaults) {
            $page = $saved->get($path);
            $pages[] = [
                'path' => $path,
                'name' => $defaults['name'],
                'title' => $page?->title ?? $defaults['title'],
                'description' => $page?->description ?? $defaults['description'],
            ];
        }

        return $pages;
    }

    /** @return array{title: string, description: string, canonical: string, robots: string} */
    public function metadata(Request $request): array
    {
        $path = $request->getPathInfo();
        $defaults = $this->defaults()[$path] ?? null;
        $page = $defaults === null ? null : SeoPage::query()->where('path', $path)->first();

        return [
            'title' => $page?->title ?? $defaults['title'] ?? 'Личный кабинет — Блог ин тайм',
            'description' => $page?->description ?? $defaults['description'] ?? 'Вход и управление сайтом «Блог ин тайм».',
            'canonical' => rtrim(config('app.site_url'), '/').$path,
            'robots' => $defaults === null ? 'noindex, nofollow' : 'index, follow',
        ];
    }

    /** @param list<array{path: string, title: string, description: string}> $pages */
    public function save(array $pages): void
    {
        DB::transaction(function () use ($pages): void {
            foreach ($pages as $page) {
                SeoPage::query()->updateOrCreate(
                    ['path' => $page['path']],
                    ['title' => $page['title'], 'description' => $page['description']],
                );
            }
        });
    }
}
