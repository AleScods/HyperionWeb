<?php
require('conexion.php');

$nivel6=$_POST['nivel6'];
$username=$_POST['username'];
$email=$_POST['email'];
$auth=1;

$makeQuery = "UPDATE usuarios SET nivel6='".$nivel6."' WHERE username = '".$username."' and email = '".$email."' and auth='".$auth."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");
?>