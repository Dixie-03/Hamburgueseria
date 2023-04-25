@extends('web.plantilla-institucional')
@section('contenido')
<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(web/img/Takeaway/inicio.jpg);">
          <div class="carousel-container">
            <div class="carousel-content">
              <img src="web/img/logo/logo_color.png" alt="">
              <p class="animate__animated animate__fadeInUp">Hamburgesas 100% carne o %100 Vegetal; con pan casero que horneamos todos los días y una selección de ingredientes que las hacen únicas. Incluyen papas fritas o una ensalada de hojas verdes.</p>
              <div>
                <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Ver Menú</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
</section><!-- End Hero -->

<!-- ======= Menu Section ======= -->
<section id="menu" class="menu">
  <div class="container">

    <div class="section-title">
      <h2>Menú</h2>
    </div>
    @if(isset($mensaje))
    {{ $mensaje }}
    @endif
    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="menu-flters">
          <li data-filter="*" class="filter-active">Todos</li>
          @foreach($aCategorias as $categoria)
            <li data-filter=".filter-{{ $categoria->idcategoria }}">{{ $categoria->nombre }}</li>
          @endforeach
        </ul>
      </div>
    </div>

    <div class="row menu-container">
      @foreach($aProductos as $producto)
        <div class="col-lg-6 menu-item filter-{{ $producto->fk_idcategoria }}">
          <div class="row">
            <div class="col-lg-6">
              <img class="img-fluid" src="/files/{{ $producto->imagen }}">
            </div>
            <div class="col-lg-6">
              <div class="menu-content">
                <a href="#" class="align-top">{{ $producto->nombre }}</a><span>${{ $producto->precio }}</span>
              </div>
              <div class="menu-ingredients">
                {{ $producto->descripcion }}
              </div>
              <div>
                <form action="" method="POST">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                  <input type="hidden" id="txtProducto" name="txtProducto" class="" value="{{$producto->idproducto}}" required>
                  <input class="" style="width:14%;border-radius: 5px;border-color: #ff9b08;" type="number" id="txtCantidad" name="txtCantidad" value=0>
                  <button type="submit" style="background-color:#ffc064; color:white;border:none; border-radius: 5px;"><bold><i class="bi bi-plus-circle"></i></bold> Añadir al carrito</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section><!-- End Menu Section -->
@endsection