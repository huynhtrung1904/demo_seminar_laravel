<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Demo_Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
             html, body {
                height: 100%; 
                margin: 0; 
            }

            body {
                display: flex;
                flex-direction: column; 
                min-height: 100vh; 
            }

            main {
                flex: 1; 
            }

            
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>

            <!-- Footer -->
            <footer class="bg-gray-800 text-gray-300 py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Column 1: About -->
                    <div>
                        <h3 class="text-lg font-semibold text-white mb-4">About Us</h3>
                        <p class="text-sm">
                            Laravel Demo is a platform showcasing the power and simplicity of Laravel for modern web development. Explore, learn, and grow with us!
                        </p>
                    </div>

                    <!-- Column 2: Quick Links -->
                    <div>
                        <h3 class="text-lg font-semibold text-white mb-4">Quick Links</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-sm hover:underline">Privacy Policy</a></li>
                            <li><a href="#" class="text-sm hover:underline">Terms of Service</a></li>
                            <li><a href="#" class="text-sm hover:underline">Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Column 3: Follow Us -->
                    <div>
                        <h3 class="text-lg font-semibold text-white mb-4">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-700 mt-8 pt-4 text-center text-sm">
                    &copy; 2024 Laravel Demo. All rights reserved.
                </div>
            </div>
        </footer>

        </div>
    </body>
</html>
