@extends('layouts.app')

@section('title', 'Dashboard')

@section('header', 'Welcome to the Dashboard Page')

@section('content')
    <!-- Welcome Section -->
    <div class="text-center mb-12">
        <h2 class="text-3xl font-semibold text-gray-800 dark:text-gray-200">Hello, Welcome to the Dashboard Page!</h2>
        <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
            This is our new homepage.
        </p>
    </div>

    <!-- Dark Mode Toggle Info Section
    <div class="bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-100 p-8 rounded-lg shadow-lg mb-12">
        <p class="text-center text-lg">
            If dark mode works, the background and text should change when toggling the mode.
        </p>
    </div> -->

    <!-- Features Section -->
    <x-features :features="[
        ['title' => 'Fast and Secure Authentication', 'description' => 'Laravel offers built-in authentication scaffolding, making it easy to set up user login, registration, and password reset functionalities. With the latest security best practices, your users\' data stays safe and secure.'],
        ['title' => 'Blade Templating Engine', 'description' => 'Blade, Laravel\'s powerful templating engine, provides a simple yet robust syntax for building complex views. Easily integrate layouts, components, and reusable UI elements to speed up development.'],
        ['title' => 'Eloquent ORM for Database Management', 'description' => 'Eloquent, Laravel\'s built-in ORM, simplifies database interactions by allowing you to work with your database as if it were a PHP object. Query relationships effortlessly and manage complex data with minimal code.'],
        ['title' => 'RESTful API Capabilities', 'description' => 'Laravel supports building RESTful APIs out of the box. Easily create APIs with built-in support for JSON responses, resource controllers, and API authentication for a seamless backend service.'],
        ['title' => 'Robust Routing System', 'description' => 'Laravel\'s routing system makes it easy to define clean, readable URLs for your application. Group routes, define middleware, and use route model binding for a more organized and scalable structure.'],
        ['title' => 'Artisan Command-Line Interface', 'description' => 'Artisan, Laravel’s CLI tool, provides commands to simplify common tasks, such as database migrations, running tests, and clearing caches. Develop faster with these automated tools at your disposal.'],
        ['title' => 'Built-in Caching Mechanism', 'description' => 'Laravel comes with support for various caching backends, allowing you to speed up your application and reduce load on your database. Choose from Redis, Memcached, or even a file-based cache to meet your needs.'],
        ['title' => 'Job Queues and Background Processing', 'description' => 'Laravel’s queue system allows you to defer time-consuming tasks, like email sending or data processing, for later execution, keeping your application responsive. This makes scaling easier and improves user experience.'],
        ['title' => 'Powerful Testing Suite', 'description' => 'Laravel provides tools for unit testing, HTTP tests, and more, making it easier to ensure your application runs smoothly. Write tests for your code and maintain reliability as your project grows.'],
        ['title' => 'Rich Ecosystem and Packages', 'description' => 'Laravel has a vibrant ecosystem with official packages like Horizon, Scout, and Passport to extend your app\'s functionality. There’s also a large community and marketplace for third-party packages.']
    ]" />

    <!-- Call-to-Action Section -->
    <div class="text-center mt-12">
        <a href="/demo" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg transition-colors">
            Explore More
        </a>
    </div>
@endsection
