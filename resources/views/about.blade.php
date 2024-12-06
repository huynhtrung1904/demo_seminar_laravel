@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1 class="text-3xl font-bold mb-6 text-gray-800 dark:text-gray-100">About Us</h1>
                <p class="mb-6">
                    Laravel is a web application framework with expressive, elegant syntax. It provides a modern approach to building web applications with simplicity, flexibility, and power. Created by <strong>Taylor Otwell</strong>, Laravel has become one of the most popular PHP frameworks, enabling developers to craft robust and scalable applications efficiently.
                </p>
                <h2 class="text-2xl font-semibold mb-4 text-gray-700 dark:text-gray-200">Why Choose Laravel?</h2>
                <ul class="list-disc pl-6 mb-6 space-y-2">
                    <li><strong>Elegant Syntax:</strong> Laravel focuses on developer experience by providing clean and expressive syntax.</li>
                    <li><strong>Blade Templating:</strong> A powerful templating engine that simplifies the front-end development process.</li>
                    <li><strong>Comprehensive Tools:</strong> Features like Eloquent ORM, Routing, Middleware, and Authentication are built-in to make development seamless.</li>
                    <li><strong>Scalability:</strong> Laravel supports large-scale applications with excellent performance and scalability features.</li>
                    <li><strong>Active Community:</strong> A vibrant and supportive community constantly enhances the framework.</li>
                </ul>
                <h2 class="text-2xl font-semibold mb-4 text-gray-700 dark:text-gray-200">Key Features</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-md shadow">
                        <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-gray-100">Routing System</h3>
                        <p>Laravel provides a clean and simple routing mechanism, allowing developers to map routes to controllers or closures effortlessly.</p>
                    </div>
                    <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-md shadow">
                        <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-gray-100">Eloquent ORM</h3>
                        <p>A powerful ORM for database interactions that simplifies complex SQL queries into elegant PHP methods.</p>
                    </div>
                    <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-md shadow">
                        <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-gray-100">Blade Template Engine</h3>
                        <p>Blade enables you to use reusable components and simplifies the logic in your views for a clean codebase.</p>
                    </div>
                    <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-md shadow">
                        <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-gray-100">Authentication</h3>
                        <p>Built-in authentication features that are ready-to-use, secure, and customizable.</p>
                    </div>
                </div>
                <h2 class="text-2xl font-semibold mb-4 mt-6 text-gray-700 dark:text-gray-200">Our Mission</h2>
                <p class="mb-6">
                    At our core, we aim to empower developers to build robust, scalable, and user-friendly web applications. By leveraging the power of Laravel, we bring innovation, creativity, and simplicity to web development.
                </p>
                <div class="text-center mt-10">
                    <a href="{{ url('/dashboard') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection