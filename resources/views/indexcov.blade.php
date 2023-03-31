<!DOCTYPE html>
<html lang="en">
  <head>
    <!--- primary meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JENTARA</title>
    <!--- google font link -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
      rel="stylesheet"
      type="text/css"/>

     <!--- custom css and js link -->
    <link rel="stylesheet" href="/css/cover.css" />
    {{-- <link rel="stylesheet" href="{{ asset("/css/cover.css") }}">
    <script src="{{ asset('js/script.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/script.js"></script>

    {{-- custom icon and other --}}
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <link href='https://fonts.googleapis.com/css?family=Nerko+One' rel='stylesheet'>
  </head>


  <body>
     <!-- NAVBAR -->
     <!-- <nav class="home" id="home">
      <div class="hero">
        <nav>
          <div class="logo">
            <h1>JENTARA</h1>
          </div>
          <ul>
            <li><a href="">Tentang</a></li>
            <li><a href="">Panduan</a></li>
            <li><a href="">Profil</a></li>
          </ul>
        </nav>
        <div class="content">
          <h1>JENTARA</h1>
        </div>
      </div>
    </nav> -->

    <!-- TITLE -->
    <div class="wrapper">
      <div class="static-txt" data-text="JENTARA" >JENTARA</div>
    </div>
    <!-- COVER -->
    <div class="container" id="blur">
      <div class="banner">
        <video autoplay muted loop src="/img/oke.mp4" type="video/mp4"></video>
      </div>
      <!-- BUTTON COVER -->
      <div class="toplayer">
        <a  class="boton" onclick="toggle()">Start Now !</a>
      </div>
       

      <!-- POP UP -->
     
        <div class="popup" id="popup" >
          <div class="close close-btn" onclick="toggle()">
            <ion-icon name="close-outline"></ion-icon>
          </div>
          <h2><center>CHOOSE !</center></h2>
          <br />
          <div class="buttons">
            <button onclick="location.href=('login')">Login</button> {{-- disambungkan ke index login --}}
            <button onclick="location.href=('login')">Sign Up</button>
            <button onclick="location.href=('pulau')">Visitor</button> {{-- disambungkan ke index pulau --}}
          </div>
        </div>

    </div>

    <script>
      function toggle() {
        var blur = document.getElementById("blur");
        blur.classList.toggle("active");
        var popup = document.getElementById("popup");
        popup.classList.toggle("active");
      }
    </script>
  </body>
</html>
