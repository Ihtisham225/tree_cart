<header id="navbar">    
    <ul>
        <li><a href="/"><img style="height: 5rem; width= 5rem; margin-top:-25px" src="{{asset('logo\homelogo.png')}}" alt=""></a></li>
        <li><a href="{{ url('/home') }}"><b @if (Request::url() === 'http://127.0.0.1:8000/home') style="color: #5ab3ed" @endif>Home</b></a></li>
        <li><a href="{{ Route('contact') }}"><b @if (Request::url() === 'http://127.0.0.1:8000/contact') style="color: #5ab3ed" @endif>Contact</b></a></li>
        <li><a href="{{ Route('about') }}"><b @if (Request::url() === 'http://127.0.0.1:8000/about') style="color: #5ab3ed" @endif>About</b></a></li>
        <li><a href="{{ Route('cart') }}"><b @if (Request::url() === 'http://127.0.0.1:8000/cart') style="color: #5ab3ed" @endif>Cart</b></a></li>
        
        <li>
                <div class="login-logout">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}">|| Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register ||</a>
                        @endif
                        @endauth
                    @endif
                </div>
            </li>
    </ul>
</header>