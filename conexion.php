<?php
$servername = "localhost"; // Nombre del servidor (en este caso, local)
$username = "root"; // Nombre de usuario de MySQL
$password = "tu_contraseña"; // Contraseña de MySQL
$dbname = "Fighter"; // Nombre de la base de datos a la que te quieres conectar

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa"; // Mensaje de éxito si la conexión se realiza correctamente
}
?>
