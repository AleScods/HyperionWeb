<?php
require('conexion.php');
/*
//$password=$_POST['password'];
$auth=$_POST[1];*/
$code=$_POST['code'];
$username=$_POST['username'];
$email=$_POST['email'];

//$username=miklo29;
//$email='migueelleeijaa@gmail.com';
//$password=3312;
//$code=978412;
$auth=1;
$auth2=0;
#$makeQuery = "INSERT INTO usuarios (username,email,password,code,auth) VALUES ('".$username."','".$email."','".$password//."','".$code."','".$auth."')";
$makeQuery = "UPDATE usuarios SET auth='".$auth."' WHERE username = '".$username."' and email = '".$email."' and code = '".$code."' and auth = '".$auth2."'" ;
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");
?>