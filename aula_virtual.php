<meta charset="UTF-8">

<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.html"); // Redirige si no hay sesión iniciada
    exit();
}
?>


