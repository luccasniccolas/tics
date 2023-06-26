<?php
$servername = "34.31.142.80";
$username = "root";
$password = "lucas123";
$database = "tics";

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$mail=$_POST['mail'];
$pass=$_POST['pass'];

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar la conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
echo "Conexión exitosa a la base de datos MySQL en Google Cloud.";

$query= "INSERT INTO clientes (nombre, apellido, mail, contrasena) VALUES ('$nombre', '$apellido', '$mail', '$pass');";

if (mysqli_query($conn, $query)) {
    echo "Datos insertados correctamente.";
} else {
    echo "Error al insertar datos: " . mysqli_error($conn);
}
?>
