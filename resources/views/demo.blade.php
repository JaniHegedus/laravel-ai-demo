<!-- resources/views/demo.blade.php -->

@extends('layouts.app')

@section('title', 'AI Code Analysis Demo')

@section('header', 'AI Code Analysis Demo')

@section('content')
    <form action="/analyze" method="POST" class="space-y-4">
        @csrf
        <label for="code" class="block text-lg font-medium text-gray-700 dark:text-gray-300">Enter Code:</label>
        <x-textarea name="code" />

        <x-button type="submit" label="Analyze" />

    </form>

    <!-- Show AI Insight by default -->
    <x-alert-box :error="$error ?? null" :insight="$insight ?? null" />


@endsection
