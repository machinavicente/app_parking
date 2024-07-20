<aside>
	<nav style="height: 100vh;">
		<div class="d-flex flex-column flex-shrink-0 p-3 bg-light h-100" style="width: 15vw;">
			<a href="inicio.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
				<span class="fs-4">Sistema EstacionaRápido</span>
			</a>
			<hr>
			<ul class="nav nav-pills flex-column mb-auto">
				<li class="nav-item">
					<a href="inicio.php" class="nav-link active" aria-current="page">Inicio</a>
				</li>
				<li>
					<a href="dashboard.php" class="nav-link link-dark">Dashboard</a>
				</li>
				<li>
					<a href="form_insert.php" class="nav-link link-dark">Nuevo Parking</a>
				</li>
				<li>
					<a href="espacios_mod.php" class="nav-link link-dark">Parking Registrados</a>
				</li>
			</ul>
			<hr>
			<div class="dropdown">
				<a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
					<img src="./../../assets/img/marina.png" alt="" width="32" height="32" class="rounded-circle me-2">
					<strong>Opciones</strong>
				</a>
				<ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
					<li><a class="dropdown-item" href="./../../controller/botoncerrar.php">Salir</a></li>
					<li><a class="dropdown-item" href="form_insert.php">Registrar Parking</a></li>
					<li>
						<hr class="dropdown-divider">
					</li>
				</ul>
			</div>
		</div>
	</nav>
</aside>