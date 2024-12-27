<?php
$host = "localhost";   // Servidor MySQL
$user = "root";        // Usuario MySQL (cambia si es necesario)
$password = "";        // Contraseña MySQL
$dbname = "sistema_usuarios";  // Nombre de la base de datos

// Crear conexión
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verificar conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
