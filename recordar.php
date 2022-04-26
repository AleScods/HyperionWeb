<?php
require('conexion.php');
$email=$_POST['email'];
//$username=miguel98;
//$password=$_POST['password'];
//$password=12345;
$auth=1;
$makeQuery = "SELECT * FROM usuarios WHERE username = '".$username."' and auth = '".$auth."'" ;
$statement = $connection->prepare($makeQuery);
$statement->execute();
$myarray = array();
while($resultsFrom = $statement->fetch()){

    $myarray[] = $resultsFrom;

}
echo json_encode($myarray);
?>