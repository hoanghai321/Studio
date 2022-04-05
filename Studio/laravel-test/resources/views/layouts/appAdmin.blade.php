<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AVIATO') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/styleadmin.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">

        <head>@include('layouts.admin.head')
        </head>
        <header>@include('layouts.admin.header')</header>
        <main class="py-4">
            @yield('content')
        </main>
        <footer>@include('layouts.admin.footer')</footer>
    </div>
</body>

</html>