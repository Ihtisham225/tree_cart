<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Products') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="alert-success">
                    @if (Session::has('success'))
                        {{ Session::get('success') }}
                    @endif
                </div>
                <div class="main-content">
                    @foreach ($products as $product)
                        
                        <div class="sub">
                            <a href="{{ url('/productdetail/'.$product->id) }}"><img class="product-image" src="{{ asset('product/'.$product->pd_image_path) }}" alt="product image"></a>
                            <h3>{{ $product->pd_name }}</h3>
                            <h2>${{ $product->pd_price }}</h2>
                        </div>
                        
                    @endforeach
                </div>
            </div>
        </div>
    </div> --}}

    <div class="alert-success" style="text-align: center">
        @if (Session::has('success'))
            {{ Session::get('success') }}
        @endif
    </div>
    <div class="home-main-content" style="margin-top:10px;">

        @php
            $counter = 0;
        @endphp
        <table class="styled-table" border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>In-stock</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                @php
                    $total = ($product->pd_price) * ($product->pd_quantity);
                    $counter++;
                @endphp
                    <tr>
                        <td>{{ $counter }}</td>
                        <td ><a  style="margin-left:20px;" href="{{ url('/productdetail/'.$product->id) }}"><img style="display:inline; margin-top:20px; width:60px; height:60px" src="{{ asset('product/'.$product->pd_image_path) }}" alt="product image"></a></td>
                        <td>{{ $product->pd_name }}</td>
                        <td>${{ $product->pd_price }}</td>
                        <td>{{ $product->pd_quantity }}</td>
                        <td>${{ $total}}</td>
                        <td>
                            <a href="{{ url('/deleteproduct/'.$product->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="position:fixed; right:0; top:20;">
            <div  style="background: lightgrey; width: 350px; height:100px; padding: 20px; border-radius:20px; margin-left:40px; margin-top:23px;">
                <span>Total Products In Stock: <b>{{ count($products) }}</b></span><br>
                {{-- <span>Total Amount of Current Stock: <b>${{ $subtotal }}</b></span> --}}
            </div>

            <div style="background: rgb(79, 150, 241); width: 350px; height:100px; padding: 20px; border-radius:20px; margin-top:30px; margin-left:40px;">
                <span>Total Products Sold: <b>7</b></span><br> 
                <span>Total Profit: <b>$3000</b></span>
            </div>

            <div style="background: rgb(241, 90, 79); width: 350px; height:100px; padding: 20px; border-radius:20px; margin-top:30px; margin-left:40px;">
                <span>Total Products Sold In Loss: <b>2</b></span><br> 
                <span>Total Loss: <b>$100</b></span>
            </div>
        </div>

        
        {{-- @foreach ($products as $product)
            <div class="home-sub-content shadow p-3 mb-5 bg-white rounded" >
                <h3 style="background: #85d2f4; height:40px;">{{ $product->pd_name }}</h3>
                <a href="{{ url('/productdetail/'.$product->id) }}"><img class="home-product-image" src="{{ asset('product/'.$product->pd_image_path) }}" alt="product image"></a>
                <h2>Price: ${{ $product->pd_price }}</h2>
            </div>   
        @endforeach --}}
        
    </div>
</x-app-layout>
