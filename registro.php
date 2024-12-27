<meta charset="UTF-8">

<?php
include 'db.php';  // Conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);

    // Inserta los datos en la base de datos
    $query = "INSERT INTO usuarios (nombre, email, usuario, contrasena) 
              VALUES ('$nombre', '$email', '$usuario', '$contrasena')";

    if (mysqli_query($conn, $query)) {
        echo "Registro exitoso. <a href='login.html'>Iniciar sesión</a>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
