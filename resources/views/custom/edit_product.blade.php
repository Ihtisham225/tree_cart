<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
                <div class="contact-content">
                    <h1 class="cart-heading">Edit Product</h1>
                    <h4 class="cart-sub-heading">Please Provide Complete Information</h4>
                    <div class="feedback-form">
                        
                        @if ($errors->any())
                            <div class="alert-danger">
                                <ul>
                                     @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                 </ul>
                                </div>
                        @endif

                        <form action="{{ Route('editProduct') }}" id="feedback-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input name="item_id" type="hidden" value="{{ $item->id }}">
                            <input class="feedback-input" name="name" type="text" placeholder="Product Name" value="{{ $item->pd_name }}" required>
                            <input class="feedback-input" name="price" type="text" placeholder="Product Price" value="{{ $item->pd_price }}" required><br>
                            <input class="feedback-input" name="qty" type="number" placeholder="Product Quantity" value="{{ $item->pd_quantity }}" required><br>
                            <select class="form-select" name="category">  
                                <option value="{{ $item->pd_category }}" selected>{{ $item->pd_category }}</option>
                                <option value="digital">Digital</option>
                                <option value="hand_made">Hand Made</option>
                                <option value="craft">Crafts</option>
                                <option value="medical">Medical</option>
                                <option value="home">Home</option>
                                <option value="tool">Tools</option>
                                <option value="sport">Sports</option>
                                <option value="book">Books</option>
                            </select><br>
                            <label><b>Product Images</b></label><br>
                            <input class="feedback-input" name="image" type="file"> 
                            <input class="feedback-input" name="image2" type="file">
                            <input class="feedback-input" name="image3" type="file"><br>
                            <textarea class="feedback-form-textarea" name="discription" id="feedback-form" cols="50" rows="5" placeholder="Product Discription" required>{{ $item->pd_discription }}</textarea><br>
                            <button class="feedback-button">Update Product</button>
                        </form>
                        <button class="delete-product-button"><a href="{{ url('/deleteproduct/'.$item->id) }}">Delete Product</a></button>
                        
                    </div>
                
            </div>
        </div>
    </div>
</x-app-layout>