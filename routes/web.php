<?php

use App\Http\Controllers\AIController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/demo', function () {
    return view('demo');
})->name('demo');

Route::post('/analyze', [AIController::class, 'analyze']);
Route::post('/toggle-dark-mode', function () {
    // Toggle the dark mode session value
    session(['dark_mode' => !session('dark_mode', false)]);
    return back();
})->name('toggle.dark.mode');

