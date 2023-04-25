@extends('web.plantilla-usuario')
@section('contenido')
            <!-- ======= Sección Mi cuenta ======= -->
            <section id="book-a-table" class="book-a-table mt-5">
                  <div class="container">

                        <div class="section-title">
                              <h2>Cambiar<span> Contraseña</span></h2>
                        </div>
                        <!-- forms/book-a-table.php -->
                        <form action="" method="post"  class="php-email-form d-block mx-auto w-50">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                              <div class="row">
                                    <div class="col-12 form-group pb-3">
                                          <input type="text" name="txtClave" class="form-control text-center" id="txtClave" placeholder="Nueva Clave" data-rule="minlen:3" data-msg="" required>
                                     
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-12 form-group pb-3">
                                          <input type="text" name="txtClaveNuevaConfirmacion" class="form-control text-center" id="txtClaveNuevaConfirmacion" placeholder="Confirmar Nueva Clave" data-rule="minlen:3" data-msg="" required>
                                    </div>
                              </div>
                              
                              <div class="row">
                        
                                    <div class="py-3 col-12 text-center"><button type="submit">Cambiar Contraseña</button></div>
                        </form>
                  </div>
            </section><!-- End Book A Table Section -->
@endsection