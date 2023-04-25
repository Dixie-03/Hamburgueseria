@extends('web.plantilla-usuario')
@section('contenido')

<section id="contact" class="contact">
      <div class="container w-50" id="carrito">

            <div class="section-title">
                  <h2 class="text-center"><span>Carrito</span></h2>
                  <p></p>
            </div>
            <form action="" method="post" role="form" class="php-email-form">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
            
                  <div class="text-end pb-4"><a href="/takeaway"><i class="bi bi-x-circle-fill"></i></a></div>

                  <table class="table table-hover">
                        <tr>
                              <th colspan="2" class="pb-5 text-center">PRODUCTO</th>
                              <th>PRECIO</th>
                              <th>CANTIDAD</th>
                              <th>SUBTOTAL</th>
                        </tr>
                        <?php $total = 0;?>
                        @foreach($aCarritos as $carrito)
                              <tr>
                                    <td><img src="files/{{$carrito->imagen}}" class="img-thumbnail"></td>
                                    <td>{{$carrito->nombre}}</td>
                                    <td>${{$carrito->precio}}</td>
                                    <td>{{$carrito->cantidad}}</td>
                                    <td>${{ $carrito->precio * $carrito->cantidad}}</td>
                              </tr>
                               <?php $total += $carrito->precio * $carrito->cantidad;?>
                        @endforeach
                        <tr>
                              <th colspan="4">TOTAL:</th>
                              <td>${{$total}}</td>
                        </tr>
                  </table>




                  <div class="row">
                        <div class="col-12 form-group depc">
                              <label for="lstPago" class="pb-2 strong"><strong>Metodo de pago:</strong></label>
                              <select name="lstPago" id="lstPago" class="form-control">
                                    <option value="seleccionar" disabled selected>Seleccionar</option>
                                    <option value="mercadoPago">Mercado Pago</option>
                                    <option value="efectivo">Efectivo</option>
                              </select>

                        </div>
                        <div class="col-12 form-group depc">
                              <label for="lstSucursal" class="pb-2 strong"><strong>Sucursal donde retira el pedido:</strong></label>
                              <select name="lstSucursal" id="lstSucursal" class="form-control">
                                    <option value="seleccionar" disabled selected>Seleccionar</option>
                                    @foreach($aSucursales as $sucursal)
                                    <option value="{{$sucursal->idsucursal}}">{{$sucursal->descripcion}}</option>
                                    @endforeach
                              </select>

                        </div>
                  </div>
                  <div class="row">

                        <div class="form-group mt-3 depc">
                              <textarea class="form-control" name="txtDescripcion" id="txtDescripcion" rows="5" placeholder="Añadir comentarios.."></textarea>
                        </div>
                        <div class="my-3 depc">
                              <div class="loading">Cargando</div>
                              <div class="error-message"></div>
                              <div class="sent-message">Tu mensaje ha sido enviado. Gracias!</div>
                        </div>
                        <div class="row">
                              <div class="col-6 text-start"><button type="submit">Continuar pedido</button></div>
                              <div class="col-6 text-end"><button type="submit">Finalizar pedido</button></div>
                        </div>
            </form>

      </div>

</section>
@endsection