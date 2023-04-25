@extends('web.plantilla-usuario')
@section('contenido')

             <section id="contact" class="contact">
      <div class="container">

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>
        <div class="section-title">
          <h2><span>Contactanos</span></h2>
          <p>Dejanos tu mensaje, te escribimos a la brevedad.</p>
        </div>
  
        <form action="" method="post" role="form" class="php-email-form">
          <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
          @if(isset($mensaje))
            {{$mensaje}}
          @endif
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="txtNombre" name="txtNombre" class="form-control" id="name" placeholder="Tu nombre" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="txtCorreo" class="form-control" name="txtCorreo" id="email" placeholder="Tu Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="txtTelefono" class="form-control" name="txtTelefono" id="subject" placeholder="Telefono" required>
          </div>
          <div class="form-group mt-3">
            <textarea type="txtMensaje" class="form-control" name="txtMensaje" rows="5" placeholder="Mensaje" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Tu mensaje ha sido enviado. Gracias!</div>
          </div>
          <div class="text-center"><button type="submit">Enviar mensaje</button></div>
        </form>

      </div>
    </section>
@endsection
