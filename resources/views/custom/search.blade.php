@extends('custom.base')

@section('title')
search
@endsection

@section('navbar')
    @include('includes.navbar');
    
@endsection

@section('main-content')

<div class="home-main-content">
    @foreach ($products as $product)
        <div class="home-sub-content">
            <h3 style="background: #85d2f4; height:30px">{{ $product->pd_name }}</h3>
                <a href="{{ url('/detail/'.$product->id) }}"><img class="home-product-image" src="{{ asset('product/'.$product->pd_image_path) }}" alt="product image"></a>
                <h2>Price: ${{ $product->pd_price }}</h2>
        </div>
    @endforeach
</div>

@endsection