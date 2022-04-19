@extends('custom.base')

@section('title')
home
@endsection

{{-- Nav Bar --}}
@section('navbar')
    @include('includes.navbar');
    
@endsection


{{-- Main content --}}
@section('main-content')
            <div class="search">
                <form class="search" action="{{ Route('searchProduct') }}" method="get">
                    @csrf
                    <input class="form-control mr-sm-2 float-right" type="search" name="search" placeholder="search product">
                    <button class="search-button"><i class="fas fa-search"></i></button>
                </form>
            </div>
    <div style="background: lightgrey; margin:20px; border-radius:20px;">
        <div id="sport" style="width: 15%; height:50px; background:#ea563e; margin-top:50px; border-radius:5px 50px 50px 5px">
            <h2 style="font-weight: bolder; text-align: center; letter-spacing:3px; color:white">Sports</h2>
        </div>
        <div class="home-main-content">
            @if ($products)
                @foreach ($products as $product)
                    @if ($product->category == 'sport')
                        <div class="home-sub-content">
                            <h3 style="background: #85d2f4; height:40px;">{{ $product->pd_name }}</h3>
                            <a href="{{ url('/detail/'.$product->id) }}"><img class="home-product-image" src="{{ asset('product/'.$product->pd_image_path) }}" alt="product image"></a>
                            <h2>Price: ${{ $product->pd_price }}</h2>
                        </div>
                    @endif   
                @endforeach
            @endif
        </div>
    </div>
    
    <div style="background: lightgrey; margin:20px; border-radius:20px;">
        <div id="digital" style="width: 15%; height:50px; background:#ea563e; margin-top:20px; border-radius:5px 50px 50px 5px">
            <h2  style="font-weight: bolder; text-align: center; letter-spacing:3px; color:white">Digital</h2>
        </div>
        <div class="home-main-content">
            @if ($products)
                @foreach ($products as $product)
                    @if ($product->category == 'digital')
                        <div class="home-sub-content">
                            <h3 style="background: #85d2f4; height:40px;">{{ $product->pd_name }}</h3>
                            <a href="{{ url('/detail/'.$product->id) }}"><img class="home-product-image" src="{{ asset('product/'.$product->pd_image_path) }}" alt="product image"></a>
                            <h2>Price: ${{ $product->pd_price }}</h2>
                        </div>
                    @endif   
                @endforeach
            @endif
        </div>
    </div>

    <div style="background: lightgrey; margin:20px; border-radius:20px;">
        <div id="hand_made" style="width: 25%; height:50px; background:#ea563e; margin-top:20px; border-radius:5px 50px 50px 5px">
            <h2  style="font-weight: bolder; text-align: center; letter-spacing:3px; color:white">Hand Made</h2>
        </div>
        <div class="home-main-content">
            @if ($products)
                @foreach ($products as $product)
                    @if ($product->category == 'hand_made')
                        <div class="home-sub-content">
                            <h3 style="background: #85d2f4; height:40px;">{{ $product->pd_name }}</h3>
                            <a href="{{ url('/detail/'.$product->id) }}"><img class="home-product-image" src="{{ asset('product/'.$product->pd_image_path) }}" alt="product image"></a>
                            <h2>Price: ${{ $product->pd_price }}</h2>
                        </div>
                    @endif   
                @endforeach
            @endif
        </div>
    </div>

    <div style="background: lightgrey; margin:20px; border-radius:20px;">
        <div id="furniture" style="width: 15%; height:50px; background:#ea563e; margin-top:20px; border-radius:5px 50px 50px 5px">
            <h2 style="font-weight: bolder; text-align: center; letter-spacing:3px; color:white">Furniture</h2>
        </div>
        <div class="home-main-content">
            @if ($products)
                @foreach ($products as $product)
                    @if ($product->category == 'furniture')
                        <div class="home-sub-content">
                            <h3 style="background: #85d2f4; height:40px;">{{ $product->pd_name }}</h3>
                            <a href="{{ url('/detail/'.$product->id) }}"><img class="home-product-image" src="{{ asset('product/'.$product->pd_image_path) }}" alt="product image"></a>
                            <h2>Price: ${{ $product->pd_price }}</h2>
                        </div>
                    @endif   
                @endforeach
            @endif
        </div>
    </div>

    <div style="background: lightgrey; margin:20px; border-radius:20px;">
        <div id="book" style="width: 15%; height:50px; background:#ea563e; margin-top:20px; border-radius:5px 50px 50px 5px">
            <h2  style="font-weight: bolder; text-align: center; letter-spacing:3px; color:white">Books</h2>
        </div>
        <div class="home-main-content">
            @if ($products)
                @foreach ($products as $product)
                    @if ($product->category == 'book')
                        <div class="home-sub-content">
                            <h3 style="background: #85d2f4; height:40px;">{{ $product->pd_name }}</h3>
                            <a href="{{ url('/detail/'.$product->id) }}"><img class="home-product-image" src="{{ asset('product/'.$product->pd_image_path) }}" alt="product image"></a>
                            <h2>Price: ${{ $product->pd_price }}</h2>
                        </div>
                    @endif   
                @endforeach
            @endif
        </div>
    </div>

    {{-- <div style="background: lightgrey; margin:20px; border-radius:20px;">
        <div id="shoes" style="width: 15%; height:50px; background:#ea563e; margin-top:20px; border-radius:5px 50px 50px 5px">
            <h2  style="font-weight: bolder; text-align: center; letter-spacing:3px; color:white">Shoes</h2>
        </div>
        <div class="home-main-content">
            @if ($products)
                @foreach ($products as $product)
                    @if ($product->category == 'shoes')
                        <div class="home-sub-content">
                            <h3 style="background: #85d2f4; height:40px;">{{ $product->pd_name }}</h3>
                            <a href="{{ url('/detail/'.$product->id) }}"><img class="home-product-image" src="{{ asset('product/'.$product->pd_image_path) }}" alt="product image"></a>
                            <h2>Price: ${{ $product->pd_price }}</h2>
                        </div>
                    @endif   
                @endforeach
            @endif
        </div>
    </div> --}}
    <div style="margin-top:50px; margin-left:38%;">
        {{ $products->links() }}    
    </div>

@endsection

                