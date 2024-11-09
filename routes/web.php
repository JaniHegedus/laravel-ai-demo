<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/demo', function () {
    return view('demo');
});

Route::post('/analyze', [AIController::class, 'analyze']);
