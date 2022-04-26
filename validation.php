<?php
require('conexion.php');
$username=$_POST['username'];
//$username=miguel98;
//$password=$_POST['password'];
$auth=1;
$makeQuery = "SELECT * FROM usuarios WHERE username = '".$username."' and auth = '".$auth."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
$myarray = array();
while($resultsFrom = $statement->fetch()){

    $myarray[] = $resultsFrom;

}
header("Content-type: application/json; charset=utf-8");
echo json_encode($myarray);

?>