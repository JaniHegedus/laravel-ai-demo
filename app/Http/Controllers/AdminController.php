<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\Authenticate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * AdminController constructor.
     * Apply the 'auth' and 'admin' middleware to ensure only authenticated admin users can access these routes.
     */
    public function __construct()
    {
        $this->middleware([Authenticate::class, AdminMiddleware::class]);
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        // Here you can fetch any data you want to display on the dashboard
        return view('admin.dashboard');
    }

    /**
     * Show the settings page.
     *
     * @return \Illuminate\View\View
     */
    public function settings()
    {
        return view('admin.settings');
    }

    /**
     * Show statistics or analytics page.
     *
     * @return \Illuminate\View\View
     */
    public function statistics()
    {
        // Add any logic for collecting statistics (e.g., users count, etc.)
        return view('admin.statistics');
    }

    /**
     * Show the notifications page.
     *
     * @return \Illuminate\View\View
     */
    public function notifications()
    {
        // Add any logic to show notifications (e.g., system alerts)
        return view('admin.notifications');
    }

    /**
     * Make a user an admin.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function makeAdmin(User $user)
    {
        // Ensure the authenticated user is an admin
        if (!Auth::user()->isAdmin()) {
            return redirect()->route('admin.dashboard')->with('error', 'You are not authorized to perform this action.');
        }

        // Set user as admin
        $user->role = 'admin';
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'User has been promoted to admin.');
    }

    /**
     * Revoke admin privileges from a user.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function revokeAdmin(User $user)
    {
        // Ensure the authenticated user is an admin
        if (!Auth::user()->isAdmin()) {
            return redirect()->route('admin.dashboard')->with('error', 'You are not authorized to perform this action.');
        }

        // Revoke admin privileges
        $user->role = 'user';
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'Admin privileges have been revoked.');
    }

    /**
     * Show the list of users (admin panel).
     *
     * @return \Illuminate\View\View
     */
    public function users()
    {
        $users = User::all();  // Fetch all users. You can also use pagination here.
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for editing a specific user.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\View\View
     */
    public function editUser(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the details of a specific user.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->update($request->only('name', 'email'));

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Delete a user from the database.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteUser(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }
}
