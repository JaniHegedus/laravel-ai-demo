@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Security Settings</h2>
        <form method="POST" action="{{ route('user.security.logoutOthers') }}">
            @csrf
            <label>Password</label>
            <input type="password" name="password" required>
            <button type="submit">Log out of other sessions</button>
        </form>
    </div>
@endsection
