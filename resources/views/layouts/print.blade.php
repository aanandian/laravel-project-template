<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('metadata')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    @hasSection('title')
        <title>@yield('title') | {{ config('app.name') }}</title>
    @else
        <title>@if (Lang::has('routes.' . Route::currentRouteName())) @lang('routes.' . Route::currentRouteName()) | @endif{{ config('app.name') }}</title>
    @endif

    <!-- Fonts -->
    <link href="https://fonts.gstatic.com" rel="dns-prefetch">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css" media="all">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            font-family: 'Arial', sans-serif;
            font-size:12px;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
    @stack('styles')
</head>
<body>
    @yield('content')

    <!-- Scripts -->
</body>
</html>
