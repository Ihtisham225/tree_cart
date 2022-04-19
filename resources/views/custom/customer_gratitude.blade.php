@extends('custom.base')

@section('title')
gratitde
@endsection

@section('navbar')
    @include('includes.navbar');
    
@endsection

@section('main-content')
<div class="about-content">
    <h1>Gratitude</h1>
    <p>
        Thank you for trusting us <b style="color: #5bb5ee">{{ $name }}</b>. Keep suppporting Treecart.
        Your product will be delivered to you soon.<br>
        Feel free to <a href="{{ Route('contact') }}">contact us </a>
    </p>
    <p><a style="color:#5bb5ee" href="{{ Route('home') }}">Buy more products</a></p>
</div>
@endsection