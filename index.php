<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" href="./favicon.ico">
	<title>Sistema de control - Login</title>
</head>
<body style="height: 100vh;">
	<section class="vh-100 bg-image">
		<div class="mask d-flex align-items-center h-100 gradient-custom-3">
			<div class="container h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col-12 col-md-9 col-lg-7 col-xl-6">
						<div class="card" style="border-radius: 15px;">
							<div class="card-body p-5">
								<h2 class="text-center mb-5">EstacionaRapido</h2>
								<?php include("controller/login-defect.php"); ?>
								<form action="" method="POST">
									<div data-mdb-input-init class="form-outline mb-4">
										<label class="form-label text-decoration-underline" for="form3Example1cg">Ingrese su Usuario</label>
										<input type="text" name="Admin_user" required id="form3Example1cg" class="form-control"/>
									</div>
									<div data-mdb-input-init class="form-outline mb-4">
										<label class="form-label text-decoration-underline" for="form3Example4cg">Ingrese su Password</label>
										<input type="password" name="Admin_pass" required id="form3Example4cg" class="form-control" />
									</div>
									<div class="d-flex justify-content-center">
										<button type="submit" class="btn btn-primary btn-block btn-lg text-body" style="border-radius: 25px; padding: 6px 60px;">Acceder</button>
									</div>
									<p class="mt-3 mb-0 text-body-secondary">&copy; 2017–2024</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>