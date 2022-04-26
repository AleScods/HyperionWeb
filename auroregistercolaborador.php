<?php

require('conexion.php');
$username=$_POST['username'];

$email=$_POST['email'];

$password=$_POST['password'];

$nivel = '2';

$auth = 0;

$code = uniqid();

$id_colaborador = $_POST['id_colaborador'];

$genero = $_POST['genero'];

$makeQuery = "INSERT INTO auro_usuarios (username,email,password,nivel,auth,code, id_colaborador, genero) VALUES ('".$username."','".$email."','".$password."','".$nivel."','".$auth."','".$code."' ,'".$id_colaborador."', '".$genero."')";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");

?>