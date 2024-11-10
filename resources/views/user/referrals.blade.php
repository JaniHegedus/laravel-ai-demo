@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Referral Program</h2>
        <p>Your referral link: <a href="{{ $referralLink }}">{{ $referralLink }}</a></p>
        <h3>Your Referrals:</h3>
        <ul>
            @foreach ($referrals as $referral)
                <li>{{ $referral->referredUser->name }} - Joined {{ $referral->created_at->diffForHumans() }}</li>
            @endforeach
        </ul>
    </div>
@endsection
