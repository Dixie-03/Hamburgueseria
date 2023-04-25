@extends('web.plantilla-institucional')
@section('contenido')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(web/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <img class="animate__animated animate__fadeInDown" src="web/img/logo/logo_color.png" alt="" class="img-fluid">
                <p class="animate__animated animate__fadeInUp">Disfruta del delicioso sabor de nuestras hamburguesas, guarniciones, ensaladas, papas a la francesa, malteadas, helados y mucho más ¡Entra ya!</p>
                <div>
                  <a href="/takeaway" class="btn-menu animate__animated animate__fadeInUp scrollto">Nuestro menú</a>
                  <a href="/takeaway" class="btn-book animate__animated animate__fadeInUp scrollto">Pide a domicilio</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(web/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown"><span>Nueva hamburguesa</span> Finestra</h2>
                <p class="animate__animated animate__fadeInUp">Prueba nuestra nueva hamburguesa con medallón de carne con muzzarella, tomate, lechuga, cebolla morada y dijonesa.</p>
                <div>
                  <a href="/takeaway" class="btn-menu animate__animated animate__fadeInUp scrollto">Nuestro menú</a>
                  <a href="/takeaway" class="btn-book animate__animated animate__fadeInUp scrollto">Pide a domicilio</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(web/img/slide/slide-4.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown"><span>Nuestras</span> sucursales</h2>
                <p class="animate__animated animate__fadeInUp">Contacta con nuestras principales sucursales y envía tu CV!, siempre estamos buscando talentos como tú</p>
                <div>
                  <a href="/nosotros" class="btn-menu animate__animated animate__fadeInUp scrollto">Averigua más sobre nosotros</a>
                  <a href="/contacto" class="btn-book animate__animated animate__fadeInUp scrollto">Contáctanos</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
@endsection