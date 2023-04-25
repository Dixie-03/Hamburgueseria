<?php

namespace App\Http\Controllers;

use App\Entidades\CarritoProducto;
use App\Entidades\Pedido;
use App\Entidades\Carrito;
use App\Entidades\PedidoProducto;
use App\Entidades\Sucursal;
use Illuminate\Http\Request;

use Session;

class ControladorWebCarrito extends Controller
{
    public function index()
    {
        $sucursal = new Sucursal();
        $aSucursales = $sucursal->obtenerTodos();

        $carritoProducto = new CarritoProducto();

        $idCliente = Session::get("fk_idcliente");
        $cantidadCarrito = "";
        if ($idCliente) {
            $cantidadCarrito = $carritoProducto->obtenerCantidadPorCliente($idCliente);
        }

        //Traer todos los productos del usuario
         $aCarritos = $carritoProducto->obtenerPorCliente($idCliente);

        return view("web.carrito", compact('aSucursales', 'cantidadCarrito', 'aCarritos'));
    }

    public function confirmarCompra(Request $request)
    {
        $idCliente = Session::get("fk_idcliente");
        $carritoProducto = new CarritoProducto();
        $pedidoProducto = new PedidoProducto();

        $aCarritos = $carritoProducto->obtenerPorCliente($idCliente);

        $total = 0;
        foreach ($aCarritos as $carrito) {
            $total += $carrito->precio * $carrito->cantidad;
        }

        $pedido = new Pedido();
        $pedido->fecha = date("Y-m-d");
        $pedido->descripcion = $request->input("txtDescripcion");
        $pedido->total = $total;
        $pedido->fk_idsucursal = $request->input("lstSucursal");
        $pedido->fk_idcliente = $idCliente;
        $pedido->fk_estado = 1;//Pendiente
        $pedido->insertar();

        foreach($aCarritos as $carrito){
            $pedidoProducto->fk_idproducto = $carrito->fk_idproducto;
            $pedidoProducto->fk_idpedido = $pedido->idpedido;
            $pedidoProducto->cantidad = $carrito->cantidad;
            $pedidoProducto->precio_unitario = $carrito->precio;
            $pedidoProducto->total = $carrito->precio * $pedidoProducto->cantidad;
            $pedidoProducto->insertar();
        }
        //Vaciamos el carrito
        $carrito = new Carrito();
        $carritoCliente = $carrito->obtenerPorCliente($idCliente);
        $carritoProducto->eliminarPorCarrito($carritoCliente->idcarrito);
    
        $carrito->eliminarPorCliente($idCliente);
        return redirect("/confirmacion-compra");
    }
}
