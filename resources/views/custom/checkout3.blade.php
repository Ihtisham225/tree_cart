@extends('custom.base')

@section('title')
checkout
@endsection

@section('navbar')
    @include('includes.navbar');
    
@endsection

@section('main-content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
                <div class="cart-content">
                    <h1 class="cart-heading">Payment Options</h1>
                    <h4 class="cart-sub-heading">How do you want to pay <strong>${{ $price }}</strong> +delevery charges</h4>
                    <h3 class="cart-sub-heading">
                        
                        <div class="payment-options">
                            
                            <a href="#"><img class="easypaisa" src="{{ asset('product/easypaisa.jpg') }}" alt="easypaisa"></a>
                            <a href="#"><img class="easypaisa" src="{{ asset('product/JazzCash.jpg') }}" alt="jazzcash"></a>
                            <a href="#"><img class="easypaisa" src="{{ asset('product/visa.png') }}" alt="visa"></a>
                        
                        </div>
                        
                    </h3>
                    <h4 class="cart-sub-heading"><a href="{{ Route('customerForm') }}">Click here</a> if you want to pay by hands after receving the product.</h4>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ Route('cart') }}">Go back to cart</a>
                
            </div>
        </div>
    </div>
@endsection