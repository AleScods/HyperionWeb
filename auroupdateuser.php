<?php

require('conexion.php');

$username=$_POST['username'];

$email=$_POST['email'];

$password=$_POST['password'];

$genero=$_POST['genero'];

$code=$_POST['code'];


$makeQuery = "UPDATE auro_usuarios SET username='".$username."', email = '".$email."', password='".$password."', genero='".$genero."' WHERE code = '".$code."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");

?>