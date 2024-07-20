<?php 
    // declarar las variables que estableceran la conexion a la base de datos
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $bd = 'estacionamiento';

    // conexion a la base de datos
    $conexion = mysqli_connect($server, $user, $pass, $bd) or die("Error al conectar");

    // conectando la variables con el name en los input del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $codigo_parking = $_POST['cod_espacio'];
    $piso = $_POST['piso'];
    $vehiculo = $_POST['vehiculo'];
    $matricula = $_POST['matricula'];

    // sentencia SQL
    $insert = "INSERT INTO estacionarapido(`nombre`, `apellido`, `cod_espacio`, `piso`, `vehiculo`, `matricula`) VALUES ('$nombre', '$apellido', '$codigo_parking', '$piso', '$vehiculo', '$matricula')";
    $result = mysqli_query($conexion, $insert);

    // cerrar conexion
    mysqli_close($conexion);

    // Verificar el resultado de la inserción
    if ($result) {
        // Si los datos fueron ingresados satisfactoriamente
        $mensaje = "Datos ingresados satisfactoriamente";
        echo "<script>
            alert('$mensaje');
            window.location.href = '../views/components/form_insert.php';
        </script>";
    } else {
        // Si hubo un error en la inserción de datos
        $mensaje = "Error al ingresar los datos";
        echo "<script>
        alert('$mensaje');
            window.history.back();
        </script>";
    }
?>
