<?php

require('conexion.php');



$code_proyecto= uniqid();

$nombre=$_POST['nombre'];

$code=$_POST['code'];

$progreso_proyecto='0';

$estado_proyecto='0';

$cantidad_tareas='0';

$cantidad_tareas_completadas='0';

$cantidad_tareas_pendientes='0';

$makeQuery = "INSERT INTO auro_proyectos (nombre, code, code_proyecto, progreso_proyecto, estado_proyecto,cantidad_tareas, cantidad_tareas_completadas, cantidad_tareas_pendientes) VALUES ('".$nombre."', '".$code."', '".$code_proyecto."', '".$progreso_proyecto."', '".$estado_proyecto."', '".$cantidad_tareas."', '".$cantidad_tareas_completadas."', '".$cantidad_tareas_pendientes."')";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");

?>