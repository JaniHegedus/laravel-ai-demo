@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Activity Log</h2>
        <ul>
            @foreach ($activities as $activity)
                <li>{{ $activity->description }} - {{ $activity->created_at->diffForHumans() }}</li>
            @endforeach
        </ul>
    </div>
@endsection
