<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecurityController extends Controller
{
    public function index()
    {
        return view('user.security');
    }

    public function logoutOthers(Request $request)
    {
        $request->validate([
            'password' => 'required|password',
        ]);

        Auth::logoutOtherDevices($request->password);

        return redirect()->route('user.security')->with('success', 'Logged out of other sessions successfully.');
    }
}
