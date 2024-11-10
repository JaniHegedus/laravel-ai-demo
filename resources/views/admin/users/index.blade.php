@extends('layouts.app')

@section('title', 'Dashboard')

@section('header', 'Welcome to the Dashboard Page')

@section('content')
    @foreach ($users as $user)
        <div>
            <p>{{ $user->name }} ({{ $user->email }})</p>

            @if($user->role === 'admin')
                <form action="{{ route('admin.users.revoke-admin', $user->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger">Revoke Admin</button>
                </form>
            @else
                <form action="{{ route('admin.users.make-admin', $user->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-success">Make Admin</button>
                </form>
            @endif
        </div>
    @endforeach
@endsection
