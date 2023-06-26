<?php
// Realiza las operaciones necesarias en tu base de datos para obtener los datos requeridos
// ...
$servername = "34.31.142.80";
$username = "root";
$password = "lucas123";
$database = "tics";


// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $database);

// ...

ob_start(); // Iniciar el almacenamiento en búfer de salida

$sql = "SELECT * FROM clientes WHERE mail = 'juan@example.com'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Crear un array para almacenar los nombres de los usuarios
    $nombres = array();

    // Iterar sobre los resultados y agregar cada nombre al array
    while ($row = $result->fetch_assoc()) {
        $nombres[] = $row['nombre'];
    }

    // Cerrar el almacenamiento en búfer de salida
    ob_end_clean();

    // Establecer los encabezados después de cerrar el almacenamiento en búfer
    header('Content-Type: application/json');
    echo json_encode($nombres);
} else {
    // Cerrar el almacenamiento en búfer de salida
    ob_end_clean();

    echo "No se encontraron usuarios en la base de datos.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>


