@extends('custom.base')

@section('title')
item-detail
@endsection

@section('navbar')
    @include('includes.navbar');
    
@endsection


@section('main-content')

<!-- item information -->
<div class="info">
    <h1 class="cart-heading" style="text-align:left">{{ $item->pd_name }}</h1>
    <h4 class="cart-sub-heading" style="text-align:left">Price: ${{ $item->pd_price }}</h4>
    <h4 class="cart-sub-heading" style="text-align:left">In Stock: {{ $item->pd_quantity }}</h4>
    <p style="text-align: left;">{{ $item->pd_discription }}</p>

    <form action="{{ Route('cart') }}" method="POST">
        @csrf
        <input type="hidden" name="name" value="{{ $item->pd_name }}">
        <input type="hidden" name="id" value="{{ $item->id }}">
        <input type="hidden" name="price" value="{{ $item->pd_price }}">
        <input type="hidden" name="qty" value="{{ $item->pd_quantity }}">
        <div style="display: flex; margin-left:-150px"><button class="addtocart-button" style="width: 30%">Add to cart</button></div>
    </form><br>
    
    <p style="text-align: left;"><strong>Seller's information: </strong> <br> Name: {{ $item->user->name }} <br> Email: {{ $item->user->email }}</p>
</div>



<!-- Slideshow container -->
<script src="{{ asset('js/myscripts.js') }}"></script>
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade" style="display: contents; width:1000px">
    <div class="numbertext">1 / 3</div>
    <img src="{{ asset('product/'.$item->pd_image_path) }}" style="width:50%; margin-top:30px; height:500px; object-fit: contain">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="{{ asset('product/'.$item->pd_image2_path) }}" style="width:50%; margin-top:30px; height:500px; object-fit: contain">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="{{ asset('product/'.$item->pd_image3_path) }}" style="width:50%; margin-top:30px ; height:500px; object-fit: contain">
    
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center; margin-right: 815px;">
  <span class="dot" onclick="currentSlide(1)"><img src="{{ asset('product/'.$item->pd_image_path) }}" style="width:50px; height:50px;" alt=""></span>
  <span class="dot" style="margin-left:50px;" onclick="currentSlide(2)"><img src="{{ asset('product/'.$item->pd_image2_path) }}" style="width:50px; height:50px;" alt=""></span>
  <span class="dot" style="margin-left:50px;" onclick="currentSlide(3)"><img src="{{ asset('product/'.$item->pd_image3_path) }}" style="width:50px; height:50px;" alt=""></span>
  {{-- <span class="dot" onclick="currentSlide(2)"><div style="background: green; width:15px; height:15px; border-radius:100%;"></div></span>
  <span class="dot" onclick="currentSlide(3)"><div style="background: blue; width:15px; height:15px; border-radius:100%;"></div></span> --}}
</div>


    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="detail-content">
                    <h1 class="cart-heading">{{ $item->pd_name }}</h1>
                    <h4 class="cart-sub-heading">${{ $item->pd_price }}</h4>
                    <h4 class="cart-sub-heading">In Stock: {{ $item->pd_quantity }}</h4>
                    <div class="detail-item-image">
                        <img class="product-image" src="{{ asset('product/'.$item->pd_image_path) }}" alt="product image">
                        <img class="product-image" src="{{ asset('product/'.$item->pd_image_path) }}" alt="product image">
                        <img class="product-image" src="{{ asset('product/'.$item->pd_image_path) }}" alt="product image">
                    </div>
                    
                    <div class="info">
                        {{ $item->pd_discription }}
                    </div>
                
                    <div>
                        <form action="{{ Route('cart') }}" method="POST">
                            @csrf
                            <input type="hidden" name="name" value="{{ $item->pd_name }}">
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <input type="hidden" name="price" value="{{ $item->pd_price }}">
                            <input type="hidden" name="qty" value="{{ $item->pd_quantity }}">
                            <button  class="addtocart-button">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection