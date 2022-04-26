<?php
require('conexion.php');
//$username=$_POST['username'];
//$username=miguel98;
//$password=$_POST['password'];
//$password=12345;
//$auth=0;
$code=$_POST['code'];
 //"SELECT * FROM auro_usuarios WHERE email = '".$email."'
 //SELECT * FROM auro_proyectos ORDER BY auro_proyectos.progreso_proyecto
$makeQuery = "SELECT * FROM auro_proyectos WHERE code = '".$code."' ORDER BY auro_proyectos.progreso_proyecto DESC";
$statement = $connection->prepare($makeQuery);
$statement->execute();
$myarray = array();
while($resultsFrom = $statement->fetch()){

    $myarray[] = $resultsFrom;

}
echo json_encode($myarray);
?>

