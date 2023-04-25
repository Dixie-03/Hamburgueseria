@extends('web.plantilla-usuario')
@section('contenido')
            <!-- ======= Sección Mi cuenta ======= -->
            <section id="book-a-table" class="book-a-table mt-5">
                  <div class="container">

                        <div class="section-title">
                              <h2>Crear<span> Cuenta</span></h2>
                              <p>Comprá más rápido y llevá el control de tus pedidos.</p>
                              <p><strong>¡Todo en un solo lugar!</strong></p>
                        </div>
                        <!-- forms/book-a-table.php -->
                        <form action="" method="post"  class="php-email-form d-block mx-auto w-50">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                              <div class="row">
                                    <div class="col-12 form-group pb-3">
                                          <input type="text" name="txtNombre" class="form-control text-center" id="txtNombre" placeholder="Nombre" data-rule="minlen:3" data-msg="" required>
                                       
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-12 form-group pb-3">
                                          <input type="text" name="txtApellido" class="form-control text-center" id="txtApellido" placeholder="Apellidos" data-rule="minlen:3" data-msg="" required>
                                     
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-12 form-group pb-3">
                                          <input type="email" name="txtCorreo" class="form-control text-center" id="txtCorreo" placeholder="Correo electrónico" data-rule="minlen:3" data-msg="" required>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-12 form-group pb-3">
                                          <input type="text" name="txtCedula" class="form-control text-center" id="txtCedula" placeholder="Cédula" data-rule="minlen:3" data-msg="" required>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-12 form-group pb-3">
                                          <input type="text" name="txtCelular" class="form-control text-center" id="txtCelular" placeholder="Celular" data-rule="minlen:3" data-msg="" required>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-12 form-group mt-3 mt-md-0">
                                          <input type="password" name="txtClave" class="form-control text-center" id="txtClave"  placeholder="Contraseña" data-rule="minlen:2" data-msg="" required>  
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-12 form-group mt-3 mt-md-0">
                                          <input type="password" name="txtConfirmarClave" class="form-control text-center" id="txtConfirmarClave" placeholder="Confirmar Contraseña" data-rule="minlen:2" data-msg="" required>
                               
                                    </div>
                              </div>
                              <div class="row">
                        
                                    <div class="py-3 col-12 text-center"><button type="submit">Registrarte</button></div>
                          
                              <div class="col-6 text-start"><a href="/iniciar-sesion">¿Ya tenes cuenta? Iniciar sesión</a></div>
                              </div>
                        </form>
                  </div>
            </section><!-- End Book A Table Section -->
@endsection