@extends('layouts.app')

@section('title', 'Admin Statistics')

@section('header', 'Admin Statistics')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="w-full sm:max-w-3xl px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-300 mb-4">Statistics Overview</h2>

            <!-- Example Statistic Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="p-6 bg-gray-200 dark:bg-gray-700 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Total Users</h3>
                    <p class="mt-2 text-3xl font-bold text-indigo-600 dark:text-indigo-400">1,234</p>
                </div>

                <!-- Card 2 -->
                <div class="p-6 bg-gray-200 dark:bg-gray-700 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Active Sessions</h3>
                    <p class="mt-2 text-3xl font-bold text-indigo-600 dark:text-indigo-400">567</p>
                </div>

                <!-- Card 3 -->
                <div class="p-6 bg-gray-200 dark:bg-gray-700 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Monthly Revenue</h3>
                    <p class="mt-2 text-3xl font-bold text-indigo-600 dark:text-indigo-400">$12,345</p>
                </div>
            </div>

            <!-- Add more sections or charts as needed -->
        </div>
    </div>
@endsection
