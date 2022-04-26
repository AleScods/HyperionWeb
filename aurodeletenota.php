<?php

require('conexion.php');

$id =$_POST['id'];

$makeQuery = "DELETE FROM auro_notas WHERE id = '".$id."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");

?>