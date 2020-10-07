<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container-fluid">
    <h3 class="text-center py-3">CRUD PHP MVC</h3>
  </div>

  <!-- Barra de navegación -->
	<div class="container-fluid bg-light">
		<div class="container">			
      <ul class="nav nav-justified py-2 nav-pills">
        <!-- Codigo en php para recorrer la barra de navegación para activar los bootnes de acuerdo a la ubicación -->
        <?php if(isset($_GET["pages"])): ?>
          <!-- Si estamos en registro, estará activo registro -->
          <?php if($_GET["pages"] == "registro"): ?>
						<li class="nav-item">
							<a class="nav-link active" href="index.php?pages=registro">Registro</a>
						</li>
						<?php else: ?>
						<li class="nav-item">
							<a class="nav-link" href="index.php?pages=registro">Registro</a>
						</li>						
          <?php endif ?>

          <!-- Si estamos en Ingreso, estará activo Ingreso -->
          <?php if($_GET["pages"] == "ingreso"): ?>
						<li class="nav-item">
							<a class="nav-link active" href="index.php?pages=ingreso">Ingreso</a>
						</li>
						<?php else: ?>
						<li class="nav-item">
							<a class="nav-link" href="index.php?pages=ingreso">Ingreso</a>
						</li>						
          <?php endif ?>

          <!-- Si estamos en Inicio, estará activo Inicio -->
					<?php if($_GET["pages"] == "inicio"): ?>
						<li class="nav-item">
							<a class="nav-link active" href="index.php?pages=inicio">Inicio</a>
						</li>						
						<?php else: ?>						
						<li class="nav-item">
							<a class="nav-link" href="index.php?pages=inicio">Inicio</a>
						</li>						
          <?php endif ?>

          <!-- Si estamos en salir, estará activo Salir -->
					<?php if($_GET["pages"] == "salir"): ?>
						<li class="nav-item">
							<a class="nav-link active" href="index.php?pages=salir">Salir</a>
						</li>						
						<?php else: ?>						
						<li class="nav-item">
							<a class="nav-link" href="index.php?pages=salir">Salir</a>
						</li>						
          <?php endif ?>

          <?php else: ?>
						<!--opciones del menu para variables $_GET-->
						<!--agregamos la barra de navegación-->
						<li class="nav-item">
							<a class="nav-link" href="index.php?pages=registro">Registro</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="index.php?pages=ingreso">Ingreso</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?pages=inicio">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?pages=salir">Salir</a>
						</li>				
						<!--End of Barra de navegación-->

        <?php endif  ?>

      </ul>
    </div>
  </div>