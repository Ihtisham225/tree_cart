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
            @if(!Session::has('products'))
                <div class="cart-content">
                    <h1 class="cart-heading">Your Cart</h1>
                    <h4 class="cart-sub-heading">There are no items yet</h4>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ Route('home') }}">Go back to shop</a>

                </div>
            @else
                <div class="items-table">

                    <table class="products-table">
                        <tr>

                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Edit</th>
                            <th>Unit Price</th>
                            <th>Total Price</th>
                            <th>Delete</th>
                        </tr>

                        @if(Session::has('products'))
                        @php
                         $subtotal = 0;
                        @endphp


                            @foreach(Session::get('products') as $product)
                            @php
                                $total = ($product['price']) * ($product['qty']);
                                $subtotal += $total;
                            @endphp
                        <tr>

                            <form action="{{ Route('update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product['id'] }}">

                                <td>{{ $product['name'] }}</td>

                                <td>
                                    <input style="background:#f4f5f7; border:none; width:40px; text-align:right;" class="qty" name="quantity" type="number" value="{{ $product['qty'] }}">
                                    
                                </td>
                                <td>
                                    <input class="update" type="submit" name="update" value="Update">
                                </td>

                                <td>${{ $product['price'] }}</td>
                                <td>${{ $total }}</td>
                            </form>
                            <td>

                                <a class="delete_item" href="{{ url('/delete/'.$product['id']) }}"><i class="fas fa-trash"></i></a>

                            </td>

                        </tr>
                            @endforeach

                            @endif
                    </table>

                    <h3 style="margin-left:10px">Total Items: {{ count(Session::get('products')) }} </h3>
                    <h3 style="margin-left:10px">Sub Total Price: ${{ $subtotal }}  <button><a class="checkout" href="{{ url('/checkout/'.$subtotal) }}">Checkout</a></button><br></h3>

                    <button style="margin-left:10px"><a class="delete" href="{{ Route('clear') }}"><i class="fas fa-minus-circle"></i>Clear Cart</a></button>
                    <h3><a class="shop" href="{{ Route('home') }}">Continue Shopping</a></h3>

                </div>
            @endif
        </div>
    </div>
@endsection
