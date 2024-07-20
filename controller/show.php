<?php

   // Configuración de la conexión a la base de datos
   $server = 'localhost';
   $user = 'root';
   $pass = '';
   $bd = 'estacionamiento';

   // Crear conexión
   $conexion = mysqli_connect($server, $user, $pass, $bd) or die("Error al conectar");

   // Realizar consulta para obtener los datos de la tabla
   $sql = "SELECT id, nombre, apellido, cod_espacio, piso, vehiculo, matricula FROM estacionarapido";
   $result = $conexion->query($sql);

   // Verificar si hay algún resultado
  

?>