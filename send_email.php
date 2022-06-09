<?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $motivo = $_POST['motivo'];
    $servicio = $_POST['servicio'];
    $comentarios = $_POST['comentarios'];

    $header = 'From: ' . $correo . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $mensaje = "NOMBRE : " . $nombre . ",\r\n";
    $mensaje .= "CORREO : " . $correo . " \r\n";
    $mensaje .= "TELEFONO : " . $telefono . " \r\n";
    $mensaje .= "MOTIVO : " . $motivo . " \r\n";
    $mensaje .= "SERVICIO : " . $servicio . " \r\n";
    $mensaje .= "COMENTARIOS : " . $comentarios . " \r\n";

    $para = 'raul.belloso.m@gmail.com';
    $asunto = 'CEPOLO Contacto';

    mail($para, $asunto, utf8_decode($mensaje), $header);

    header("Location:https://www.cepolo.com.mx/");
?>