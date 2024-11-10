<?php

namespace App\Http\Controllers;

use App\Models\Referral;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the user dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        return view('user.dashboard');
    }

    /**
     * Show the user profile.
     *
     * @return \Illuminate\View\View
     */
    public function profile()
    {
        return view('user.profile');
    }
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);
        auth()->user()->update($request->only('name', 'email'));
        return redirect()->route('user.profile')->with('success', 'Profile updated successfully.');
    }

    public function settings()
    {
        return view('user.settings');
    }

    public function updateSettings(Request $request)
    {
        auth()->user()->update(['dark_mode' => $request->has('dark_mode')]);
        return redirect()->route('user.settings')->with('success', 'Settings updated successfully.');
    }
    // Additional user-related methods can go here
    public function referrals()
    {
        return $this->hasMany(Referral::class, 'user_id');
    }
}
