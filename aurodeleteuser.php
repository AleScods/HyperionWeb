<?php

require('conexion.php');

$id_colaborador =$_POST['id_colaborador'];
$nivel = $_POST['nivel'];
 if($nivel == '2'){
     $makeQuery = "DELETE FROM auro_usuarios WHERE code = '".$id_colaborador."'";
 }else{
     $makeQuery = "DELETE FROM auro_usuarios WHERE id_colaborador = '".$id_colaborador."'";
 }
$statement = $connection->prepare($makeQuery);
$statement->execute();
echo json_encode("Insert Data!");

?>