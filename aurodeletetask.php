<?php

require('conexion.php');

$id=$_POST['id'];

$makeQuery = "DELETE FROM auro_tareas WHERE id = '".$id."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");

?>