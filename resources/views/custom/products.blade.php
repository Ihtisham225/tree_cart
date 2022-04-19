@extends('custom.base')

@section('navbar')
    @include('includes.navbar');
    
@endsection

@section('main-content')

    @foreach ($products as $product)
        {{ $product->name }}
    @endforeach

@endsection