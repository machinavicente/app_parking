<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="./../../favicon.ico">
	<link rel="stylesheet" type="text/css" href="./../../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./../../assets/styles/section.css">
	<link rel="shortcut icon" href="./favicon.ico">
</head>
<body>
	<?php include "aside.php"; ?>
	<section class="overflow-auto">
		<div style="height: 100%;">
			<div class="container py-4">
				<header class="pb-3 mb-4 border-bottom">
					<a href="#" class="d-flex align-items-center text-body-emphasis text-decoration-none">
						<span class="fs-4">DashBoard</span>
					</a>
				</header>
				<div class="mb-4 bg-body-tertiary rounded-3">
					<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active" data-bs-interval="3000">
								<img src="./../../assets/img/s1.jpg" class="d-block w-100" alt="..." height="350" width="400">
							</div>
							<div class="carousel-item" data-bs-interval="3000">
								<img src="./../../assets/img/s2.jpg" class="d-block w-100" alt="..." height="350" width="400">
							</div>
							<div class="carousel-item" data-bs-interval="3000">
								<img src="./../../assets/img/s3.jpg" class="d-block w-100" alt="..." height="350" width="400">
							</div>
						</div>
					</div>
				</div>
				<div class="row align-items-md-stretch">
					<div class="col-md-6">
						<div class="h-100 p-5 text-bg-dark rounded-3">
							<h2>Usuarios Estacionados Ahora</h2>
							<p>En este momento, hay <?php include "./../../controller/contador.php"; ?> usuarios están aprovechando nuestras plazas de estacionamiento seguras y convenientes con EstacionaRápido.</p>
							<button class="btn btn-outline-light" type="button">Parkings Activos: <?php include "./../../controller/contador.php"; ?></button>
						</div>
					</div>
					<div class="col-md-6">
						<div class="h-100 p-5 bg-body-tertiary border rounded-3">
							<h2>Manual de Usuario</h2>
							<p>Presiona el boton para acceder al manueal de usuario.</p>
							<button id="downloadBtn" class="btn btn-outline-secondary" type="button">Manual de uso</button>
						</div>
					</div>
				</div>
			</div>
			<footer class="pt-3 mt-4 text-body-secondary border-top">
				&copy; 2024
			</footer>
		</div>
		</div>
	</section>
	<script src="./../.././assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script>
		document.getElementById('downloadBtn').addEventListener('click', function() {
			const pdfUrl = './../.././assets/docs/estacionarapido.pdf'; // Cambia esto a la URL de tu PDF
			const link = document.createElement('a');
			link.href = pdfUrl;
			link.download = 'manual de uso.pdf'; // Nombre del archivo que se descargará
			document.body.appendChild(link);
			link.click();
			document.body.removeChild(link);
		});
	</script>
</body>
</html>