<?php
header("Access-Control_Allow_Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Content-type:application/json;charset=utf-8"); 
header("Access-Control-Allow-Methods: GET");
require('conexion.php');
$email=$_POST['email'];
//$username=miguel98;
$password=$_POST['password'];
//$password=12345;
$auth=1;
$makeQuery = "SELECT * FROM auro_usuarios WHERE email = '".$email."' and password = '".$password."' and auth = '".$auth."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
$myarray = array();
while($resultsFrom = $statement->fetch()){

    $myarray[] = $resultsFrom;

}
echo json_encode($myarray);
?>