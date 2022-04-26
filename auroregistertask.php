<?php

require('conexion.php');

$nombre_tarea=$_POST['nombre_tarea'];

$descripcion_tarea=$_POST['descripcion_tarea'];

$code_proyecto=$_POST['code_proyecto'];

$code_colaborador=$_POST['code_colaborador'];

$estado_tarea=$_POST['estado_tarea'];


$makeQuery = "INSERT INTO auro_tareas (nombre_tarea,descripcion_tarea,code_proyecto,code_colaborador,estado_tarea) VALUES ('".$nombre_tarea."','".$descripcion_tarea."','".$code_proyecto."','".$code_colaborador."','".$estado_tarea."')";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");

?>