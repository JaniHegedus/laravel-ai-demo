<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferralController extends Controller
{
    public function index()
    {
        $referralLink = route('register', ['ref' => auth()->id()]);
        $referrals = auth()->user()->referrals ?? collect();

        return view('user.referrals', compact('referralLink', 'referrals'));
    }
}
