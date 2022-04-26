<?php

require('conexion.php');

$code_proyecto =$_POST['code_proyecto'];

$progreso_proyecto=$_POST['progreso_proyecto'];

$cantidad_tareas=$_POST['cantidad_tareas'];

$cantidad_tareas_completadas=$_POST['cantidad_tareas_completadas'];

$cantidad_tareas_pendientes=$_POST['cantidad_tareas_pendientes'];


$makeQuery = "UPDATE auro_proyectos SET progreso_proyecto = '".$progreso_proyecto."' , cantidad_tareas = '".$cantidad_tareas."' ,cantidad_tareas_completadas = '".$cantidad_tareas_completadas."' ,cantidad_tareas_pendientes = '".$cantidad_tareas_pendientes."' WHERE code_proyecto = '".$code_proyecto."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");

?>