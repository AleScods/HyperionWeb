<?php

require('conexion.php');

$code_proyecto =$_POST['code_proyecto'];

$nombre=$_POST['nombre'];

$estado_proyecto=$_POST['estado_proyecto'];

$cantidad_tareas='0';

$cantidad_tareas_completadas='0';

$cantidad_tareas_pendientes='0';

$progreso_proyecto = '1';

if($estado_proyecto == '1'){
    $makeQuery = "UPDATE auro_proyectos SET nombre='".$nombre."', estado_proyecto = '".$estado_proyecto."',cantidad_tareas='".$cantidad_tareas."',cantidad_tareas_completadas='".$cantidad_tareas_completadas."',cantidad_tareas_pendientes='".$cantidad_tareas_pendientes."' , progreso_proyecto='".$progreso_proyecto."' WHERE code_proyecto = '".$code_proyecto."'";
}else{
    $makeQuery = "UPDATE auro_proyectos SET nombre='".$nombre."', estado_proyecto = '".$estado_proyecto."' WHERE code_proyecto = '".$code_proyecto."'";
}


$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");

?>