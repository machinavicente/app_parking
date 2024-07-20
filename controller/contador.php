<?php
  $server = 'localhost';
   $user = 'root';
   $pass = '';
   $bd = 'estacionamiento';

   // Crear conexión
   $conexion = mysqli_connect($server, $user, $pass, $bd) or die("Error al conectar");

$sql = "SELECT COUNT(*) FROM estacionarapido";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // Print the result
    while ($row = $result->fetch_assoc()) {
        echo $row["COUNT(*)"];
    }
} else {
    echo "0 results";
}

$conexion->close();

?>