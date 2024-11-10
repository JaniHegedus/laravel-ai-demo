<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AIController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

// Authenticated user routes
Route::middleware([Authenticate::class])->group(function () {

    Route::get('/analyze', [AIController::class, 'index'])->name('analyze');
    Route::post('/analyze', [AIController::class, 'analyze'])->name('analyze');

    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');

    Route::get('/dashboard/settings', [UserController::class, 'settings'])->name('user.settings');
    Route::post('/dashboard/settings', [UserController::class, 'updateSettings']);

    Route::get('/dashboard/notifications', [NotificationController::class, 'index'])->name('user.notifications');
    Route::post('/dashboard/notifications/mark-as-read', [NotificationController::class, 'markAsRead'])->name('user.notifications.markAsRead');

    Route::get('/dashboard/security', [SecurityController::class, 'index'])->name('user.security');
    Route::post('/dashboard/security/logout-others', [SecurityController::class, 'logoutOthers'])->name('user.security.logoutOthers');

    Route::get('/dashboard/activity', [ActivityController::class, 'index'])->name('user.activity');

    Route::get('/dashboard/support', [SupportController::class, 'index'])->name('user.support');
    Route::post('/dashboard/support', [SupportController::class, 'contactSupport']);

    Route::get('/dashboard/referrals', [ReferralController::class, 'index'])->name('user.referrals');


    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.view');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
