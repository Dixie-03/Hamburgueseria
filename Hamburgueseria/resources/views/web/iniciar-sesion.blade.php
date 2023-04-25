@extends('web.plantilla-usuario')
@section('contenido')
            <!-- ======= Sección Mi cuenta ======= -->
            <section id="book-a-table" class="book-a-table mt-5">
                  <div class="container">

                        <div class="section-title">
                              <h2>Iniciar <span>Sesión</span></h2>
                              <p></p>
                        </div>

                        <form action="" method="POST" role="form" class="php-email-form d-block mx-auto w-50">
                        @if(isset($mensaje))      
                        {{ $mensaje }}
                        @endif
                              <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                              <div class="row">
                                    <div class="col-12 form-group pb-3">
                                          <input type="text" name="txtCorreo" class="form-control text-center" id="txtCorreo" placeholder="Correo electrónico" data-rule="minlen:3" data-msg="" required>
                                         
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-12 form-group mt-3 mt-md-0">
                                          <input type="password" name="txtClave" class="form-control text-center" id="txtClave" placeholder="Contraseña" data-rule="minlen:2" data-msg="" required>
                                       
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-6 pt-2 text-start"><a href="/recuperar-clave">¿Olvidaste tu contraseña?</a></div>
                                    <div class="col-6 text-end"><button type="submit">Ingresar</button></div>
                              </div>
                              <div class="row">
                              <div class="col-6 text-start"><a href="/registrarse">¿No tenes cuenta? Registrate</a></div>
                              </div>
                        </form>
                  </div>
            </section><!-- End Book A Table Section -->
@endsection