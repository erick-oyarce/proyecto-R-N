<?php
$nombre = $_POST['name'];
$mail = $_POST['email'];
$num = $_POST['telefono'];
$mensaje = $_POST['messagge'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su número de contacto es: " . $num . " \r\n";
$mensaje .= "Mensaje: " . $mss . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'ignaciobluuweb@gmail.com';
$asunto = 'Correo enviado a través de la página web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>