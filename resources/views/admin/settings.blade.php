@extends('layouts.app')

@section('title', 'Site Settings')

@section('header', 'Site Settings')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="w-full sm:max-w-2xl px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-300 mb-4">Manage Site Settings</h2>

            <form method="POST" action="{{ route('admin.settings.update')}}">
                @csrf
                @method('PATCH')

                <!-- Site Name -->
                <div class="mb-4">
                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="site_name">Site Name</label>
                    <input id="site_name" type="text" name="site_name" value="{{ old('site_name', $settings->site_name ?? '') }}" required class="w-full mt-1 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm">
                </div>

                <!-- Contact Email -->
                <div class="mb-4">
                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="contact_email">Contact Email</label>
                    <input id="contact_email" type="email" name="contact_email" value="{{ old('contact_email', $settings->contact_email ?? '') }}" required class="w-full mt-1 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm">
                </div>

                <!-- Maintenance Mode Toggle -->
                <div class="mb-4 flex items-center">
                    <label for="maintenance_mode" class="font-medium text-sm text-gray-700 dark:text-gray-300 mr-2">Maintenance Mode</label>
                    <input id="maintenance_mode" type="checkbox" name="maintenance_mode" {{ old('maintenance_mode', $settings->maintenance_mode ?? false) ? 'checked' : '' }} class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700">
                </div>

                <!-- Save Button -->
                <div class="flex items-center justify-end mt-6">
                    <button type="submit" class="px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
