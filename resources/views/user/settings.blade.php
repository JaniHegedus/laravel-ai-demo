@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Settings</h2>
        <form method="POST" action="{{ route('user.settings') }}">
            @csrf
            <div>
                <label>Dark Mode</label>
                <input type="checkbox" name="dark_mode" {{ Auth::user()->dark_mode ? 'checked' : '' }}>
            </div>
            <button type="submit">Save</button>
        </form>
    </div>
@endsection
