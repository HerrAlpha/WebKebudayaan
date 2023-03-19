<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield ('title')</title>
    {{-- Css --}}
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ url('css/templatemo-liberty-market.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.css') }}">
    <link rel="stylesheet" href="{{ url('css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
</head>
<body>
    {{-- Preloader --}}
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
          <span class="dot"></span>
          <div class="dots">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      {{-- EndPreloader --}}

    {{-- Navbar --}}
    <section class="nav">
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="index.html" class="logo">
                                <img src="assets/images/logo.png" alt="">
                            </a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="/pulau" class="active">Explore</a></li>
                                <li><a href="details.html">Item Details</a></li>
                                <li><a href="author.html">Author</a></li>
                                <li><a href="create.html">Create Yours</a></li>
                            </ul>   
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </section>
    {{-- EndNavbar --}}

    {{-- ContentStart --}}
        @yield('content')
    {{-- EndContent --}}

    {{-- Footer --}}
    <footer class="footer-element">
        <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <p>Copyright © 2023 <a href="#">Jentara</a> Culture Education Co., Ltd. All rights reserved.
                &nbsp;&nbsp;
                Designed by <a title="HTML CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
              </div>
            </div>
          </div>
    </footer>
    {{-- EndFooter --}}

    {{-- Script Start --}}
    <script src="{{ url('jquery/jquery.min.js') }}"></script>
    <script src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ url('js/isotope.min.js') }}"></script>
    <script src="{{ url('js/owl-carousel.js') }}"></script>
    <script src="{{ url('js/tabs.js') }}"></script>
    <script src="{{ url('js/popup.js') }}"></script>
    <script src="{{ url('js/custom.js') }}"></script>
    @yield('scripts')
    {{-- Script End --}}
</body>
</html>