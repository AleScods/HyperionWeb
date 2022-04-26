<?php
require('conexion.php');

$username=$_POST['username'];
$newusername=$_POST['newusername'];
$email=$_POST['email'];
$auth=1;

$makeQuery = "UPDATE usuarios SET username='".$newusername."' WHERE username = '".$username."' and email = '".$email."' and auth='".$auth."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");
?>