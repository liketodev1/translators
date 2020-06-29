@extends('layouts.app')
@section('title','Our Lawyers')
@section('content')
    <div class="container">
        @forelse ($users as $user)
            <div class="card">
                <h5 class="card-header">{{ $user->first_name }} {{ $user->last_name }}</h5>
                <div class="card-body">
                    <h5 class="card-title">{{ $user->profile->country->name }}</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @empty
            Not result
        @endforelse
    </div>
@endsection
