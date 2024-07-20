<?php  
	session_start();

if (!isset($_SESSION['Admin_user'])) {
    // Si no existe una sesión activa, redireccionar al inicio
    header("Location: ./../../index.php");
    exit();
}
?>
<!DOCTYPE html>                     
<html>
<head>
	<?php include "head.php"; ?>
</head>
<body class="d-flex">
	
	<script src="./../.././assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<?php include"aside.php"; ?>
	<?php include"ventana.php"; ?>
	



