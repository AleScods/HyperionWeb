<?php
require('conexion.php');
$makeQuery = "SELECT * FROM usuarios";
$statement = $connection->prepare($makeQuery);
$statement->execute();
$myarray = array();
while($resultsFrom = $statement->fetch()){
    array_push(
        $myarray,array(
        "id"=>$resultsFrom['id'],
        "username"=>$resultsFrom['username'],
        "nivel"=>$resultsFrom['nivel']
        )
    );
}
echo json_encode($myarray);

?>