<?php
// Configuración de la conexión a la base de datos
$server = 'localhost';
$user = 'root';
$pass = '';
$bd = 'estacionamiento';

// Crear conexión
$conexion = mysqli_connect($server, $user, $pass, $bd);

// Comprobar conexión
if (!$conexion) {
    die("Error al conectar: " . mysqli_connect_error());
}

$id = $_GET['id'];
$delete = "DELETE FROM estacionarapido WHERE id = '$id'";
$result = mysqli_query($conexion, $delete);

// Verificar el resultado de la eliminación
if ($result) {
    // Si los datos fueron eliminados satisfactoriamente
    $mensaje = "Datos eliminados satisfactoriamente";
    echo "<script>
        alert('$mensaje');
        window.location.href = '../views/components/espacios_mod.php';
    </script>";
} else {
    // Si hubo un error en la eliminación de datos
    $mensaje = "Error al eliminar los datos";
    echo "<script>
        alert('$mensaje');
        window.history.back();
    </script>";
}

// Cerrar conexión
mysqli_close($conexion);
