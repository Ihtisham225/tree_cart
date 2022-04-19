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

        

        <style>
            /* Slides show styling starts here */
            * {box-sizing:border-box}

            /* Slideshow container */
            .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            }

            /* Hide the images by default */
            .mySlides {
            display: none;
            }

            /* Next & previous buttons */
            .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            }

            /* Position the "next button" to the right */
            .next {
            right: 0;
            border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
            }

            /* Caption text */
            .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            /* background-color: #bbb; */
             background-color: rgba(255, 255, 255, 0); 
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            }

            .active, .dot:hover {
            background-color: #ffffff00;
            }

            /* Fading animation */
            .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
            }

            @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
            }

            @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
            }
            /* Slides show styling ends here */



            body {
                font-family: 'Nunito';
            }
            .shop-btn{
                width: 150px;
                height: 50px;
                position: fixed;
            }
            .shop-button{
                color: white;
                background-color: #ffffff00;
                width: 150px;
                /* border-radius: 0px 100px 100px 0px; */
                border: white solid 1px;
                margin-left:10px;
                height: 50px;
                font-size: 20px;
                line-height: 24px;
                cursor: pointer;
            }
            .shop-button:hover{
                background-color: #ffffff;
                color: black;
            }
            .main-content{
                width: 100%;
                height: 800px;
                /* background-image: url('/media/shoppingcart2.jpg'); */
                background-position: center;
                background-size: cover;

            }
            .contact{
                width: 40%;
                height: 200px;
                float: right;
            }
            
            
           
        </style>
    </head>
    <body class="antialiased">
        <ul>
            <li><a href="/"><img style="height: 5rem; width= 5rem; margin-top:-25px" src="{{asset('logo\homelogo.png')}}" alt=""></a></li>
               <li><a href="{{ url('/home') }}">Home</a></li>
               <li><a href="{{ Route('contact') }}">Contact</a></li>
               <li><a href="{{ Route('about') }}">About</a></li>
               <li><a href="{{ Route('cart') }}">Cart</a></li>
               <li>
                    <div class="login-logout">
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


        <div class="main-content">

            {{-- Slide show --}}

            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <div class="numbertext">1 / 7</div>
                <img src="{{ asset('slideshow/book.jpg') }}" style="width:100%">
                <div class="text"><strong style="font-size:30px;">Buy your favorite books</strong><br><button class="shop-button"><a href="{{ url('/home') }}">Buy Now</a></button></div>
                </div>
            
                <div class="mySlides fade">
                <div class="numbertext">2 / 7</div>
                <img src="{{ asset('slideshow/table.jpg') }}" style="width:100%">
                <div class="text"><strong style="font-size:30px;">Table and chairs are also available</strong><br><button class="shop-button"><a href="{{ url('/home') }}">Buy Now</a></button></div>
                </div>
            
                <div class="mySlides fade">
                <div class="numbertext">3 / 7</div>
                <img src="{{ asset('slideshow/mobile.jpg') }}" style="width:100%">
                <div class="text"><strong style="font-size:30px; color:grey;">Best smartphone deals</strong><br><button class="shop-button"><a href="{{ url('/home') }}">Buy Now</a></button></div>
                </div>

                <div class="mySlides fade">
                <div class="numbertext">4 / 7</div>
                <img src="{{ asset('slideshow/workfromhome.jpg') }}" style="width:100%">
                <div class="text"><strong style="font-size:30px;">Now you can shop from home and anywhere with just one click </strong><br><button class="shop-button"><a href="{{ url('/home') }}">Buy Now</a></button></div>
                </div>

                <div class="mySlides fade">
                <div class="numbertext">5 / 7</div>
                <img src="{{ asset('slideshow/anything.jpg') }}" style="width:100%">
                <div class="text"><strong style="font-size:30px;">Almost anything is available here</strong><br><button class="shop-button"><a href="{{ url('/home') }}">Buy Now</a></button></div>
                </div>

                <div class="mySlides fade">
                <div class="numbertext">6 / 7</div>
                <img src="{{ asset('slideshow/register.jpg') }}" style="width:100%">
                <div class="text"><strong style="font-size:30px;">Open your own store and sell your products</strong><br><button class="shop-button"><a href="{{ Route('register') }}">Open Store</a></button></div>
                </div>

                <div class="mySlides fade">
                <div class="numbertext">7 / 7</div>
                <img src="{{ asset('slideshow/login.jpg') }}" style="width:100%">
                <div class="text"><strong style="font-size:30px;">Go to your store</strong><br><button class="shop-button"><a href="{{ Route('login') }}">Your Store</a></button></div>
                </div>
            
                <!-- Next and previous buttons -->
                {{-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a> --}}
            </div>
            <br>
            
            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
            </div>

            {{-- This section is for logo --}}
            {{-- <div class="welcome-logo">
                <img src="{{asset('logo\homelogo.png')}}" alt="">
            </div> --}}
            {{-- <div class="shop-btn"><button class="shop-button"><a href="{{ url('/home') }}">Buy Now</a></button></div> --}}
            {{-- <h1 class="welcome">Welcom to TreeCart by <a href="https://www.nextleadz.com" target="_blank" style="color:orange;">Ne<b style="color:red;">x</b>tleadz</a></h1> --}}
            {{-- <h1 class="welcome">Welcom to TreeCart</h1> --}}

        </div>
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


        {{-- Slide show script --}}
        <script>
            var slideIndex = 0;
            showSlides();
            
            function showSlides() {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 5000); // Change image every 2 seconds
            }
            </script>


        
    </body>
</html>
