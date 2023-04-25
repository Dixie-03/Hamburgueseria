<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('titulo') - {{ env('APP_NAME') }} - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Favicons -->
  <link href="web/img/favicon.png" rel="icon">
  <link href="web/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="web/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="web/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="web/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="web/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="web/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="web/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="web/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v4.10.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
      
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <!-- <h1><a href="index.html">@yield('titulo') - {{ env('APP_NAME') }}</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="web/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto <?php echo url()->current()=="http://127.0.0.1:8000"? "active":""; ?> " href="/">Inicio</a></li>
          <li><a class="nav-link scrollto <?php echo url()->current()=="http://127.0.0.1:8000/takeaway"? "active":""; ?>" href="/takeaway">TakeAway</a></li>
          <li><a class="nav-link scrollto <?php echo url()->current()=="http://127.0.0.1:8000/nosotros"? "active":""; ?>" href="/nosotros">Nosotros</a></li>
          <li><a class="nav-link scrollto <?php echo url()->current()=="http://127.0.0.1:8000/contacto"? "active":""; ?>" href="/contacto">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


      @if(Session::get("fk_idcliente") > 0)
          <a href="/carrito" class="ms-5 scrollto">Carrito ({{ $cantidadCarrito }})</a>
          <a href="/mi-cuenta" class="book-a-table-btn scrollto">Mi cuenta</a>
          <a href="/cerrar-sesion" class="book-a-table-btn scrollto">Cerrar sesión</a>
      @else
          <a href="/iniciar-sesion" class="book-a-table-btn scrollto">Iniciar sesión</a>
      @endif    
    </div>
  </header><!-- End Header -->
  <main id="main">
  @yield('contenido')
  </main>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>@yield('titulo') - {{ env('APP_NAME') }}</h3>
      <h2>Visita nuestras principales sucursales</h2>
      
      <div class="sucursales">
        <?php foreach ($aSucursales as $sucursal) { 
        echo"<p>".$sucursal->descripcion.": ". "<a href='#'>".$sucursal->telefono. "</a> , ".$sucursal->direccion." <a href='".$sucursal->linkmap."' class='' target='_blank'>"."<i class='fa fa-map-marker fa-2x' aria-hidden='true'></i></a> , <i class='bi bi-clock '><span> ".$sucursal->horario."</span></i> </p>"; }?>
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="web/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="web/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="web/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="web/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="web/js/main.js"></script>

</body>

</html>