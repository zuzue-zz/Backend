<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('./assets/dists/css/style.css') }}" rel="stylesheet">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 h-screen flex">

        <!-- Sidebar -->
        @include('layouts.admin-leftside')

        <!-- Main Content Area -->
        <main class="flex-1 p-6 overflow-y-auto">
            <!-- Header -->
            @include('layouts.admin-header')

            <!-- Movie List Table -->

            @yield('content')

        </main>

        <script src="{{ asset('./assets/dists/js/app.js')}}"></script>

    </body>

</html>
