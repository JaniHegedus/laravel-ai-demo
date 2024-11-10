@extends('layouts.app')

@section('title', 'Admin Notifications')

@section('header', 'Notifications')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="w-full sm:max-w-3xl px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-300 mb-4">Notifications</h2>

            <!-- Notifications List -->
            <div class="space-y-4">
                @forelse($notifications as $notification)
                    <div class="p-4 bg-gray-200 dark:bg-gray-700 rounded-lg shadow">
                        <h3 class="font-medium text-gray-800 dark:text-gray-100">{{ $notification->title }}</h3>
                        <p class="text-gray-600 dark:text-gray-300">{{ $notification->message }}</p>
                        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $notification->created_at->diffForHumans() }}</span>
                    </div>
                @empty
                    <p class="text-gray-600 dark:text-gray-300">No notifications available.</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
