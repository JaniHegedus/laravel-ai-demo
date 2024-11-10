@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Support</h2>
        <form method="POST" action="{{ route('user.support') }}">
            @csrf
            <label>Message</label>
            <textarea name="message" required></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
@endsection
