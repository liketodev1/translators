@extends('layouts.app')

@section('title','Key features')

@section('content')
    <div class="container">
        @forelse($features as $feature)
            <div class="card mb-3">
                <div class="card-body">
                    <h2>{{ $feature->title }}</h2>
                    <h3>{{ $feature->short_text }}</h3>
                    <img src="{{ Storage::url($feature->icon) }}" alt="{{ $feature->title }}" width="50px">
                    <img src="{{ Storage::url($feature->image) }}" alt="{{ $feature->image }}" width="350px">
                </div>
            </div>
        @empty
            Nt result
        @endforelse
    </div>
@endsection
