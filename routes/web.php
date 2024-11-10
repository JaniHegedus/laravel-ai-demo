<?php

require __DIR__.'/auth.php';

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
})->name('home');
// Add this route to toggle dark mode
Route::post('/toggle-dark-mode', function () {
    // Toggle the dark mode session value
    session(['dark_mode' => !session('dark_mode', false)]);
    return back();
})->name('toggle.dark.mode');

// Central dashboard route that redirects based on user role
Route::get('/dashboard', function () {
    if (auth()->check()) {
        $user = auth()->user();
        if ($user->isAdmin()) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('user.dashboard');
    }
    return redirect()->route('login');  // Or redirect to any other page if not logged in
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated user routes
Route::middleware([Authenticate::class])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/demo', function () {return view('demo');});
});

// Admin-specific routes
Route::middleware([Authenticate::class, AdminMiddleware::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/demo', function () {return view('demo');});

    // User management routes within the admin section
    Route::get('/users', [AdminUserController::class, 'index'])->name('users.index'); // View Users
    Route::get('/users/create', [AdminUserController::class, 'create'])->name('users.create'); // Create User
    Route::post('/users', [AdminUserController::class, 'store'])->name('users.store'); // Store User
    Route::get('/users/{user}/edit', [AdminUserController::class, 'edit'])->name('users.edit'); // Edit User
    Route::put('/users/{user}', [AdminUserController::class, 'update'])->name('users.update'); // Update User
    Route::delete('/users/{user}', [AdminUserController::class, 'destroy'])->name('users.destroy'); // Delete User
    Route::post('/users/revoke', [AdminUserController::class, 'revokeAdmin'])->name('users.revoke-admin'); // Revoke admin

    // Additional admin routes
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings'); // Site Settings
    Route::get('/statistics', [AdminController::class, 'statistics'])->name('statistics'); // View Statistics
    Route::get('/notifications', [AdminController::class, 'notifications'])->name('notifications'); // Notifications
});

// User-specific routes
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
});
