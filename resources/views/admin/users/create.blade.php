@extends('layouts.app')

@section('title', 'Create New User')

@section('header', 'Create New User')

@section('content')
    <div class="container mx-auto p-6 bg-white dark:bg-gray-800 shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200 mb-6">New User</h2>

        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required class="w-full mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-900 dark:text-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required class="w-full mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-900 dark:text-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                <input type="password" name="password" id="password" required class="w-full mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-900 dark:text-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-900 dark:text-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <button type="submit" class="px-4 py-2 bg-green-600 text-white font-semibold rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                Create User
            </button>
        </form>
    </div>
@endsection
