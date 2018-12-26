<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('metadata')

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

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
    <link href="{{ asset('css/print.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    @yield('content')

    <!-- Scripts -->
    @stack('scripts')
</body>
</html>
