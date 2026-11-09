<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SiteMapController extends Controller
{
    public function index(Request $request)
    {
        $baseUrl = rtrim(config('app.site_url'), '/');

        $pages = [
            '/' => ['priority' => 1.0, 'frequency' => Url::CHANGE_FREQUENCY_WEEKLY],
            '/contacts' => ['priority' => 0.8, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            '/discounts' => ['priority' => 0.8, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            '/payment' => ['priority' => 0.6, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
        ];

        $sitemap = Sitemap::create();

        foreach ($pages as $path => $options) {
            $sitemap->add(
                Url::create($path === '/' ? $baseUrl.'/' : $baseUrl.$path)
                    ->setChangeFrequency($options['frequency'])
                    ->setPriority($options['priority'])
            );
        }

        return $sitemap->toResponse($request);
    }
}
