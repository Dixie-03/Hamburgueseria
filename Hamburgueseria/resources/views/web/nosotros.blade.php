@extends('web.plantilla-institucional')
@section('scripts')
<script>
    globalId = '<?php echo isset($pedido->idpedido) && $pedido->idpedido > 0 ? $pedido->idpedido : 0; ?>';
    <?php $globalId = isset($pedido->idpedido) ? $pedido->idpedido : "0";?>
</script>
@endsection
@section('contenido')

<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item" style="background-image: url(web/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <img class="animate__animated animate__fadeInDown" src="web/img/logo/logo_color.png" alt="" class="img-fluid">
                <p class="animate__animated animate__fadeInUp">Con los mejores chefs, los mejores cortes y excelentes acompañamientos. ¡Todo en un click!</p>
                <div>
                  <a href="/takeaway" class="btn-menu animate__animated animate__fadeInUp scrollto">Nuestro menú</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item active" style="background-image: url(web/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown"><span>Nosotros</span> Burgers SRL</h2>
                <p class="animate__animated animate__fadeInUp">Empresa de hamburguesas premium para toda la familia. Variedad, sabor y calidad, en un solo lugar.</p>
                <div>
                  <a href="/takeaway" class="btn-menu animate__animated animate__fadeInUp scrollto">Nuestro menú</a>
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
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("web/img/about.jpg");'>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>BURGER <strong>-SRL</strong></h3>
              <p>
                Somos una empresa tipo takeaway dedicada a la produccion de hamburguesas premium con ingredientes de alta calidad
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Escoge la hamburguesa de tu preferencia.</li>
                <li><i class="bx bx-check-double"></i> Hacemos tu pedido con los mejores ingredientes.</li>
                <li><i class="bx bx-check-double"></i> Recogela en una de nuestras sucursales.</li>
                <li><i class="bx bx-check-double"></i> Disfruta de una gran hamburguesa.</li>
              </ul>
              <p>
                Contamos con varias sucursales en la ciudad, para que siempre encuentres un punto cercano y puedas adquirir el producto con facilidad.
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="public\img\hamburguesa.jpg" class="testimonial-img" alt="">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Nada mejor que una deliciosa hamburguesa, sin importar la ocasión. Burger es la hamburguesa que une a las familias.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="public\img\carne-hamburguesa.jpg" class="testimonial-img" alt="">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Nuestras carnes tienen el mejor corte y sabor. Sazonadas por chefs con amplia experiencia culinaria y asadas directamente a la parrilla.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="public\img\hamburguesas-conjunto.jpg" class="testimonial-img" alt="">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Gran variedad de hamburguesas para cualquier tipo de gusto con ingredientes de excelente calidad para tu delicioso pedido.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="public\img\malteada.jpg" class="testimonial-img" alt="">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Ademas de la amplia variedad de hamburguesas puedes escoger adiciones y deliciosas bebidas de nuestro menú.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Nuestros chefs <span>profesionales</span></h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="web/img/chefs/chefs-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Master Chef</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="web/img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Patissier</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="web/img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cook</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Trabaja con </span>nosotros</h2>
          <p>Haz parte de nuestra familia Burger. Ingresa tus datos para realizar la postulación.</p>
        </div>
      </div>

        <form action="" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="txtNombre" class="form-control" id="txtNombre" placeholder="Nombre" required>
            </div>
            <div class="col-md-6 form-group">
              <input type="text" name="txtApellido" class="form-control" id="txtApellido" placeholder="Apellido" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="txtCorreo" id="txtCorreo" placeholder="Correo" required>
            </div>
            <div class="col-md-6 form-group">
              <input type="text" name="txtTelefono" class="form-control" id="txtTelefono" placeholder="WhatsApp" required>
            </div>
            <div class="col-md-12 form-group">
              <input type="file" name="archivoCurriculum" class="form-control" id="archivoCurriculum" accept=".pdf, .docx, .doc" required>
              <p>Se aceptan los formatos: .pdf, .docx, .doc </p>
            </div>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">¡Gracias, pronto estarás recibiendo noticias nuestras!</div>
          </div>
          <div class="text-center"><button type="submit">Postularse</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

@endsection