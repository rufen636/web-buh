<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateSeoRequest;
use App\Services\SeoService;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

final class SeoController extends Controller
{
    public function __construct(private readonly SeoService $seo) {}

    public function index(): Response
    {
        return Inertia::render('Admin/Seo/Index', ['pages' => $this->seo->pages()]);
    }

    public function update(UpdateSeoRequest $request): RedirectResponse
    {
        $this->seo->save($request->validated('pages'));

        return to_route('admin.seo.index');
    }
}
