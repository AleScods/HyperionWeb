<?php
require('conexion.php');
$email=$_POST['email'];
//$username=miguel98;
//$password=$_POST['password'];
$auth=1;
$makeQuery = "SELECT * FROM usuarios WHERE email = '".$email."' and auth = '".$auth."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
$myarray = array();
while($resultsFrom = $statement->fetch()){

    $myarray[] = $resultsFrom;

}
echo json_encode($myarray);
?>