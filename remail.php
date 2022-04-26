<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

$user=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$code=$_POST['code'];
#$auth=$_POST['auth'];

//$username=miklo;
//$email='migueelleeijaa@gmail.com';
//$password=3312;

//$auth=0;
//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Set the hostname of the mail server
$mail->Host = 'smtp.hostinger.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "servicios@hyperionlsm.online";

//Password to use for SMTP authentication
$mail->Password = "4v#Ol!Z7&D1S";

//Set who the message is to be sent from
/*$mail->From('from@hyperionlsm.com');
$mail->FromName("Yo quien mas");*/

//$code=xbex45;
$mail->setFrom($email, 'Hyperion LSM');
//Set an alternative reply-to address
#$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress($email);

//Set the subject line
$mail->Subject = 'Recupera tu acceso a Hyperion LSM';

$mail->isHTML(true);

$mail->CharSet = "UTF8";

$mail->Body="<html lang='es'><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'><title>Hyperion HTML</title><meta name='viewport' content='width=device-width, initial-scale=1.0'></head><body><div style='text-align: center;'><img src='https://hyperion-lsm.000webhostapp.com/assets/logocompleto.png' style='width:20%;'><h1>Recuperación de cuenta</h1><div style='background-color: #0c51ac; height: 4px; width: 100%;'></div><br><div style='background-color: #C8C8C8;  position: relative;  margin: 0 auto; width: 30%; padding: 5px;'><div style='text-align: center;'><h2>Tu usuario: </h2>$user<h2>Tu contraseña:</h2>$password</div><div style='text-align: center; width: 30%; width: 100%; background-color: #d6d6d6;'><p style='color: #3a3d3d ;'>Introdúce los datos en la aplicación Hyperion LSM para poder ingresar</p></div></div><p>Esta página web es una página HTML válida.</p></div></body></html>";

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
/*$mail->msgHTML("<html lang='es'><head><meta charset='utf-8'><title>Hyperion HTML</title><meta name='viewport' content='width=device-width, initial-scale=1.0'></head><body><div style='text-align: center; '><img src='https://hyperion-lsm.000webhostapp.com/assets/logocompleto.png' style='width: 20%;'><h1>Bienvenido a HYPERION LSM</h1><div style='background-color: #0c51ac; height: 4px; width: 100%;'></div><h2>Tu código de verificación es:</h2><div style='background-color: #C8C8C8;  position: relative;  margin: 0 auto; width: 30%; padding: 5px;'><div style='text-align: center; background-color: #d6d6d6; margin:5px; padding: 10px;'><h2>"+"'.$code.'"+"</h2></div><div style='text-align: center; width: 30%; width: 100%;'><p style='color: #3a3d3d ;'>Introdúcelo en la aplicación Hyperion LSM para finalizar tu registro</p></div></div><p>Esta página web es una página HTML válida.</p></div></body></html>");*/

//Replace the plain text body with one created manually
$mail->AltBody = "holaaaaaaaaaaaaaa";

//Attach an image file
$mail->addAttachment('');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
?>