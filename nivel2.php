<?php
require('conexion.php');

$nivel2=$_POST['nivel2'];
$username=$_POST['username'];
$email=$_POST['email'];
$auth=1;

$makeQuery = "UPDATE usuarios SET nivel2='".$nivel2."' WHERE username = '".$username."' and email = '".$email."' and auth='".$auth."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");
?>