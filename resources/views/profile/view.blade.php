<!-- resources/views/user/profile.blade.php -->

@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">User Profile</h1>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <!--<img class="w-20 h-20 rounded-full" src="{{ asset('public/images/default-profile.png') }}" alt="User Profile Picture">-->
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                </div>
                <div class="ml-4">
                    <h2 class="text-xl font-semibold"></h2>
                    <p class="text-gray-600 dark:text-gray-400">{{ Auth::user()->email }}</p>
                </div>
            </div>

            <div class="mt-6">
                <h3 class="text-lg font-semibold mb-2">Account Information</h3>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                    <li><strong>Username:</strong> {{ Auth::user()->name ?? 'N/A' }}</li>
                    <li><strong>Registered on:</strong> {{ Auth::user()->created_at->format('F j, Y') }}</li>
                    <!-- Add more user details here if needed -->
                </ul>
            </div>

            <div class="mt-6">
                <a href="{{route('profile.edit')}}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Edit Profile
                </a>
            </div>
        </div>
    </div>
@endsection
