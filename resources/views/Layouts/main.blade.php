<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield ('title')</title>
    {{-- Css --}}
    @if(!isset($isCover)) {{-- Jika bukan halaman Cover maka load kode dibawah --}}
    <link rel="stylesheet" href="{{ url('css/templatemo-liberty-market.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.css') }}">
    <link rel="stylesheet" href="{{ url('css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('css/pribadi.css') }}">
    <link rel="stylesheet" href="{{ url('css/mainContent.css') }}">
    @else {{-- Jika halaman Cover maka load kode dibawah --}}
    <link rel="stylesheet" href="{{ url('css/cover.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" />
    <link href='https://fonts.googleapis.com/css?family=Nerko+One' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    @endif 
    {{-- Icon Browser & Bootstrap yang diterapkan ke semua page --}}
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/fontawesome.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ url('images/IndonesiaBendera.png') }}">
</head>
<body>
    {{-- Navbar --}}
    @if(!isset($isCover)) {{-- Jika bukan halaman Cover maka jangan load kode dibawah --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-danger">Jelajah</span>Nusantara</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/explore">Culture Detail</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Team Detail</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @endif {{-- Akhiri pengecekan halaman Cover --}}
    {{-- <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav grey-navbar">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/" class="dark-link">Preview</a></li>
                            <li><a href="/home" class="dark-link">Home</a></li>
                            <li><a href="/pulau" class="dark-link">Overview</a></li>
                            <li><a href="/explore" class="dark-link">Explore Islands</a></li>
                        </ul>   
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
      </header> --}}

    {{-- EndNavbar --}}

    {{-- ContentStart --}}
    <div class="">
        @yield('content')
    </div>
    {{-- EndContent --}}

    {{-- Footer --}}
    @if(!isset($isCover)) {{-- Jika bukan halaman Cover maka jangan load kode dibawah --}}
    <footer class="bg-dark p-2 text-center">
      <div class="container">
        <p class="text-white">All Right Reserved By @website Name</p>
      </div>
    </footer>
    @endif {{-- Akhiri pengecekan halaman Cover --}}
    {{-- <footer class="footer-element">
        <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <p>Copyright © 2023 <a href="#">Jentara</a> Culture Education Co., Ltd. All rights reserved.
                &nbsp;&nbsp;
                Designed by <a title="HTML CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
              </div>
            </div>
          </div>
    </footer> --}}
    {{-- EndFooter --}}

    {{-- Script Start --}}
    @if(!isset($isCover)) {{-- Jika bukan halaman Cover maka jangan load kode dibawah --}}
    <script defer src="{{ url('js/isotope.min.js') }}"></script>
    <script defer src="{{ url('js/owl-carousel.js') }}"></script>
    <script defer src="{{ url('js/tabs.js') }}"></script>
    <script defer src="{{ url('js/popup.js') }}"></script>
    <script defer src="{{ url('js/custom.js') }}"></script>
    <script defer src="{{ url('js/pribadi.js') }}"></script>
    @else {{-- Jika halaman Cover maka load kode dibawah --}}
    @yield('scripts')
    <script defer src="{{ url('jquery/jquery.min.js') }}"></script>
    <script defer src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
    @endif {{-- Akhiri pengecekan halaman Cover --}}
    {{-- Script End --}}
</body>
</html>