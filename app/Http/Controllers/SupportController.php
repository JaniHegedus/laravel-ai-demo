<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SupportController extends Controller
{
    public function index()
    {
        return view('user.support');
    }

    public function contactSupport(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        // Send the support email (you can customize this)
        Mail::raw($request->message, function ($message) {
            $message->to('support@example.com')
                ->subject('Support Request');
        });

        return redirect()->route('user.support')->with('success', 'Support request sent successfully.');
    }
}
