<?php
require('conexion.php');

$nivel4=$_POST['nivel4'];
$username=$_POST['username'];
$email=$_POST['email'];
$auth=1;

$makeQuery = "UPDATE usuarios SET nivel4='".$nivel4."' WHERE username = '".$username."' and email = '".$email."' and auth='".$auth."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");
?>