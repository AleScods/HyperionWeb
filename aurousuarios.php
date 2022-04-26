<?php
require('conexion.php');
//$username=$_POST['username'];
//$username=miguel98;
//$password=$_POST['password'];
//$password=12345;
//$auth=0;
$id_colaborador=$_POST['id_colaborador'];
$nivel=2;
 //"SELECT * FROM auro_usuarios WHERE email = '".$email."'
$makeQuery = "SELECT * FROM auro_usuarios WHERE id_colaborador = '".$id_colaborador."' and nivel = '".$nivel."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
$myarray = array();
while($resultsFrom = $statement->fetch()){

    $myarray[] = $resultsFrom;

}
echo json_encode($myarray);
?>

