@extends('custom.base')

@section('title')
cart
@endsection

@section('navbar')
    @include('includes.navbar');
    
@endsection

@section('main-content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
                <div class="cart-content">
                    <h3 class="cart-heading">Your Cart</h3>
                    <h6 class="cart-sub-heading"><a href="{{ url('/home') }}" style="text-decoration:none">Continue Shopping</a></h6>
                        <div>
                            @if (!Session::has('products'))
                
                                <h4>Your cart is empty</h4>
                            
                            @else
                            @php
                                $counter = 0;
                            @endphp
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(Session::has('products'))
                                        @php
                                            $subtotal = 0;
                                        @endphp
                                    @foreach (Session::get('products') as $product)
                                        @php
                                            $total = ($product['price']) * ($product['qty']);
                                            $subtotal += $total;
                                            $counter++;
                                        @endphp
                                        
                                    
                                    <tr>
                                        <td>{{ $counter }}</td>
                                        <td>{{ $product['name'] }}</td>
                                        <td>{{ $product['price'] }}</td>
                                        <td>
                                            <form action="{{ Route('update') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $product['id'] }}">
                                                <small class="text-muted"><input style="background:#f4f5f7; border:none; width:40px; text-align:right;" class="qty" name="quantity" type="number" value="{{ $product['qty'] }}"></small>
                                                <button type="submit"><i class="fa fa-check"></i></button>
                                            </form>
                                        </td>
                                        <td>${{ $total }}</td>
                                        <td><a href="{{ url('/delete/'.$product['id']) }}"><i class="fa fa-trash"></i></a>
                                    </tr>
                                    @endforeach
                                    @endif
                                
                                </tbody>
                            </table>
                            
                            
                        </div>
                    <div style="float:right; margin-right: 300px;">
                        <strong>Subtotal: ${{ $subtotal }}</strong>  <br>
                        <button class="btn btn-warning"><a href="{{ url('checkout/'.$subtotal) }}">CHECK OUT</a></button>
                             <br>
                        <button class="btn btn-danger m-2"><a class="text-white" style="text-decoration: none;" href="{{ Route('clear') }}">Clear Cart</a></button>
                    </div>
                    @endif
                
            </div>
        </div>
    </div>
@endsection