<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    $tipoIn = $_POST['tipoIn'];
    $tipoGes = $_POST['tipoGes'];
    $codi = $_POST['codigo'];
    
    
    
}


$mail = new PHPMailer(true);

try{
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    //acceso
    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'dexcon2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Mensaje para enviar
    
    $mail->isHTML(true);
    //Cabecera
    $mail->setFrom('inmobiliaria@medinasantos.com','inmobiliaria@medinasantos.com');
    //destinos
    /*$mail->addAddress('inmobiliariamedinasa@outlook.com');
    $mail->addAddress('medinasantos2@outlook.com'); */
    $mail->addAddress('wdsp9898@gmail.com');
    $mail->Subject='Inmobiliaria Medina Santos - Detalle de inmueble';
    $mail->Body = '<span>Buen día, '.$nombre.' quiere recibir información con respeto a '.$tipoIn.' en '.$tipoGes.' con el código: '.$codi.' </span>
                    <h3>Información del interesado:</h3>
                    <ul>
                        <li>Correo: '.$email.'</li>
                        <li>Telefono: '.$telefono.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
    $mail->send();
    echo "<script>window.location.href='.././'</script>";

}catch(Exception $e){
    echo 'algo salio mal' , $e->getMessage();
}
