@extends('layouts.app')
@section('title','Contact us')

@push('push_css')
    <link rel="stylesheet" href="{{ asset('css/contact_us.css') }}">
@endpush

@section('content')
    <div class="container">
        <div class="contact-us d-flex flex-row flex-wrap ">
            <div class="contact-us-col ">
                <h1 class="contact-us-title">Contact us</h1>
                <p class="contact-us-text">Do you have any questions about using the platform, do you want to share your impressions of the use
                    or
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
                               placeholder=""
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
                    <div class="form-group ">
                        <input type="submit"
                               value="Send"
                               class="btn-continue send ml-auto"
                        >
                    </div>
                </form>
            </div>

            <div class="contact-us-col d-flex flex-column">
                <div class="contact-mail-block">
                    <div class="contact-for">For general inquiries</div>
                    <div class="contact-mail">support@talkcounsel.com</div>
                </div>

                <div class="contact-mail-block">
                    <div class="contact-for">For press and media inquiries</div>
                    <div class="contact-mail">press@talkcounsel.com</div>
                </div>

                <div class="contact-mail-block">
                    <div class="contact-for">For ideas and suggestions</div>
                    <div class="contact-mail">hello@talkcounsel.com</div>
                </div>
            </div>
        </div>

    </div>
@endsection
