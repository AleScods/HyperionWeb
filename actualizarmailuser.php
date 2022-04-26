<?php
require('conexion.php');

$newusername=$_POST['newusername'];
$username=$_POST['username'];
$newemail=$_POST['newemail'];
$email=$_POST['email'];
$auth=1;

$makeQuery = "UPDATE usuarios SET email='".$newemail."', username='".$newusername."' WHERE username = '".$username."' and email = '".$email."' and auth='".$auth."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");
?>