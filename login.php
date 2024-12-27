<meta charset="UTF-8">

<?php
session_start();
include 'db.php';  // Conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $contrasena = $_POST['contrasena'];

    // Consulta a la base de datos
    $query = "SELECT * FROM usuarios WHERE usuario='$usuario'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    // Verifica la contraseña
    if ($row && password_verify($contrasena, $row['contrasena'])) {
        $_SESSION['usuario'] = $row['usuario'];
        header("Location: aula_virtual.html");
    } else {
        echo "Usuario o contraseña incorrectos.";
    }

    mysqli_close($conn);
}
?>
