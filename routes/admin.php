<?php
use App\Http\Controllers\AdminUserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

// Admin-specific routes
Route::middleware([Authenticate::class, AdminMiddleware::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // User management routes within the admin section
    Route::get('/users', [AdminUserController::class, 'index'])->name('users.index'); // View Users
    Route::get('/users/create', [AdminUserController::class, 'create'])->name('users.create'); // Create User
    Route::post('/users', [AdminUserController::class, 'store'])->name('users.store'); // Store User
    Route::get('/users/{user}/edit', [AdminUserController::class, 'edit'])->name('users.edit'); // Edit User
    Route::patch('/users/{user}', [AdminUserController::class, 'update'])->name('users.update'); // Update User
    Route::delete('/users/{user}', [AdminUserController::class, 'destroy'])->name('users.destroy'); // Delete User
    Route::post('/users/revoke', [AdminUserController::class, 'revokeAdmin'])->name('users.revoke-admin'); // Revoke admin
    Route::post('/users/make', [AdminUserController::class, 'makeAdmin'])->name('users.make-admin'); // Revoke admin

    // Additional admin routes
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings'); // View Site Settings
    Route::patch('/settings', [AdminController::class, 'updateSettings'])->name('settings.update'); // Update Site Settings

    Route::get('/statistics', [AdminController::class, 'statistics'])->name('statistics'); // View Statistics
    Route::get('/notifications', [AdminController::class, 'notifications'])->name('notifications'); // Notifications
});
