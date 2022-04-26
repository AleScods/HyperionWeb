<?php
require('conexion.php');
//$username=$_POST['username'];
//$username=miguel98;
//$password=$_POST['password'];
//$password=12345;
$auth=0;
$email=$_POST['email'];
$makeQuery = "SELECT code FROM auro_usuarios WHERE email = '".$email."' and auth = '".$auth."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
$myarray = array();
while($resultsFrom = $statement->fetch()){

    $myarray[] = $resultsFrom;

}
echo json_encode($myarray);
?>

