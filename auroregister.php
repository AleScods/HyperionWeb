<?php

require('conexion.php');

//printf("uniqid(): %s\r\n", uniqid());
$code = uniqid();
//printf($code);
$username=$_POST['username'];
//$username='prueba';
$email=$_POST['email'];
//$email='prueba@gmail.com';
$password=$_POST['password'];
//$password='123456';
//$nivel=$_POST['nivel'];
$nivel = '1';
//$code=$_POST['code'];
//$auth=$_POST['auth'];
$auth = 0;

$genero = 0;

$makeQuery = "INSERT INTO auro_usuarios (username,email,password,nivel,auth, code, id_colaborador, genero) VALUES ('".$username."','".$email."','".$password."','".$nivel."','".$auth."','".$code."','".$code."','".$genero."')";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");

?>