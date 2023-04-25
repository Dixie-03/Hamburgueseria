<?php

namespace App\Http\Controllers;
use App\Entidades\Sucursal;
use App\Entidades\Cliente;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class ControladorWebRecuperarClave extends Controller{
    public function index()
    {
        $sucursal = new Sucursal();
        $aSucursales = $sucursal->obtenerTodos();

        return view("web.recuperar-clave", compact("aSucursales"));
    }

    public function recuperarClave(Request $request){
        $correo = $request->input("txtCorreo");
        $clave = rand(1000,9999);

        $cliente = new Cliente();
        $cliente->obtenerPorCorreo($correo);

        if($cliente){
            $cliente->clave = password_hash($clave, PASSWORD_DEFAULT);
            $cliente->guardar();
            $mensaje = "Tu nueva clave es: $clave";

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
            $mail->addAddress($correo); //Dirección para
            //$mail->addReplyTo($replyTo); //Dirección de reply no-reply
            //$mail->addBCC($copiaOculta); //Dirección de CCO

            //Contenido del mail
            $mail->isHTML(true);
            $mail->Subject = "Recupero de clave";
            $mail->Body = $mensaje;
            //$mail->send();

        } else {
            $mensaje = "El correo no existe";
        }

        $sucursal = new Sucursal();
        $aSucursales = $sucursal->obtenerTodos();
        
        return view("web.recuperar-clave", compact("aSucursales", "mensaje"));

    }
    
}


