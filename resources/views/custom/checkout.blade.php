@extends('custom.base')

@section('title')
checkout
@endsection

@section('navbar')
    @include('includes.navbar');
    
@endsection

@section('main-content')
<div class="container">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="{{ asset('logo/homelogo.png') }}" alt="" width="100" height="100">
        <h2>Checkout form</h2>
        <h4 style="text-align: center;">
          Total Items: <span class="badge bg-primary rounded-pill">@if (!Session::has('products')) 0 @else {{ count(Session::get('products')) }} @endif</span> <br>
          Subtotal: <span class="badge bg-primary rounded-pill">${{ $price }}</span>
        </h4>
        {{-- <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p> --}}
      </div>
      {{-- <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Your cart</span>
            <span class="badge bg-primary rounded-pill">@if (!Session::has('products')) 0 @else {{ count(Session::get('products')) }} @endif</span>
          </h4>
            @if (!Session::has('products'))
                
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Your cart is empty</h6>
                    </div>
                    </li>
                </ul>
            @else

                @if(Session::has('products'))
                    @php
                    $subtotal = 0;
                    @endphp

                    @foreach(Session::get('products') as $product)
                    @php
                        $total = ($product['price']) * ($product['qty']);
                        $subtotal += $total;
                    @endphp
                    
                    
                    <form action="{{ Route('update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product['id'] }}">
                        <ul class="list-group mb-3 w-100 h-100">
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">{{ $product['name'] }}</h6>
                                <small class="text-muted"><input style="background:#f4f5f7; border:none; width:40px; text-align:right;" class="qty" name="quantity" type="number" value="{{ $product['qty'] }}"></small>
                                <input class="update" type="submit" name="update" value="Update">
                            </div>
                            <span class="text-muted">${{ $product['price'] }} | T:${{ $total }}</span>
                            <span class="text-muted"><a style="font-size:small;" class="delete_item" href="{{ url('/delete/'.$product['id']) }}"><i class="fas fa-trash"></i></a></span>
                            </li>
                               
                        </ul>
                    </form>
                    @endforeach
                @endif

                    <li class="list-group-item d-flex justify-content-between">
                    <span>Sub-total: </span>
                    <strong>${{ $subtotal }}</strong>
                    <button style="margin-left:10px"><a style="padding: 1px 4px" class="delete" href="{{ Route('clear') }}"><i class="fas fa-minus-circle"></i>Clear Cart</a></button>
                    </li>
                </ul>
            @endif
        </div> --}}
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" action="#" method="POST" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
  
              <div class="col-sm-6">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
  
              <div class="col-12">
                <label for="username" class="form-label">Username</label>
                <div class="input-group has-validation">
                  <span class="input-group-text">@</span>
                  <input type="text" class="form-control" id="username" placeholder="Username" required>
                <div class="invalid-feedback">
                    Your username is required.
                  </div>
                </div>
              </div>
  
              <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>
  
              <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>
  
              <div class="col-12">
                <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
              </div>
  
              <div class="col-md-5">
                <label for="country" class="form-label">Country</label>
                <select class="form-select" id="country" required>
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
  
              <div class="col-md-4">
                <label for="state" class="form-label">State</label>
                <select class="form-select" id="state" required>
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
  
              <div class="col-md-3">
                <label for="zip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
  
            <hr class="my-4">
  
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="same-address">
              <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
  
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="save-info">
              <label class="form-check-label" for="save-info">Save this information for next time</label>
            </div>
  
            <hr class="my-4">
  
            <h4 class="mb-3">Payment</h4>
  
            <div class="my-3">
              <div class="form-check">
                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                <label class="form-check-label" for="credit">Credit card</label>
              </div>
              <div class="form-check">
                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="debit">Debit card</label>
              </div>
              <div class="form-check">
                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="paypal">PayPal</label>
              </div>
            </div>
  
            <div class="row gy-3">
              <div class="col-md-6">
                <label for="cc-name" class="form-label">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
  
              <div class="col-md-6">
                <label for="cc-number" class="form-label">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
  
              <div class="col-md-3">
                <label for="cc-expiration" class="form-label">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
  
              <div class="col-md-3">
                <label for="cc-cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>

            
            <hr class="my-4">
            
            <div class="my-1">
                <div class="form-check">
                  <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                  <label class="form-check-label" for="credit">Easy Paisa</label>
            </div>

            </div>
              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required>
                  <div class="invalid-feedback">
                    Account Name required
                  </div>
                </div>
    
                <div class="col-md-6">
                  <label for="cc-number" class="form-label">Account number</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required>
                  <div class="invalid-feedback">
                    Account Number is required
                  </div>
                </div>
            </div>

            <hr class="my-4">
            
            
            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>
    </main>
  
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <footer>
            <div class="footer">
                <div class="contact">
                    <h3>Contact us</h3>
                    <p>
                        <a href="https://www.nextleadz.com" target="blank" style="color: blue; margin-right:10px">Nextin</a>
                        
                    </p>
                    <h3>Leave Feedback here</h3>
                    <a href="{{ Route('contact') }}" style="color: blue; margin-right:10px">www.treecart/contact</a>
                </div>

                <div class="contact">
                    <h3>Follow us:</h3>
                    <p>
                        <a href="https://web.facebook.com/profile.php?id=100004237964678" target="blank" style="font-size:40px; margin-right:10px"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/khan_shamir_official/" target="blank" style="font-size:40px; margin-right:10px"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/shamir125" target="blank" style="font-size:40px; margin-right:10px"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/ihtisham-ul-haq-83a5a8171/" target="blank" style="font-size:40px; margin-right:10px"><i class="fab fa-linkedin-in"></i></a>
                    </p>
                </div>
            </div>
        </footer>
    </footer>
  </div>
@endsection