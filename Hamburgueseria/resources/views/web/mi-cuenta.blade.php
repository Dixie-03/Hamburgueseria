@extends('web.plantilla-usuario')
@section('scripts')
<script>
    globalId = '<?php echo isset($cliente->idcliente) && $cliente->idcliente > 0 ? $cliente->idcliente : 0; ?>';
    <?php $globalId = isset($cliente->idcliente) ? $cliente->idcliente : "0"; ?>

</script>
@endsection
@section('contenido')

            <!-- ======= Sección Mi cuenta ======= -->
            <section id="book-a-table" class="book-a-table mt-5">
                  <div class="container">

                        <div class="section-title">
                              <h2>Mi <span>Cuenta</span></h2>
                              <p>Aquí podrás verificar tus datos personales. Editalos de ser necesario.</p>
                        </div>

                        <form action="" method="post" role="form" class="php-email-form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                        <input type="hidden" id="id" name="id" class="form-control" value="{{$globalId}}" required> 
                              <div class="row">
                                    <div class="col-lg-6 col-md-12 form-group">
                                          <input type="text" name="txtNombre" class="form-control" id="txtNombre" value="{{$cliente->nombre}}" placeholder="Tu nombre (si tienes más de uno, ingresalos todos)" data-rule="minlen:3" data-msg="Por favor, ingrese como mínimo 3 letras">
                                          <div class="validate"></div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 form-group mt-3 mt-md-0">
                                          <input type="text" name="txtApellido" class="form-control" id="txtApellido" placeholder="Tu apellido" value="{{$cliente->apellido}}">
                                          <div class="validate"></div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-lg-6 col-md-12 form-group mt-3">
                                          <input type="text" class="form-control" name="txtCelular" id="txtCelular" value="{{$cliente->celular}}" placeholder="Tu número de celular">
                                          <div class="validate"></div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 form-group mt-3">
                                          <input type="email" class="form-control" name="txtCorreo" id="txtCorreo" value="{{$cliente->correo}}" placeholder="Tu correo electrónico">
                                          <div class="validate"></div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 form-group mt-3">
                                          <input type="text" class="form-control" name="txtCedula" id="txtCedula" value="{{$cliente->cedula}}" placeholder="Tu cédula">
                                          <div class="validate"></div>
                                    </div>
                                    <div>
                                          <a href="/cambiar-clave">Cambiar clave</a>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="text-center"><button type="submit">Guardar</button></div>
                              </div>
                        </form>

                        <div class="section-title mt-5">
                              <h2>Mis <span>Pedidos</span></h2>
                              <p>Estos son tus pedidos activos.</p>
                        </div>
                        <table class="table php-email-form">
                              <thead>
                                    <tr>
                                          <th>Nro.</th>
                                          <th>Sucursal</th>
                                          <th>Fecha</th>
                                          <th>Descripción</th>
                                          <th>Total</th>
                                          <th>Estado</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    @foreach($aPedidos as $pedido)
                                    <tr>
                                          <td>{{ $pedido->idpedido }}</td>
                                          <td>{{ $pedido->sucursal }}</td>
                                          <td>{{ date_format(date_create($pedido->fecha), "d/m/Y") }}</td>
                                          <td>{{ $pedido->descripcion }}</td>
                                          <td>${{ $pedido->total }}</td>
                                          <td>{{ $pedido->estado }}</td>
                                    </tr>
                                    @endforeach
                              </tbody>
                        </table>
                  </div>
            </section><!-- End Book A Table Section -->
@endsection