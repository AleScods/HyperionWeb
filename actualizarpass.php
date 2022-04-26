<?php
require('conexion.php');


$username=$_POST['username'];
$password=$_POST['password'];
$newpassword=$_POST['newpassword'];
$email=$_POST['email'];
$auth=1;

$makeQuery = "UPDATE usuarios SET password='".$newpassword."' WHERE password='".$password."' and username = '".$username."' and email = '".$email."' and auth='".$auth."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");
?>