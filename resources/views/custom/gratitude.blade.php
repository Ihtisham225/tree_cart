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
        Thank you <b style="color:#5bb5ee">{{ $name }}</b> for your feedback. Keep suppporting us.
        Your feedback has been sent to TreeCart.
    </p>
    <p><a style="color:#5bb5ee" href="{{ Route('home') }}">Go bact to shop</a></p>
</div>
@endsection