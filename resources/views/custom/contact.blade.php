@extends('custom.base')

@section('title')
contact
@endsection

@section('navbar')
    @include('includes.navbar');
    
@endsection

@section('main-content')
<div class="whole-contact-content">
<h2 class="contact-heading">Feedback</h2>
    <div class="contact-content">
        <h4 class="cart-sub-heading">We are happy to hear from you</h4>
        <div class="feedback-form">
            <form action="{{ Route('feedback') }}" method="POST" id="feedback-form">
                @csrf
                <input class="feedback-input" name="name" type="text" placeholder="Name" value="{{ old('name') }}" >
                <input class="feedback-input" name="email" type="text" placeholder="email" value="{{ old('email') }}" required><br>
                <input class="feedback-input" name="subject" type="text" placeholder="Subject" value="{{ old('subject') }}" required><br>
                <textarea class="feedback-form-textarea" name="message" id="feedback-form" cols="50" rows="5" placeholder="Message" required>{{ old('message') }}</textarea><br>
                <button class="feedback-button">Send Message</button>
            </form>
            
            {{-- Displaying error message --}}
            <div>
                @foreach($errors->all() as $error)
                    <li style="color:red;">{{ $error }}</li>
                @endforeach
            </div>
            <p style="margin-top:15px">Don't forget to see <a style="color:#5ab3ed" href="{{ Route('about') }}">About</a> </p>
        </div>
    </div>
</div>
@endsection