<?php

require('conexion.php');
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$code=$_POST['code'];

$auth=$_POST['auth'];

$nivel1='';
$nivel2='';
$nivel3='';
$nivel4='';
$nivel5='';
$nivel6='';
$logros='';


$makeQuery = "INSERT INTO usuarios (username,email,password,code,auth,nivel1,nivel2,nivel3,nivel4,nivel5,nivel6,logros) VALUES ('".$username."','".$email."','".$password."','".$code."','".$auth."','".$nivel1."','".$nivel2."','".$nivel3."','".$nivel4."','".$nivel5."','".$nivel6."','".$logros."')";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");
?>