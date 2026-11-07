<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Epic Air Cargo: cargo clearing and transportation in Dar es Salaam.">

    <!-- ========== Page Title ========== -->
    <title>@yield('title', 'Epic Air Cargo - Clearing and Transportation')</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/img/favicon-epic.png') }}" type="image/x-icon">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Epic Air Cargo">
    <meta property="og:description" content="Cargo clearing and transportation in Dar es Salaam.">
    <meta property="og:image" content="{{ asset('frontend/assets/img/epic/og-team.jpg') }}">
    <link rel="apple-touch-icon" href="{{ asset('frontend/assets/img/favicon-epic-192.png') }}">
    <meta name="theme-color" content="#0b2545"><!-- TODO: your brand colour from the logo -->

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset ('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('frontend/assets/css/tranzi-icons.css')}}" rel="stylesheet">
    <link href="{{ asset ('frontend/assets/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{ asset ('frontend/assets/css/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('frontend/assets/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('frontend/assets/css/validnavs.css')}}" rel="stylesheet">
    <link href="{{ asset ('frontend/assets/css/helper.css')}}" rel="stylesheet">
    <link href="{{ asset ('frontend/assets/css/unit-test.css')}}" rel="stylesheet">
    <link href="{{ asset ('frontend/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/brand.css?v=20261108j') }}" rel="stylesheet">
    {{-- <link href="{{ asset ('frontend/assets/style.css')}}" rel="stylesheet"> --}}
    <!-- ========== End Stylesheet ========== -->

</head>
<body>
    <div id="preloader">
        <div class="tranzi-loader-inner">
           <div class="tranzi-loader">
              <span class="tranzi-loader-item"></span>
              <span class="tranzi-loader-item"></span>
              <span class="tranzi-loader-item"></span>
              <span class="tranzi-loader-item"></span>
              <span class="tranzi-loader-item"></span>
              <span class="tranzi-loader-item"></span>
              <span class="tranzi-loader-item"></span>
              <span class="tranzi-loader-item"></span>
           </div>
        </div>
    </div>

    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
     

     <script src="{{ asset ('frontend/assets/js/jquery-3.7.1.min.js')}}"></script>
     <script src="{{ asset ('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{ asset ('frontend/assets/js/jquery.appear.js')}}"></script>
     <script src="{{ asset ('frontend/assets/js/jquery.easing.min.js')}}"></script>
     <script src="{{ asset ('frontend/assets/js/swiper-bundle.min.js')}}"></script>
     <script src="{{ asset ('frontend/assets/js/progress-bar.min.js')}}"></script>
     <script src="{{ asset ('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
     <script src="{{ asset ('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
     <script src="{{ asset ('frontend/assets/js/magnific-popup.min.js')}}"></script>
     <script src="{{ asset ('frontend/assets/js/count-to.js')}}"></script>
     <script src="{{ asset ('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
     <script src="{{ asset ('frontend/assets/js/wow.min.js')}}"></script>
     <script src="{{ asset ('frontend/assets/js/validnavs.js')}}"></script>
     <script src="{{ asset ('frontend/assets/js/gsap.js')}}"></script>
     <script src="{{ asset ('frontend/assets/js/ScrollTrigger.min.js')}}"></script>
     <script src="{{ asset ('frontend/assets/js/SplitText.min.js')}}"></script>
     <script src="{{ asset('frontend/assets/js/YTPlayer.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/main.js')}}"></script>
    {{-- must come after main.js: it only wires the menu if the theme's own plugin stayed silent --}}
    <script src="{{ asset ('frontend/assets/js/nav-fallback.js')}}"></script>
 
 </body>
 </html>