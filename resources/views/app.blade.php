<!DOCTYPE html>
<html style="
    scroll-behavior: smooth;
" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title >Налоги и бухгалтерия — блогеры, ИП и организации Минск</title>
        <meta name="description" content="Налоги и бухгалтерия — блогеры, ИП и организации Минск">
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.png') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>

    <body style="font-family: Invole,serif" class="antialiased">
        @inertia
    </body>
</html>
