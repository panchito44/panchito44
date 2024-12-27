<meta charset="UTF-8">

<?php
// Iniciar sesión para acceder a la información actual de la sesión
session_start();

// Eliminar todas las variables de sesión
$_SESSION = array();

// Destruir la sesión en el servidor
session_destroy();

// Eliminar la cookie de sesión (opcional, pero recomendado)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Redirigir a la página principal
header("Location: index.html");
exit();
?>
