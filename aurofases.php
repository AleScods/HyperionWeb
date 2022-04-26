<?php
require('conexion.php');
//$username=$_POST['username'];
//$username=miguel98;
//$password=$_POST['password'];
//$password=12345;
//$auth=0;
$id=$_POST['id'];
 //"SELECT * FROM auro_usuarios WHERE email = '".$email."'
$makeQuery = "SELECT * FROM auro_proyectos WHERE id = '".$id."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
$myarray = array();
while($resultsFrom = $statement->fetch()){

    $myarray[] = $resultsFrom;

}
echo json_encode($myarray);
?>

