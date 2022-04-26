<?php
require('conexion.php');
//$username=$_POST['username'];
//$username=miguel98;
//$password=$_POST['password'];
//$password=12345;
//$auth=0;
//$code_proyecto=$_POST['code_proyecto'];
$code_colaborador=$_POST['code_colaborador'];
 //"SELECT * FROM auro_usuarios WHERE email = '".$email."'
//$makeQuery = "SELECT * FROM auro_tareas WHERE code_proyecto = '".$code_proyecto."' ORDER BY auro_tareas.code_fase ASC";
$makeQuery = "SELECT * FROM auro_notas WHERE code_colaborador = '".$code_colaborador."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
$myarray = array();
while($resultsFrom = $statement->fetch()){

    $myarray[] = $resultsFrom;

}
echo json_encode($myarray);
?>

