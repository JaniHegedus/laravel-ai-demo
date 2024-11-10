@extends('layouts.app')

@section('title', 'AI Code Analysis Demo')

@section('header', 'AI Code Analysis Demo')

@section('content')
    <div class="container mx-auto p-6">
        <!-- Header -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')"
                             onclick="event.preventDefault();
                  this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>


        <!-- Main Content -->
        <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Welcome to Your Dashboard</h2>
            <p>Here you can see your recent activities, manage your profile, and view your account information.</p>
        </div>
    </div>
@endsection
