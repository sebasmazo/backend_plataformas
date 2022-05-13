<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SSG Fest</title>    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,600&display=swap" rel="stylesheet">
    <!-- google fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/style-starter.css'); }}">
    <!-- Template CSS -->
    <script src="{{ URL::asset('js/nav.js'); }}"></script>


  </head>
  
  <body onload="ValidateUsr()">
    <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
        <h1><a class="navbar-brand mr-lg-5" href="index.html">
            <span>SSG</span> Fest
          </a></h1>
        <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.html">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-lg-auto" id="lista-menu">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="programacion.html">Programación</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="artistas.html">Artistas invitados<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="api.html">Contenido API</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.html">Registro / Inicio sesion</a>
            </li>
          </ul>
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!-- //header -->
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-2">
        <h2 class="title">Artistas invitados</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Artistas invitados</li> 
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <div class="ctn_artistas">
    <div class="galeria_artistas">
      <!-- Fila 1 -->
      <div class="pic">
        <img src="assets/images/badbunny.jpeg">
        <div class="pic_overlay">
          <p class="pic_txt">Bad Bunny</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/theweeknd.jpeg">
        <div class="pic_overlay">
          <p class="pic_txt">The Weeknd</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/billie.jpeg">
        <div class="pic_overlay">
          <p class="pic_txt">Billie Eilish</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/arcticmonkeys.jpg">
        <div class="pic_overlay">
          <p class="pic_txt">Arctic Monkeys</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/theneighbourhood.jpg">
        <div class="pic_overlay">
          <p class="pic_txt">The Neighbourhood</p>
        </div>
      </div>
      <!-- Fila 2 -->
      <div class="pic">
        <img src="assets/images/zayn.jpeg">
        <div class="pic_overlay">
          <p class="pic_txt">Zayn</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/rihanna.jpeg">
        <div class="pic_overlay">
          <p class="pic_txt">Rihanna</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/hozier.webp">
        <div class="pic_overlay">
          <p class="pic_txt">Hozier</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/tameimpala.png">
        <div class="pic_overlay">
          <p class="pic_txt">Tame Impala</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/drake.jpeg">
        <div class="pic_overlay">
          <p class="pic_txt">Drake</p>
        </div>
      </div>
      <!-- Fila 3 -->
      <div class="pic">
        <img src="assets/images/danielcaesar.jpeg">
        <div class="pic_overlay">
          <p class="pic_txt">Daniel Caesar</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/coldplay.jpeg">
        <div class="pic_overlay">
          <p class="pic_txt">Coldplay</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/khalid.png">
        <div class="pic_overlay">
          <p class="pic_txt">Khalid</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/macmiller.jpeg">
        <div class="pic_overlay">
          <p class="pic_txt">Mac Miller</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/dualipa.jpeg">
        <div class="pic_overlay">
          <p class="pic_txt">Dua Lipa</p>
        </div>
      </div>
      <!-- Fila 4 -->
      <div class="pic">
        <img src="assets/images/eminem.jpg">
        <div class="pic_overlay">
          <p class="pic_txt">Eminem</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/karolg.jpeg">
        <div class="pic_overlay">
          <p class="pic_txt">Karol G</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/jhaycortez.png">
        <div class="pic_overlay">
          <p class="pic_txt">Jhay Cortez</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/sabrina.jpeg">
        <div class="pic_overlay">
          <p class="pic_txt">Sabrina Claudio</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/asap.jpg">
        <div class="pic_overlay">
          <p class="pic_txt">A$AP ROCKY</p>
        </div>
      </div>
      <!-- Fila 5 -->
      <div class="pic">
        <img src="assets/images/rauw.jpeg">
        <div class="pic_overlay">
          <p class="pic_txt">Rauw Alejandro</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/olivia.png">
        <div class="pic_overlay">
          <p class="pic_txt">Olivia Rodrigo</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/kendrick.jpeg">
        <div class="pic_overlay">
          <p class="pic_txt">Kendrick Lamar</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/muse.jpeg">
        <div class="pic_overlay">
          <p class="pic_txt">Muse</p>
        </div>
      </div>
      <div class="pic">
        <img src="assets/images/willow.jpg">
        <div class="pic_overlay">
          <p class="pic_txt">WILLOW</p>
        </div>
      </div>
    </div>
  </div>
  



  
  <!--/w3l-footer-29-main-->

  <!-- footer7 block -->
  <section class="w3l-footer7">
    <div class="footer7 py-5">
      <div class="container py-lg-3">
        
        <div class="d-grid grid-col-3 footer-top7">
          <div class="footer-list7 mt-4">
            <h6 class="footer-title7">Quick links</h6>
            <ul>
              <li><a href="programacion.html">Programación</a></li>
              <li><a href="artistas.html">Artistas invitados</a></li>
            </ul>
          </div>
          <div class="footer-list7 mt-4">

            <h6 class="footer-title7">Integrantes </h6>
            <ul>
              <li><p> </p></li>
              <li><p>Gabriel Cornejo</p></li>
              <li><p>Sebastian Mazo</p></li>
              <li><p>Sofia Arango</p></li>
            </ul>

          </div>

          <div class="footer-list7 mt-4">
            <h6 class="footer-title7">Contacto:</h6>
            <ul class="phone-numbers">
              <li><a href="mailto:gabrielcorbot@gmail.com"> gabrielcorbot@gmail.com</a></li>
              <li><a href="mailto:sebastianmazovelez@gmail.com"> sebastianmazovelez@gmail.com</a></li>
              <li><a href="mailto:sofiaarangopat@hotmail.com"> Correo sofia</a></li> <!--Correo de sofia -->
            </ul>
            
          </div>
        </div>
        <div class="copy-right-hny text-center">
          <p>© 2020 Outlying. All rights reserved.Design by <a href="https://w3layouts.com/" target="_blank">
              W3Layouts</a>
          </p>
          <p>@ 2022 Editado por Gabriel Sebastian Cornejo, Sebastian Mazo y Sofia Arango </p>
        </div>
      </div>
      <!-- //footer -->
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
      </button>
      <div class="img-wpp">
        <a href="https://wa.me/3137631417" target="_blank"><img id="svg-wpp" src="./assets/images/logo_whatsapp.svg"></a>

      </div>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- //move top -->
      <!-- /noscroll -->
      <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
      <!-- //noscroll -->
      <!-- //footer -->
    </div>
  </section>
  <!-- //footer7 block -->
  <!-- Template JavaScript -->
  <script src="{{ URL::asset('js/centralizacion.js'); }}"></script>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>