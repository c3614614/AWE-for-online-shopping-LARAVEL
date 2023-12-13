<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen">
        <!-- Navigation Links -->
        <nav class="bg-white shadow-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <h1 class="flex items-center text-3xl font-bold text-gray-800">
                            Amazing Store
                        </h1>
                        <a href="{{ route('product') }}" class="ml-6 flex items-center text-lg text-gray-600 hover:text-gray-900">
                            HOME
                        </a>
                        <a href="{{ route('product') }}" class="ml-6 flex items-center text-lg text-gray-600 hover:text-gray-900">
                            PRODUCTS
                        </a>
                        <a href="{{ route('product') }}" class="ml-6 flex items-center text-lg text-gray-600 hover:text-gray-900">
                            ADD PRODUCT
                        </a>




                    </div>
                    <div class="flex items-center">
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 mr-4">
                                Log in
                            </a>
                        @endif
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="font-semibold text-gray-600 hover:text-gray-900">
                                Register
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </main>
    </div>
</body>
</html>


