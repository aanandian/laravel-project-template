<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('metadata')

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    @hasSection('title')
        <title>@yield('title') | {{ config('app.name') }}{{ config('app.desc') ? ' - ' . config('app.desc') : '' }}</title>
    @else
        <title>@if (Lang::has('routes.' . Route::currentRouteName())) @lang('routes.' . Route::currentRouteName()) | @endif{{ config('app.name') }}{{ config('app.desc') ? ' - ' . config('app.desc') : '' }}</title>
    @endif

    <!-- Fonts -->
    <link href="https://fonts.gstatic.com" rel="dns-prefetch">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')

    <!-- Scripts -->
    @stack('scripts_head')
</head>
<body>
    <div id="app">
        <!-- Navigation Bar -->
        @include('layouts._navbar')

        <!-- Main Content -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts_footer')
</body>
</html>
