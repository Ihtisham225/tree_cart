@extends('custom.base')

@section('title')
about
@endsection

@section('navbar')
    @include('includes.navbar');
    
@endsection

@section('main-content')

    <div class="about-content">
        <img style="height:300px; width:300px;" src="{{asset('logo\homelogo.png')}}" alt=""><br>
        <h3>About This Site</h3>
        <p>Hi and welcome to TreeCart. Here you can open your digital shop and can sell your produts. To open your own shop you must first subscibe to the premium version of this site. You can buy products without premium account. You can give the money by hand or by online transaction the choice is yours. If you want to give us an idea to futher make this website better then feel free to <a style="color:#5ab3ed;" href="{{ Route('contact') }}">contact us</a></p>
        {{-- <img style="border-radius:50%; height:350px; width:350px" src="{{ asset('media/shamir.jpg') }}" alt="">  --}}
        {{-- <p>
            Hi, this is Ihtisham ul haq back-end PHP Laravel Developer at <a style="color:#5ab3ed;" href="{{ url('https://www.nextleadz.com') }}" target="_blank">Nextleadz</a>.<br>
            Treenect is an E-commerce site, in which you can almost sell and buy anything. You can give the money by hand or by online transaction the choice is yours.
            If you want to give us an idea to futher make this website better then feel free to <a style="color:#5ab3ed;" href="{{ Route('contact') }}">contact us</a>
        </p> --}}
    </div>

    <div class="about-content">
        <img style="height:350px; width:350px; margin-top:220px;" src="{{ asset('media/shamir3.png   ') }}" alt=""><br>
        <h3>About US</h3>
        
        {{-- <img style="border-radius:50%; height:350px; width:350px" src="{{ asset('media/shamir.jpg') }}" alt="">  --}}
        <p>
            Hi, this is Ihtisham ul haq back-end PHP Laravel Developer at <a style="color:#5ab3ed;" href="{{ url('https://www.nextleadz.com') }}" target="_blank">Nextleadz</a>.<br>
            Student of Computer Science at University of Malakand.
        </p>
    </div>


    <div class="about-content">
        <img style="height:350px; width:500px; margin-top:270px;" src="{{ asset('media/nextlead.jpg') }}" alt=""><br>
        <h3>About Our Company</h3>
        
        {{-- <img style="border-radius:50%; height:350px; width:350px" src="{{ asset('media/shamir.jpg') }}" alt="">  --}}
        <p>
            Nextin is a Tech startup company providing solutions to large and small businesses, to increase their productivity and empowering them to make on time decissions for their business growth. Visite <a style="color:#5ab3ed;" href="{{ url('https://www.nextleadz.com') }}" target="_blank">NextIn</a> for further informaion<br>
            
        </p>
    </div>
    
@endsection
