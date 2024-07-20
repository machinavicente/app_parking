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
		<div class="container py-5 h-100">
			<div class="row d-flex justify-content-center align-items-center">
				<div class="col-xl-10">
					<div class="card rounded-3 text-black">
						<div class="row g-0">
							<div class="col-lg-6">
								<div class="card-body p-md-5 mx-md-4">
									<form id="miFormulario" action="./../../controller/conexion.php" method="POST">
										<div data-mdb-input-init class="form-outline mb-2">
											<label class="form-label" for="nombre">Nombres</label>
											<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Vicente Jose" pattern="[A-Za-z\s]+" title="Solo se permiten letras y espacios" maxlength="20" required />
										</div>
										<div data-mdb-input-init class="form-outline mb-2">
											<label class="form-label" for="apellido">Apellidos</label>
											<input type="text" id="apellido" name="apellido" class="form-control" placeholder="Machina Rebolledo" pattern="[A-Za-z\s]+" title="Solo se permiten letras y espacios" maxlength="20" required />
										</div>
										<div data-mdb-input-init class="form-outline mb-2">
											<label class="form-label" for="vehiculo">Tipo de Vehiculo</label>
											<input type="text" id="vehiculo" name="vehiculo" class="form-control" placeholder="Tipo de vehiculo" pattern="[A-Za-z\s]+" title="Solo se permiten letras" maxlength="20" required />
										</div>
										<div data-mdb-input-init class="form-outline mb-2">
											<label class="form-label" for="numeromatricula">Numero de Matricula</label>
											<input type="text" id="numeromatricula" name="matricula" class="form-control" placeholder="Número de parking" pattern="[A-Za-z0-9_-]+" title="Solo se permiten letras, números, guiones altos y bajos" maxlength="20" required />
										</div>
										<div data-mdb-input-init class="form-outline mb-2">
											<label class="form-label" for="numeroParking">Numero del Parking</label>
											<input type="text" id="numeroParking" name="cod_espacio" class="form-control" placeholder="Número de parking" pattern="[A-Za-z0-9_-]+" title="Solo se permiten letras, números, guiones altos y bajos" maxlength="20" required />
										</div>
										<div data-mdb-input-init class="form-outline mb-2">
											<label class="form-label" for="pisoParking">Piso del Parking</label>
											<input type="text" id="pisoParking" name="piso" class="form-control" placeholder="Piso del parking" pattern="[A-Za-z0-9_-]+" title="Solo se permiten letras, números, guiones altos y bajos" maxlength="20" required />
										</div>
										<div class="text-center pt-1 mb-3 pb-1">
											<button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Enviar</button>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-6 d-flex align-items-center gradient-custom-2">
								<div class="text-black lead">
									<p class="small mb-0">El formulario proporcionado permite a los usuarios ingresar sus nombres, apellidos, número del parking y piso del parking. Cada campo del formulario tiene validaciones específicas para asegurar que los datos ingresados sean correctos. Los nombres y apellidos solo pueden contener letras y espacios, mientras que el número del parking y el piso del parking pueden incluir letras, números, guiones altos y bajos. Además, cada campo está limitado a un máximo de 20 caracteres. Para utilizar el formulario, complete todos los campos según las instrucciones y presione el botón "Enviar". Si alguna entrada no cumple con las validaciones, se mostrará una alerta indicando el error específico.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
</body>

</html>