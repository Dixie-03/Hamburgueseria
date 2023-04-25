<?php

namespace App\Http\Controllers;

use App\Entidades\CarritoProducto;
use App\Entidades\Sucursal;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use Session;
class ControladorWebContacto extends Controller
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

        return view("web.contacto", compact('aSucursales', 'cantidadCarrito'));
    }

    public function guardarContacto(Request $request)
    {

    }

    public function enviarCorreo(Request $request)
    {
        $nombre = $request->input("txtNombre");
        $correo = $request->input("txtCorreo");
        $telefono = $request->input("txtTelefono");
        $descripcion = $request->input("txtMensaje");

        //Instancia y configuraciones de PHPMailer
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = env('MAIL_HOST');
        $mail->SMTPAuth = true;
        $mail->Username = env('MAIL_USERNAME');
        $mail->Password = env('MAIL_PASSWORD');
        $mail->SMTPSecure = env('MAIL_ENCRYPTION');
        $mail->Port = env('MAIL_PORT');

        //Destinatarios
        $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME')); //Dirección desde
        $mail->addAddress(env('MAIL_FROM_ADDRESS')); //Dirección para

        //Contenido del mail
        $mail->isHTML(true);
        $mail->Subject = "Recupero de clave";
        $mail->Body = "Nombre: $nombre<br>
        Correo: $correo<br>
        Teléfono: $telefono<br>
        Mensaje: $descripcion
        ";
        //$mail->send();

        $sucursal = new Sucursal();
        $aSucursales = $sucursal->obtenerTodos();
        $mensaje = "Mensaje enviado.";
        return view("web.contacto", compact('aSucursales', "mensaje"));
    }

}
