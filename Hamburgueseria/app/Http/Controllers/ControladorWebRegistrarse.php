<?php

namespace App\Http\Controllers;
use App\Entidades\Sucursal;
use App\Entidades\Cliente;
use Illuminate\Http\Request;

class ControladorWebRegistrarse extends Controller
{
    public function index()
    {
        $sucursal = new Sucursal();
        $aSucursales = $sucursal->obtenerTodos();
        return view("web.registrarse",compact('aSucursales'));
    }

    public function registrarse(Request $request){

        $cliente = New Cliente(); 
        $cliente->nombre = $request->input("txtNombre");
        $cliente->apellido = $request->input("txtApellido");
        $cliente->correo = $request->input("txtCorreo");
        $cliente->celular = $request->input("txtCelular");
        $cliente->cedula = $request->input("txtCedula");
        $cliente->clave = password_hash(($request->input("txtClave")), PASSWORD_DEFAULT);
        $cliente->insertar();
        return redirect("/iniciar-sesion");
    } 

}
