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
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="min-h-screen">
        <div class="relative flex min-h-screen overflow-hidden bg-gradient-to-b from-red-50 to-red-100">
            <div class="z-10 flex items-center w-full max-w-lg py-8 bg-white shadow md:py-16">
                <div class="w-full max-w-md px-4 mx-auto sm:px-6 md:px-8">
                    {{ $slot }}
                </div>
            </div>

            <div class="flex items-center justify-center flex-1">
                <x-logo size="lg" />
            </div>
        </div>
    </body>
</html>
