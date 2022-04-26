<?php
require('conexion.php');

$newusername=$_POST['newusername'];
$newpassword=$_POST['newpassword'];
$newemail=$_POST['newemail'];
$email=$_POST['email'];
$password=$_POST['password'];
$username=$_POST['username'];
$auth=1;

$makeQuery = "UPDATE usuarios SET password='".$newpassword."', email='".$newemail."', username='".$newusername."' WHERE password='".$password."' and username = '".$username."' and email = '".$email."' and auth='".$auth."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");
?>