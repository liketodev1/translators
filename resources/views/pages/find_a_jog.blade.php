@extends('layouts.app')
@section('title','Find a Job')
@section('content')
    <div class="container">
        @if(count($jobs)>0)
        @foreach ($jobs as $job)
            <div class="card">
                <h5 class="card-header">{{ $job->specialization->name }}</h5>
                <div class="card-body">
                    <h5 class="card-title">{{ $job->country->name }}</h5>
                    <p class="card-text">{{ $job->description }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
        @else
            Not result
        @endif

    </div>
@endsection
