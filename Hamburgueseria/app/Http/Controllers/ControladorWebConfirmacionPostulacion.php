<?php

namespace App\Http\Controllers;

use App\Entidades\Sucursal;
use App\Entidades\CarritoProducto;
use Ssession;
class ControladorWebConfirmacionPostulacion extends Controller
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

        return view("web.confirmacion-postulacion", compact('aSucursales', 'cantidadCarrito'));
    }
}
