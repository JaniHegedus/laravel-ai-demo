@extends('layouts.app')

@section('title', 'AI Code Analysis Demo')

@section('header', 'AI Code Analysis Demo')

@section('content')
    <div class="container mx-auto p-6">

        <!-- Main Content -->
        <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Welcome to Your Dashboard</h2>
            <p>Here you can see your recent activities, manage your profile, and view your account information.</p>

            <!-- Dashboard Links -->
            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

                <!-- Profile Link -->
                <a href="{{ route('profile.view') }}" class="block p-4 bg-gray-100 dark:bg-gray-700 rounded-lg shadow hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                    <h3 class="text-lg font-semibold">Profile</h3>
                    <p>View and edit your profile details.</p>
                </a>

                <!-- Settings Link -->
                <a href="{{ route('user.settings') }}" class="block p-4 bg-gray-100 dark:bg-gray-700 rounded-lg shadow hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                    <h3 class="text-lg font-semibold">Settings</h3>
                    <p>Manage your account preferences.</p>
                </a>

                <!-- Notifications Link -->
                <a href="{{ route('user.notifications') }}" class="block p-4 bg-gray-100 dark:bg-gray-700 rounded-lg shadow hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                    <h3 class="text-lg font-semibold">Notifications</h3>
                    <p>View your recent notifications.</p>
                </a>

                <!-- Security Link -->
                <a href="{{ route('user.security') }}" class="block p-4 bg-gray-100 dark:bg-gray-700 rounded-lg shadow hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                    <h3 class="text-lg font-semibold">Security</h3>
                    <p>Manage your account security settings.</p>
                </a>

                <!-- Activity Log Link -->
                <a href="{{ route('user.activity') }}" class="block p-4 bg-gray-100 dark:bg-gray-700 rounded-lg shadow hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                    <h3 class="text-lg font-semibold">Activity Log</h3>
                    <p>View your recent account activities.</p>
                </a>

                <!-- Support Link -->
                <a href="{{ route('user.support') }}" class="block p-4 bg-gray-100 dark:bg-gray-700 rounded-lg shadow hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                    <h3 class="text-lg font-semibold">Support</h3>
                    <p>Get help and support for your account.</p>
                </a>

                <!-- Referrals Link -->
                <a href="{{ route('user.referrals') }}" class="block p-4 bg-gray-100 dark:bg-gray-700 rounded-lg shadow hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                    <h3 class="text-lg font-semibold">Referrals</h3>
                    <p>View and manage your referral rewards.</p>
                </a>

            </div>
        </div>
    </div>
@endsection
