<?php

require('conexion.php');

$titulo_nota=$_POST['titulo_nota'];

$descripcion_nota=$_POST['descripcion_nota'];

$code_colaborador=$_POST['code_colaborador'];

$nombre_nota=$_POST['nombre_nota'];

$makeQuery = "INSERT INTO auro_notas (titulo_nota,descripcion_nota,code_colaborador,nombre_nota) VALUES ('".$titulo_nota."', '".$descripcion_nota."', '".$code_colaborador."', '".$nombre_nota."')";
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");

?>