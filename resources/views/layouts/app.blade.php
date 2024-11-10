<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: {{ session('dark_mode', false) ? 'true' : 'false' }} }" :class="{ 'dark': darkMode }">
<x-head :title="View::yieldContent('title', 'Laravel Application')">
    <x-slot name="styles">
        {{-- Additional custom styles here --}}
    </x-slot>

    <x-slot name="scripts">
        {{-- Additional custom scripts here --}}
    </x-slot>
</x-head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 font-sans leading-normal tracking-normal min-h-screen flex flex-col">
<!-- Main content area with flex-grow to push footer down -->
<div class="flex-grow">
    @include('layouts.navigation')
    <div class="container mx-auto p-6">
        <!-- Header with Dark Mode Toggle Button
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">@yield('header', 'Home')</h1>
            -->
            <!-- Navbar Component
            <x-navbar />
        </div>-->

        <!-- Main Content -->
        <div class="max-w-2xl mx-auto bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg">
            @yield('content')
        </div>
    </div>
</div>

<!-- Footer Component -->
<x-footer />
</body>
</html>

