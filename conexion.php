<?php
try{
$connection = new PDO('mysql:host=localhost;dbname=u750484907_6qyaz','u750484907_wfcS8','z0xWaHu%2vY(Z@CK');
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo 1;
//echo "yes Connected";
}catch(PDOException $exc){
  //  echo 0;
 //echo $exc ->getMessage();
//die("cloud not connect");
}
?>