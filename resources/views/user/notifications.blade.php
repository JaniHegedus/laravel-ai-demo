@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Notifications</h2>
        <ul>
            @foreach ($notifications as $notification)
                <li>{{ $notification->data['message'] }} - {{ $notification->created_at->diffForHumans() }}</li>
            @endforeach
        </ul>
        <form method="POST" action="{{ route('user.notifications.markAsRead') }}">
            @csrf
            <button type="submit">Mark all as read</button>
        </form>
    </div>
@endsection
