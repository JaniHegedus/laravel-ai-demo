<?php
use Illuminate\Support\Facades\Route;

Route::post('/toggle-dark-mode', function () {
    session(['dark_mode' => !session('dark_mode', false)]);
    return back();
})->name('toggle.dark.mode');
