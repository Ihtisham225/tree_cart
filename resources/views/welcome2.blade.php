<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TreeCart</title>
        <!-- add icon link -->
        <link rel = "icon" href = "{{asset('logo/titlelogo.png')}}" type = "image/x-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('css/font/all.min.css') }}">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito';
            }

            .carousel-inner{
                margin:auto;
                max-width: 60%;
            }

            .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
      }
        </style>

        <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">

        <!-- Custom styles for this template -->
        <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">

        
        
    </head>

    <body>
      <header id="navbar">
        <ul>
            <li><a href="/"><img style="height: 5rem; width= 5rem; margin-top:-25px" src="{{asset('logo\homelogo.png')}}" alt=""></a></li>
            <li><a href="{{ url('/home') }}"><b>Home</b></a></li>
            <li><a href="{{ Route('contact') }}"><b>Contact</b></a></li>
            <li><a href="{{ Route('about') }}"><b>About</b></a></li>
            <li><a href="{{ Route('cart') }}"><b>Cart</b></a></li>
            <li>
                <div class="login-logout" style="margin-left:900px">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }} ">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
        
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                            @endauth
                        @endif
                  </div>
              </li>
        </ul>
      </header>
        <main>
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img" width="100%" height="100%" src="{{asset('slideshow/background1.jpg')}}" alt="">
          
                  <div class="container">
                    <div class="carousel-caption text-start rounded p-4" style="background: rgba(15, 15, 15, 0.37)">
                      <h1>Upgrage Your Bussiness</h1>
                      <p>Open your store here and sell products.</p>
                      <p><a class="btn btn-lg btn-primary" href="{{ Route('register') }}">Open Store</a></p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="100%" src="{{asset('slideshow/background2.jpg')}}" alt="">

                  <div class="container">
                    <div class="carousel-caption rounded p-4" style="background: rgba(15, 15, 15, 0.37)"">
                      <h1>Already have a store?</h1>
                      <p>Go to your store and sell some products</p>
                      <p><a class="btn btn-lg btn-primary" href="{{ Route('login') }}">Go to Store</a></p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" width="50%" height="100%" src="{{asset('slideshow/background3.jpg')}}" alt="">

                  <div class="container">
                    <div class="carousel-caption text-end rounded p-4" style="background: rgba(15, 15, 15, 0.37)"">
                      <h1>Buy almost anything</h1>
                      <p>Almost anything at good prices are available here</p>
                      <p><a class="btn btn-lg btn-primary" href="{{ url('/home') }}">Browse products</a></p>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          
          
            <!-- Marketing messaging and featurettes
            ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->
          
            <div class="container marketing">
          
              <!-- Three columns of text below the carousel -->
              <div class="row">
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset('product/1637831342second.jpg') }}" alt="">
          
                  <h2>Phones</h2>
                  <p>You will find best smart phones, new and second hand, at good prices</p>
                  <p><a class="btn btn-secondary" href="{{ url('/home#digital') }}">Buy Now</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">

                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset('product/1637829392second.jpg') }}" alt="">

                  <h2>Laptops</h2>
                  <p>Best laptop dealers from all over the world, buy at goo prices</p>
                  <p><a class="btn btn-secondary" href="{{ url('/home#digital') }}">Buy Now</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset('product/1637831451second.jpg') }}" alt="">
          
                  <h2>Shoes</h2>
                  <p>Hand Make Shoes, Shirts, Sweaters, Jackets and all other outfits, at good prices</p>
                  <p><a class="btn btn-secondary" href="{{ url('/home#shoes') }}">Buy Now</a></p>
                </div><!-- /.col-lg-4 -->
              </div><!-- /.row -->
          
          
              <!-- START THE FEATURETTES -->
          
              <hr class="featurette-divider">
          
              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">Dreams came true. <span class="text-muted">It's very easy.</span></h2>
                  <p class="lead">Now you can find tools of your own choice <a href="{{ url('/home#tool') }}">Here</a>. Enjoy working on your tools. </p>
                </div>
                <div class="col-md-5">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="{{ asset('media/tool.jpg') }}" width="500" height="500" alt="">
          
                </div>
              </div>
          
              <hr class="featurette-divider">
          
              <div class="row featurette">
                <div class="col-md-7 order-md-2">
                  <h2 class="featurette-heading">You love sports <span class="text-muted">You have chosen the right place.</span></h2>
                  <p class="lead">You can find sports shirts, kits and other best sports accessoris <a href="{{ url('/home#sport') }}">here</a>.  </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="{{ asset('media/sport.jpg') }}" width="500" height="500" alt="">

                </div>
              </div>
          
              <hr class="featurette-divider">
          
              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">Of course!. <span class="text-muted">Furnitures.</span></h2>
                  <p class="lead">Buy furniture and other home accessoris here <a href="{{ url('/home#hand_made') }}">here</a>. If you already have a store of furniture then open a store here and upgrage your bussiness. <a href="{{ Route('register') }}">now</a> </p>
                </div>
                <div class="col-md-5">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="{{ asset('media/furniture.jpg') }}" width="500" height="500" alt="">

                </div>
              </div>


              <hr class="featurette-divider">
          
              <div class="row featurette">
                <div class="col-md-7 order-md-2">
                  <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                  <p class="lead">Buy beautiful hand made crafts <a href="{{ url('/home#hand_made') }}">here</a>. These items are exclusive and limited. If you can make hand made items then what are you waiting for start selling your items <a href="{{ Route('register') }}">now</a> </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="{{ asset('media/craft.jpg') }}" width="500" height="500" alt="">

                </div>
              </div>
          
              <hr class="featurette-divider">
          
              <!-- /END THE FEATURETTES -->
          
            </div><!-- /.container -->
          
          
            <!-- FOOTER -->
            <footer class="container">
                <p class="float-end"><a href="#"><i class="fas fa-arrow-up"></i></a></p>
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
        </main>
        
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    {{-- Navbar Script --}}
    <script src="{{ asset('js/navbar.js') }}"></script>
    
    </body>
</html>
