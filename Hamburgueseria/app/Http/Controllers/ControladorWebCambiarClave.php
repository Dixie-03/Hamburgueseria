<?php

namespace App\Http\Controllers;

use App\Entidades\CarritoProducto;
use App\Entidades\Cliente;
use App\Entidades\Sucursal;
use Illuminate\Http\Request;
use Session;

class ControladorWebCambiarClave extends Controller
{
    public function index()
    {
        $sucursal = new Sucursal();
        $aSucursales = $sucursal->obtenerTodos();
        $idCliente = Session::get("fk_idcliente");
        $cantidadCarrito = "";
        if ($idCliente) {
            $carritoProducto = new CarritoProducto();
            $cantidadCarrito = $carritoProducto->obtenerCantidadPorCliente($idCliente);
        }
        return view("web.cambiar-clave", compact('aSucursales', 'cantidadCarrito'));
    }

    public function cambiar(Request $request)
    {
        $idCliente = Session::get("fk_idcliente");
        $clave = $request->input("txtClave");
        $cliente = new Cliente();
        $cliente->clave = password_hash($clave, PASSWORD_DEFAULT);
        $cliente->cambiarClave($idCliente);
        return redirect("/mi-cuenta");
    }

}
