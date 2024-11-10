@extends('layouts.app')

@section('title', 'Dashboard')

@section('header', 'Welcome to the Dashboard')

@section('content')
    <div class="container mx-auto p-6 bg-white dark:bg-gray-800 shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200 mb-6">User List</h2>

        <!-- Button to create a new user -->
        <div class="mb-4">
            <a href="{{ route('admin.users.create') }}" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                Create New User
            </a>
        </div>

        <div class="space-y-4">
            @foreach ($users as $user)
                <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg shadow flex items-center justify-between">
                    <div>
                        <p class="text-lg font-medium text-gray-800 dark:text-gray-100">{{ $user->name }}</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $user->email }}</p>
                    </div>

                    <div class="space-x-2 flex items-center h-full">
                        <!-- Edit User Button -->
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="px-4 py-2 bg-yellow-600 text-white font-semibold rounded-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                            Edit
                        </a>

                        <!-- Delete User Form -->
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this user?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white font-semibold rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                                Delete
                            </button>
                        </form>

                        <!-- Make Admin / Revoke Admin Button -->
                        @if($user->role === 'admin')
                            <form action="{{ route('admin.users.revoke-admin') }}" method="POST" class="inline-block">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <button type="submit" class="px-4 py-2 bg-red-600 text-white font-semibold rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                                    Revoke Admin
                                </button>
                            </form>
                        @else
                            <form action="{{ route('admin.users.make-admin') }}" method="POST" class="inline-block">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <button type="submit" class="px-4 py-2 bg-green-600 text-white font-semibold rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                                    Make Admin
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
