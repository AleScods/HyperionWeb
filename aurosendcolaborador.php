<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//require 'vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';
$url = "https://hatodev1.000webhostapp.com/#/";
//$email='migueelleeijaa@gmail.com';
$password=$_POST['password'];
//$code='code';
$email=$_POST['email'];
//$password=$_POST['password'];
//$password='password';
$code=$_POST['code'];

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
$mail->addReplyTo('servicios@hyperionlsm.online', 'Aurora PM');
$mail->addAddress($email);
$mail->Subject = 'Ha sido invitado en Aurora PM';
$mail->isHTML(true);
$mail->CharSet = "UTF8";
//$mail->msgHTML(file_get_contents('message.html'), __DIR__);
$mail->Body = "<html lang='es'><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
<title>Hyperion HTML</title><meta name='viewport' content='width=device-width, initial-scale=1.0'>
</head><body style='background-color:#262837;'><div style='text-align: center; '>
<h1 style='color:#fbfbfb'>Bienvenido al Proyecto Aurora</h1>
<p></p>
<!--<div style='background-color: #0c51ac; height: 4px; width: 100%; color:#262837'>-->
</div>
<!--<h2 style='color:#fbfbfb'>Tu cuenta ha sido verificada:</h2>-->
<div style='background-color: #C8C8C8;  position: relative;  margin: 0 auto; width: 30%; padding: 5px;'>
<div style='text-align: center; background-color: #d6d6d6; margin:5px; padding: 10px;'>
<a href='https://hyperionlsm.online/auth2.php?code=$code'>Da click aquí para validar tu cuenta</a>
<h4>\nIngresa en Aurora PM con tus datos\n</h4>
<h4>\nUsa tu correo: $email y contraseña: $password\n</h4>
</div>
</div>
</body></html>";
//$mail->addAttachment('test.txt');
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'The email message was sent.';
}
?>