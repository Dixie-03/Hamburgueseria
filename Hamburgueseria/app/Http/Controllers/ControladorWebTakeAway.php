<?php

namespace App\Http\Controllers;

use App\Entidades\Carrito;
use App\Entidades\CarritoProducto;
use App\Entidades\Categoria;
use App\Entidades\Producto;
use App\Entidades\Sucursal;
use Illuminate\Http\Request;
use Session;

class ControladorWebTakeAway extends Controller
{
    public function index()
    {
        $producto = new Producto();
        $aProductos = $producto->obtenerTodos();

        $sucursal = new Sucursal();
        $aSucursales = $sucursal->obtenerTodos();

        $categoria = new Categoria();
        $aCategorias = $categoria->obtenerTodos();

        $idCliente = Session::get("fk_idcliente");
        $cantidadCarrito = "";
        if ($idCliente) {
            $carritoProducto = new CarritoProducto();
            $cantidadCarrito = $carritoProducto->obtenerCantidadPorCliente($idCliente);
        }
        return view("web.takeaway", compact("aProductos", "aSucursales", "aCategorias", "cantidadCarrito"));
    }

    public function insertarCarrito(Request $request)
    {
        $idCliente = Session::get("fk_idcliente");
        $cantidad = $request->input("txtCantidad");
        $idProducto = $request->input("txtProducto");

        $producto = new Producto();
        $aProductos = $producto->obtenerTodos();

        $sucursal = new Sucursal();
        $aSucursales = $sucursal->obtenerTodos();

        $categoria = new Categoria();
        $aCategorias = $categoria->obtenerTodos();

        if ($idCliente) {
            if ($cantidad > 0) {
                //Buscar carrito
                $carrito = new Carrito();
                $carrito->obtenerPorCliente($idCliente);
                $idCarrito = "";
                //Si existe un carrito para el cliente, recupero el id del carrito
                if ($carrito->idcarrito > 0) {
                    $idCarrito = $carrito->idcarrito;
                } else {
                    //Inserto un nuevo carrito
                    $carrito->fk_idcliente = $idCliente;
                    $carrito->insertar();
                    $idCarrito = $carrito->idcarrito;

                }
                $producto = new Producto();
                $producto->obtenerPorId($idProducto);
                if ($cantidad <= $producto->cantidad) {
                    $carritoProducto = new CarritoProducto();
                    $carritoProducto->fk_idcarrito = $idCarrito;
                    $carritoProducto->fk_idproducto = $idProducto;
                    $carritoProducto->cantidad = $cantidad;
                    $carritoProducto->insertar();
                    return redirect("/takeaway");
                } else {
                    $mensaje = "No hay existencias del producto seleccionado";
                    return view("web.takeaway", compact("aProductos", "aSucursales", "aCategorias", "mensaje"));
                }
            } else {
                $mensaje = "Debe seleccionar una cantidad";
                return view("web.takeaway", compact("aProductos", "aSucursales", "aCategorias", "mensaje"));
            }
        } else {
            return redirect("/iniciar-sesion");
        }
    }
}
