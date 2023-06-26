<?php

require_once('conexion.php');

echo "yo recibo los datos<br>";

$device = $_GET['device_label'];
$temperatura = $_GET['temperatura'];
$humedad_ambiente = $_GET['humedad_ambiente'];

$conn = new conexion();

$query = "INSERT INTO devicehistoric(idDevice, varible, valor, fecha) VALUES('$device', 'temperatura', '$temperatura',NOW())";
$insert = mysqli_query($conn->conectardb(), $query); 

echo "DATOS RECIBIDOS<br>";
echo "{DEVICE:".$device.", TEMPERATURA:".$temperatura.", HUMEDAD AMBIENTE:".$humedad_ambiente."}"

?>