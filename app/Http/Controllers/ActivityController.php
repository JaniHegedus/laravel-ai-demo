<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = ActivityLog::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('user.activity', compact('activities'));
    }
}
