@extends('layouts.app')
@section('title','Contact us')

@section('content')
    <div class="container">
        <h1>Contact us</h1>
        <p>Do you have any questions about using the platform, do you want to share your impressions of the use or
            propose an idea? Leave us a message and we will certainly read it.</p>
         @if($message = session('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
         @endif

        <form action="{{ route('create_contact_message') }}" method="post">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text"
                       name="subject"
                       id="subject"
                       class="form-control"
                       value="{{ old('subject') }}"
                >
                @error('subject')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text"
                       name="email"
                       id="email"
                       class="form-control"
                       value="{{ old('email') }}"
                       placeholder="example@example.com"
                >
                @error('email')
                {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message"
                          id="message"
                          class="form-control"
                          cols="30"
                          rows="10"
                >{{ old('message') }}</textarea>
                @error('message')
                {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <input type="submit"
                       value="Send"
                       class="btn-continue"
                >
            </div>
        </form>
    </div>
@endsection
