<?php
  require('conexion.php');
//$connection = new PDO('mysql:host=localhost;dbname=u750484907_6qyaz','u750484907_wfcS8','z0xWaHu%2vY(Z@CK');
//$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*
//$password=$_POST['password'];
$auth=$_POST[1];*/
$code=$_GET['code'];
//$username=$_POST['username'];
//$email=$_POST['email'];

//$username=miklo29;
//$email='migueelleeijaa@gmail.com';
//$password=3312;
//$code=978412;
$auth=1;
$auth2=0;
#$makeQuery = "INSERT INTO usuarios (username,email,password,code,auth) VALUES ('".$username."','".$email."','".$password//."','".$code."','".$auth."')";
$makeQuery = "UPDATE auro_usuarios SET auth='".$auth."' WHERE code = '".$code."' and auth = '".$auth2."'";
$statement = $connection->prepare($makeQuery);
$statement->execute();

//echo json_encode("Insert Data!");
//$row = $statement->affected_rows;
//$updateQuery = "UPDATE myTable SET foo=1 WHERE bar=2";
if($statement->execute()===TRUE){
    //echo json_encode("Insert Data!");
echo <<<EOT
<html lang='es'><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
<title>AURORA HTML</title><meta name='viewport' content='width=device-width, initial-scale=1.0'>
</head><body style="background-color:#262837;"><div style='text-align: center; '>
<img src='https://hyperionlsm.online/assets/logoauro.png' alt='' style='width: 20%;'>
<h1 style="color:#fbfbfb">Bienvenido al Proyecto Aurora</h1>
<p></p>
<!--<div style='background-color: #0c51ac; height: 4px; width: 100%; color:#1a3759'>-->
</div>
<!--<h2 style="color:#fbfbfb">Tu cuenta ha sido verificada:</h2>-->
<div style='background-color: #C8C8C8;  position: relative;  margin: 0 auto; width: 30%; padding: 5px;'>
<div style='text-align: center; background-color: #d6d6d6; margin:5px; padding: 10px;'><h2>Tu cuenta ha sido verificada</h2></div>
<div style='text-align: center; width: 30%; width: 100%;'><p style='color: #3a3d3d ;'>Utiliza tus datos para ingresar a la pagina web.</p>
</div></div>
</body></html>
EOT;
} else{
    //echo json_encode("No insert data");
echo <<<EOT
<html lang='es'><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
<title>AURORA HTML</title><meta name='viewport' content='width=device-width, initial-scale=1.0'>
</head><body style="background-color:#262837;"><div style='text-align: center; '>
<img src='https://hyperionlsm.online/assets/logoauro.png' alt='' style='width: 20%;'>
<h1 style="color:#fbfbfb">Bienvenido al Proyecto Aurora</h1>
<p></p>
<!--<div style='background-color: #0c51ac; height: 4px; width: 100%; color:#262837'>-->
</div>
<!--<h2 style="color:#fbfbfb">Tu cuenta ha sido verificada:</h2>-->
<div style='background-color: #C8C8C8;  position: relative;  margin: 0 auto; width: 30%; padding: 5px;'>
<div style='text-align: center; background-color: #d6d6d6; margin:5px; padding: 10px;'><h2>Su cuenta ya fue verificada</h2></div>
<div style='text-align: center; width: 30%; width: 100%;'><p style='color: #3a3d3d ;'>Utiliza tus datos para ingresar a la pagina web.</p>
</div></div>
</body></html>
EOT;
}

?>