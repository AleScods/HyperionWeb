<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//require 'vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

//$username=$_POST['username'];
$email=$_POST['email'];
//$password=$_POST['password'];
$code=$_POST['code'];
//$code='code';
//$auth=$_POST['auth'];
//$email='test-416c1b@test.mailgenius.com';
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
$mail->Subject = 'Completa tu registro en Hyperion LSM ';
$mail->isHTML(true);
$mail->CharSet = "UTF8";
$mail->Body="<html lang='es'><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'><title>Hyperion HTML</title><meta name='viewport' content='width=device-width, initial-scale=1.0'></head><body><div style='text-align: center; '><img src='https://hyperionlsm.online/assets/logocompleto.png' alt='' style='width: 20%;'><h1>Bienvenido a HYPERION LSM</h1><div style='background-color: #0c51ac; height: 4px; width: 100%;'></div><h2>Tu código de verificación es:</h2><div style='background-color: #C8C8C8;  position: relative;  margin: 0 auto; width: 30%; padding: 5px;'><div style='text-align: center; background-color: #d6d6d6; margin:5px; padding: 10px;'><h2>$code</h2></div><div style='text-align: center; width: 30%; width: 100%;'><p style='color: #3a3d3d ;'>Introdúcelo en la aplicación Hyperion LSM para finalizar tu registro</p></div></div></div><p>¡Sigue aprendiendo con Hyperion-LSM!.</p></body></html>";

$mail->AltBody = "Bienvenido a HYPERION LSM.\n Tu código de verificación es: $code\n Introdúcelo en la aplicación Hyperion LSM para finalizar tu registro.\n¡Sigue aprendiendo con Hyperion-LSM!."; //cuerpo alternativo en texto plano
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