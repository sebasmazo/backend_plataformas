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
  <title>SSG Fest</title>  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,600&display=swap"
    rel="stylesheet">
  <!-- google fonts -->
  <!-- Template CSS -->

  
  <link rel="stylesheet" href="{{ URL::asset('css/style-starter.css'); }}">
  <!-- Template CSS -->
  <script src="{{ URL::asset('js/nav.js'); }}"></script>
</head>

<body >
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
        <h1><a class="navbar-brand mr-lg-5" href="index.html">
            <span>SSG</span> fest 
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
          <ul class="navbar-nav mx-lg-auto" id="lista-menu"></ul>
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
  <!-- main-slider -->
  <section class="w3l-main-slider" id="home">
    <div class="companies20-content">
      <div class="owl-one owl-carousel owl-theme">
        <div class="item">
          <li>
            <div class="slider-info banner-view bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg text-center">
                    <p>Encuéntranos en:</p>
                    <h5>Cancún.</h5>
                  </div>
                </div>
              </div>

            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info  banner-view banner-top1 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg text-center">
                    <p>Encuéntranos en:</p>
                    <h5>Ibiza</h5>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info banner-view banner-top2 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg text-center">
                    <p>Encuéntranos en:</p>
                    <h5>Miami</h5>
                    
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info banner-view banner-top3 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg text-center">
                    <p>Encuéntranos en:</p>
                    <h5>Tailandia</h5>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
      </div>
    </div>
  </section>
  <!-- /main-slider -->
  <!--/grids-->
  <section class="w3l-grids-3 py-5" id="about">
    <div class="container py-md-5">
      <div class="row bottom-ab-grids align-items-center">
        <div class="col-lg-6 bottom-ab-right mb-lg-0 mb-5 pr-lg-5">
          <img src="{{ URL::asset('imgs/ab1.jpg'); }}" class="img-fluid" alt="">
          
        </div>
        <div class="col-lg-6 bottom-ab-left">
        @if(Auth::check())
        <h2><a href="/inicio/logout">Cerrar sesión</a></h2>
        @endif
          <h6 class="sub-title">Acerca de</h6>
          <h3 class="hny-title">
            El mayor festival de esta década</h3>
          <p class="my-3 pr-lg-4"> Prepárate para el SSG Fest, el festival multigénero con todos los mejores artistas de la década.
            Date la oportunidad de asistir para asi ser parte del mejor festival. Podrás encontrar artistas famosos de todas las 
            partes del mundo, y géneros como Reggeaton, Rap, Rock, Punk, Pop, R&B, Alternativo y muchos otros más!
            Disfruta de estos tres días de pura música, versatilidad y diversion. Inscríbete ya a nuestro portal!
          </p>
        </div>

      </div>
    </div>
  </section>
  <!--//grids-->
  <!--/services-->
  <section class="w3l-services1">
    <div id="content-with-photo4-block" class="services1hny py-5">
      <div class="container py-md-5">
        <div class="cwp4-two row align-items-center">
          <div class="cwp4-text col-lg-4 mb-lg-0 mb-5">
            <h6 class="sub-title">Experiencia SSG</h6>
            <h3 class="hny-title">Qué nos diferencia?</h3>
          </div>
          <div class="cwp4-image col-lg-8">
            <div class="grids4-info">

              <p>Somos un festival pensado para todo tipo de persona. Sin importar que tengas un gusto muscial un poco diferente,
                podrás asistir y encontrar artistas de tu gusto! Estamos ubicados en las grandes ciudades para que todos puedan asistir.
                Somos un festival grande e inclusivo que permitirá que todo tipo de persona pueda ingresar a divertirse.
              </p>

            </div>
          </div>
        </div>
        <div class="w3l-bottom-grids-6 py-5 mt-lg-5">
          <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-4 col-md-6 grids-feature">
              <div class="area-box">
                <span class="fa fa-money"></span>
                <h4><a class="title-head">Precios accesibles</a></h4>
                <p>Somos de los pocos festivales los cuales tenemos precios accesibles, tambien tenemos varias formas de pago</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
              <div class="area-box">
                <span class="fa fa-calendar"></span>
                <h4><a class="title-head">Mutiples fechas</a></h4>
                <p>SSG Fest tendrá varias fechas en varias diferentes partes del mundo para que todos puedan asistir </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
              <div class="area-box">
                <span class="fa fa-gift"></span>
                <h4><a class="title-head">Sorpresas</a></h4>
                <p>No es solo el concierto! En el festival encontrarás muchos premios. No te los pierdas!</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-4">
              <div class="area-box">
                <span class="fa fa-camera"></span>
                <h4><a  class="title-head">Fotos con artistas</a></h4> 
                <p>Tenemos programas exclusivos para una sesión privada con tu artista favorito!</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-4">
              <div class="area-box">
                <span class="fa fa-qrcode"></span>
                <h4><a  class="title-head">Entradas digitales</a></h4>
                <p>No te preocupes por perder tu boleto, siempre tendras acceso a este desde tu celular </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-4">
              <div class="area-box">
                <span class="fa fa-globe"></span>
                <h4><a  class="title-head">Artistas globales</a></h4>
                <p>Tenemos artistas de más de 10 paises diferentes, preparados para darte el mejor show.</p>
              </div>
            </div>

          </div>
        </div>


      </div>
    </div>
    </div>
  </section>
  <!--//services-->
  
    <!-- call -->
  <section class="w3l-call py-5" id="book">
    <div class="container py-lg-5 py-md-4">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="mb-2">Consigue tus boletas</h4>
                <p class="mb-2">Llama ahora</p>
                <h3><span class="fa mr-1 fa-phone"></span> (+57) 123 455789</h3> 
                <p class="mt-4 pr-lg-5 mr-lg-5"> Si tienes alguna dificultad con tus boletas, 
                  llama a este número. No olvides registrarte en la página para un acceso premium a todas las promociones. Así
                  podrás ser de los primeros en conseguir boletas con los mejores precios! Accede al portal para comprar boletas para cada día. 
                </p>
                <a class="btn btn-style-1 ml-2 mt-md-5 mt-4"> Primer día</a>
                <a class="btn btn-style-1 ml-2 mt-md-5 mt-4"> Segundo día</a>
                <a class="btn btn-style-1 ml-2 mt-md-5 mt-4"> Tercer día</a>
            </div>
            
        </div>
    </div>
</section>
  <!-- call -->
  <!-- stats -->
  <section class="w3l-stats py-5" id="stats">
    <div class="gallery-inner container py-lg-0 py-3">
      <div class="row stats-con pb-lg-3">
        <div class="col-lg-3 col-6 stats_info counter_grid">
          <p class="counter">451</p>
          <h4>Artistas invitados</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid1">
          <p class="counter">84</p>
          <h4>Generos explorados</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-5">
          <p class="counter">127</p>
          <h4>Ciudades visitadas</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-5">
          <p class="counter">157341</p>
          <h4>Visitantes</h4>
        </div>

      </div>
    </div>
  </section>
  <!-- //stats -->

  
  <!-- footer7 block -->
  <section class="w3l-footer7">
    <div class="footer7 py-5">
      <div class="container py-lg-3">
        <div class="footer-destinations mb-5 text-center">
          <h5>No te pierdas el mejor festival de esta ultima decada!</h5>
        </div>
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
        <a href="https://wa.me/3137631417" target="_blank"><img id="svg-wpp" src="{{ URL::asset('imgs/logo_whatsapp.svg'); }}"></a>

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
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for banner slider-->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 2,
            nav: false
          },
          1000: {
            items: 3,
            nav: false,
            loop: true
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->

  <!-- stats number counter-->
  <script src="{{ URL::asset('js/centralizacion.js'); }}"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
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

  <script src="{{ URL::asset('js/bootstrap.min.js'); }}"></script>

</body>

</html>