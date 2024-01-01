<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('Js/my.js') }}"></script>

</head>
<body class="font-sans antialiased">
    <header class="flex justify-between border-b-2 border-double">
        <div class="flex flex-col items-start border-2 rounded-lg m-5">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="m-5">
            <h2 class="font-bold text-lg self-center">AWE COMPONENT 2</h2>
        </div>
        <div>
            @auth
                @include('layouts.settings_dropdown')
            @endauth
            @guest
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endguest
        </div>
    </header>
    <main class="border-b-2 border-double">
        <!-- Menu -->
        @include('layouts.menu')
        {{$slot ?? ''}}
    </main>
    <footer class="mt-8 py-4 border-t-2 border-double">
        <div class="text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </footer>
</body>
</html>
