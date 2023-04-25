@extends('web.plantilla-usuario')
@section('contenido')
<!-- ======= Sección Mi cuenta ======= -->
<section id="book-a-table" class="book-a-table mt-5">
      <div class="container">

            <div class="section-title">
                  <h2>Recuperar <span>Clave</span></h2>
                  <p>Ingresa tu correo electronico o numero de celular
                  </p>
            </div>

            <form action="" method="post" role="form" class="php-email-form d-block mx-auto w-50">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
            @if(isset($mensaje) && $mensaje != "")
                  {{ $mensaje }}
            @endif
            <div class="row">

                        <div class="col-12 form-group pb-3">
                              <input type="text" name="txtCorreo" class="form-control text-center" id="txtCorreo" placeholder="Correo electrónico o teléfono" data-rule="minlen:3" data-msg="" required>
                              <div class="validate"></div>
                        </div>
                        <div class="col-6 text-start"><a href="/iniciar-sesion">Volver al login</a></div>
                        <div class="col-6 text-end"><button type="submit">Enviar</button></div>
                  </div>

            </form>
      </div>
</section><!-- End Book A Table Section -->
@endsection