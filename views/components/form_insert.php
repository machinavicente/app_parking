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
	<meta charset="utf-8">
	<title>Insertar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./../../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./../../assets/styles/section.css">
	<link rel="shortcut icon" href="./favicon.ico">
</head>

<body>
	<?php include "aside.php"; ?>
	<script src="./../.././assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<section class="overflow-auto">
		<div class="container py-2 h-100">
			<div class="py-5 text-center">
				<h2>Registro de Vehiculos</h2>
				<br>
				<p class="lead">El formulario permite ingresar nombres, apellidos, número y piso del parking, con validaciones específicas: nombres y apellidos solo aceptan letras y espacios; número y piso del parking aceptan letras, números, guiones altos y bajos, con un límite de 20 caracteres. Al completar y enviar el formulario, se valida y muestra una alerta si hay errores.</p>
			</div>
			<div class="row g-3">
				<h4 class="mb-3">Datos</h4>
				<form class="needs-validation" id="miFormulario" action="./../../controller/conexion.php" method="POST">
					<div class="row g-3">
						<div class="col-sm-6">
							<label for="firstName" class="form-label">Nombres</label>
							<input type="text" name="nombre" class="form-control" placeholder="Vicente Jose" pattern="[A-Za-z\s]+" title="Por favor, ingrese los datos correctamente, utilizando solo letras y espacios, sin exceder los 20 caracteres." maxlength="20" required />
						</div>
						<div class="col-sm-6">
							<label for="lastName" class="form-label">Apellidos</label>
							<input type="text" name="apellido" class="form-control" placeholder="Machina Rebolledo" pattern="[A-Za-z\s]+" title="Por favor, ingrese los datos correctamente, utilizando solo letras y espacios, sin exceder los 20 caracteres." maxlength="20" required />
							<div class="invalid-feedback">

							</div>
						</div>
						<div class="col-md-4">
							<label for="vehiculo" class="form-label">Tipo de Vehiculo</label>
							<input type="text" id="vehiculo" name="vehiculo" class="form-control" placeholder="Tipo de vehiculo" pattern="[A-Za-z\s]+" title="Solo se permiten letras" required />
						</div>
						<div class="col-md-4">
							<label for="numeromatricula" class="form-label">Matricula del Vehiculo</label>
							<input type="text" id="numeromatricula" name="matricula" class="form-control" placeholder="Número de matricula" pattern="[A-Za-z0-9_-]+" title="Solo se permiten letras, números, guiones altos y bajos" maxlength="20" required />
						</div>
						<div class="col-md-4">
							<label for="zip" class="form-label">Numero de plaza</label>
							<input type="text" id="numeroParking" name="cod_espacio" class="form-control" placeholder="Codigo de parking" pattern="[A-Za-z0-9_-]+" title="Solo se permiten letras, números, guiones altos y bajos" maxlength="20" required />
						</div>
						<div class="col-12">
							<label for="address" class="form-label">Piso de plaza</label>
							<input type="text" cid="pisoParking" name="piso" class="form-control" placeholder="Piso del parking" pattern="[A-Za-z0-9_-]+" title="Solo se permiten letras, números, guiones altos y bajos" maxlength="20" required />
						</div>
					</div>
					<hr class="my-4">
					<button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-5" type="submit">Enviar</button>
				</form>
			</div>
		</div>

	</section>
</body>

</html>