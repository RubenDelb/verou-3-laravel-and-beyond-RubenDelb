<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('//css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('//js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="bg-orange-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-blue-50">
                <div class=" py-3 px-4 sm:px-6">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        @isset($slot)
            <main>
                {{ $slot }}
            </main>
        @endisset
    </div>
    @extends('components.footer')
</body>

</html>
