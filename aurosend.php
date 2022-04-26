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
$mail->setFrom('servicios@hyperionlsm.online', 'Aurora PM');
//$mail->addReplyTo( 'servicios@hyperionlsm.online', 'Hyperion LSM');
$mail->addAddress($email);
$mail->Subject = 'Termina tu registro en Aurora PM ';
$mail->isHTML(true);
$mail->CharSet = "UTF8";
$mail->Body="<html lang='es'><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
<title>Hyperion HTML</title><meta name='viewport' content='width=device-width, initial-scale=1.0'>
</head><body style='background-color:#262837;'><div style='text-align: center; '>
<img src='https://hyperionlsm.online/assets/logoauro.png' alt='' style='width: 20%;'>
<h1 style='color:#fbfbfb'>Bienvenido al Proyecto Aurora</h1>
<p></p>
<!--<div style='background-color: #0c51ac; height: 4px; width: 100%; color:#262837'>-->
</div>
<!--<h2 style='color:#fbfbfb'>Tu cuenta ha sido verificada:</h2>-->
<div style='background-color: #C8C8C8;  position: relative;  margin: 0 auto; width: 30%; padding: 5px;'>
<div style='text-align: center; background-color: #d6d6d6; margin:5px; padding: 10px;'>
<a href='https://hyperionlsm.online/auth2.php?code=$code'>Da click aquí para validar tu cuenta</a>
</div>
</div>
</body></html>";

$mail->AltBody = "Bienvenido a Aurora PM.\n Verifica tu cuenta para acceder."; //cuerpo alternativo en texto plano
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