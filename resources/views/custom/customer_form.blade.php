@extends('custom.base')

@section('title')
    order
@endsection

@section('navbar')
    @include('includes.navbar');
    
@endsection

@section('main-content')

<div class="whole-contact-content">
    <h2 class="contact-heading">Dear Customer</h2>
        <div class="contact-content">
            <h4 class="cart-sub-heading">Please provide correct information, so that product could be delivered easily to you</h4>
            <div class="feedback-form">
               
                <form action="{{ Route('placeorder') }}" method="POST" id="feedback-form">
                    @csrf
                    <input class="feedback-input" name="name" type="text" placeholder="Name" value="{{ old('name') }}" >
                    <input class="feedback-input" name="email" type="text" placeholder="email" value="{{ old('email') }}" required><br>
                    <input class="feedback-input" name="phone" type="text" placeholder="phone_no" value="{{ old('phone') }}" required><br>
                    <textarea class="feedback-form-textarea" name="location" id="feedback-form" cols="50" rows="5" placeholder="Where do you want to delever the product" required>{{ old('location') }}</textarea><br>
                    <button class="feedback-button">Place Order</button>
                </form>

            </div>
        </div>
</div>

@endsection