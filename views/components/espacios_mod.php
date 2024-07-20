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
<body>
	<?php include "aside.php"; ?>
	<script src="./../.././assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<section class="d-flex overflow-auto flex-column ">
		<div class="section-header pt-4">
			<h2>Parkings Registrados</h2>
		</div>
		<div class="section-main w-100 d-flex overflow-auto flex-wrap justify-content-center gap-3">
			<div class="album py-5 bg-body-tertiary">
				<div class="container">
					<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
						<?php
						$inc = include("./../../controller/show.php");
						if ($inc) {
							$consulta = "SELECT * FROM estacionarapido";
							$resultado = mysqli_query($conexion, $consulta);
							if ($resultado) {
								while ($row = $resultado->fetch_array()) {
									$id = $row['id'];
									$nombre = $row['nombre'];
									$apellido = $row['apellido'];
									$codigo_parking = $row['cod_espacio'];
									$piso = $row['piso'];
									$vehiculo = $row['vehiculo'];
									$matricula = $row['matricula'];
						?>
									<div class="col">
										<div class="card shadow-sm">
											<img class="bd-placeholder-img card-img-top" width="100%" height="225" src="./../../assets/img/parkingw.jpg" alt="">
											<div class="card-body">
												<p class="card-text">Vehiculo: <?php echo $vehiculo ?> con matricula
													<?php echo $matricula ?> registrado a nombre de <?php echo $nombre ?>
													<?php echo $apellido ?> en el piso N° <?php echo $piso ?>.</p>
												<div class="d-flex justify-content-between align-items-center">
													<div class="btn-group">
														<button type="button" class="btn btn-sm btn-outline-danger"><?php echo "<a class='link-dark link-underline-opacity-0' href='./../../controller/eliminar.php?id=" . $row['id'] . "'>Eliminar</a>"; ?></button>
													</div>
													<h4 class="text-body-secondary"><?php echo $codigo_parking ?></h4>
												</div>
											</div>
										</div>
									</div>
						<?php
								}
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>