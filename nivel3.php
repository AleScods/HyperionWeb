<?php
require('conexion.php');

$nivel3=$_POST['nivel3'];
$username=$_POST['username'];
$email=$_POST['email'];
$auth=1;

$makeQuery = "UPDATE usuarios SET nivel3='".$nivel3."' WHERE username = '".$username."' and email = '".$email."' and auth='".$auth."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");
?>