<!-- resources/views/admin/dashboard.blade.php -->

@extends('layouts.app')

@section('title', 'AI Code Analysis Demo')

@section('header', 'AI Code Analysis Demo')

@section('content')
<div class="container mx-auto p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-black dark:text-white">Admin Dashboard</h1>
    </div>

    <!-- Main Content -->
    <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">Welcome, {{ Auth::user()->name }}</h2>
        <p class="text-black dark:text-white">This is the admin dashboard where you can manage users, view statistics, and configure settings.</p>

        <!-- Example Sections -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            <!-- Users Management Section -->
            <div class="p-4 bg-green-100 dark:bg-green-700 border border-green-300 dark:border-green-400 rounded-lg">
                <h3 class="text-xl font-semibold text-green-800 dark:text-green-900 mb-2">Manage Users</h3>
                <p class="text-gray-700 dark:text-gray-400">View and manage all registered users.</p>
                <a href="{{ route('admin.users.index') }}" class="mt-4 inline-block bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Go to Users</a>
            </div>

            <!-- Site Settings Section -->
            <div class="p-4 bg-blue-100 dark:bg-blue-700 border border-blue-300 dark:border-blue-400 rounded-lg">
                <h3 class="text-xl font-semibold text-blue-800 dark:text-blue-900 mb-2">Site Settings</h3>
                <p class="text-gray-700 dark:text-gray-400">Adjust site settings and configurations.</p>
                <a href="{{ route('admin.settings') }}" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Configure Settings</a>
            </div>

            <!-- Statistics Section -->
            <div class="p-4 bg-purple-100 dark:bg-purple-700 border border-purple-300 dark:border-purple-400 rounded-lg">
                <h3 class="text-xl font-semibold text-purple-800 dark:text-purple-900 mb-2">View Statistics</h3>
                <p class="text-gray-700 dark:text-gray-400">Analyze user activity and site performance.</p>
                <a href="{{ route('admin.statistics') }}" class="mt-4 inline-block bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600">View Stats</a>
            </div>

            <!-- Notifications Section -->
            <div class="p-4 bg-yellow-100 dark:bg-yellow-700 border border-yellow-300 dark:border-yellow-400 rounded-lg">
                <h3 class="text-xl font-semibold text-yellow-800 dark:text-yellow-900 mb-2">Notifications</h3>
                <p class="text-gray-700 dark:text-gray-400">Manage and view system notifications.</p>
                <a href="{{ route('admin.notifications') }}" class="mt-4 inline-block bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Manage Notifications</a>
            </div>
        </div>
    </div>
</div>
@endsection
