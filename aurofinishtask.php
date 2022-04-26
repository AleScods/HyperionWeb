<?php

require('conexion.php');

$estado_tarea=$_POST['estado_tarea'];
$id=$_POST['id'];

$makeQuery = "UPDATE auro_tareas SET estado_tarea='".$estado_tarea."' WHERE id = '".$id."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");

?>