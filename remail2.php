<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//require 'vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

$user=$_POST['username'];
//$user = "prueba";

$password=$_POST['password'];
//$password = "123456";

$email=$_POST['email'];
//$email = "test-9rhml9rfh@srv1.mail-tester.com";
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = 'servicios@hyperionlsm.online';
$mail->Password = '4v#Ol!Z7&D1S';
$mail->setFrom('servicios@hyperionlsm.online', 'Hyperion LSM');
//$mail->addReplyTo( 'servicios@hyperionlsm.online', 'Hyperion LSM');
$mail->addAddress($email);
$mail->Subject = 'Recupera tu acceso a Hyperion LSM';
$mail->isHTML(true);
$mail->Body="<html lang='es'>
<head><meta charset='utf-8'>
<title>Hyperion HTML</title><meta name='viewport' content='width=device-width, initial-scale=1.0'></head>
<body><div style='text-align: center;'><img src='https://hyperionlsm.online/assets/logocompleto.png' alt='' style='width:20%;'>
<h1>Recuperación de cuenta</h1><div style='background-color: #0c51ac; height: 4px; width: 100%;'></div><br>
<p style='color: #3a3d3d ;'>Parece que tienes problemas para ingresar y has solicitado que tus datos sean enviados al correo que nos ha proporcionado.</p>
<div style='background-color: #C8C8C8;  position: relative;  margin: 0 auto; width: 30%; padding: 5px;'>
<div style='text-align: center;'><h2>El usuario es: </h2>$user<h2>La contraseña es:</h2>$password</div>
<div style='text-align: center; width: 30%; width: 100%; background-color: #d6d6d6;'>
<p style='color: #3a3d3d ;'>Introdúce los datos en la aplicación Hyperion LSM para poder ingresar</p></div></div>
<p>Si tienes problemas para recordar tu contraseña puedes cambiarla desde la aplicación sin ningún problema.</p>
<p>Esperamos que no tengas algún otro inconveniente, ¡sigue aprendiendo con Hyperion-LSM!</p>
</div></body></html>";
$mail->AltBody = "Parece que tienes problemas para ingresar y has solicitado que tus datos sean enviados al correo que nos ha proporcionado.\n El usuario es: $user\n La contraseña es: $password\n Introdúce los datos en la aplicación Hyperion LSM para poder ingresar\n Si tienes problemas para recordar tu contraseña puedes cambiarla desde la aplicación sin ningún problema.\n Esperamos que no tengas algún otro inconveniente, ¡sigue aprendiendo con Hyperion-LSM!."; //cuerpo alternativo en texto plano
$mail->SMTPOptions = array(  //necesario sino me larga error
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'The email message was sent.';
}
?>