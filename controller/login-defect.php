<?php
    // Valores de usuario y contraseña predefinidos
    $usuario_correcto = "admin";
    $contrasena_correcta = "admin";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["Admin_user"];
        $contrasena = $_POST["Admin_pass"];

        // Comprobar las credenciales
        if ($usuario === $usuario_correcto && $contrasena === $contrasena_correcta) {
            // Credenciales válidas, iniciar sesión y redireccionar a la página principal
            session_start();
            $_SESSION['Admin_user'] = $usuario;
            header("Location: ./views/components/inicio.php");
            exit();
        } else {
            // Credenciales inválidas, mostrar un mensaje de error
            echo "Credenciales inválidas.";
        }
    }
?>