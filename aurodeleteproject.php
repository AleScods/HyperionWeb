<?php

require('conexion.php');

$code_proyecto=$_POST['code_proyecto'];

$makeQuery = "DELETE FROM auro_proyectos WHERE code_proyecto = '".$code_proyecto."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");

?>