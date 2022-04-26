<?php
require('conexion.php');

$nivel5=$_POST['nivel5'];
$username=$_POST['username'];
$email=$_POST['email'];
$auth=1;

$makeQuery = "UPDATE usuarios SET nivel5='".$nivel5."' WHERE username = '".$username."' and email = '".$email."' and auth='".$auth."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");
?>