<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CRUD PHP MVC</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>

<body>
  <div class="container-fluid">
    <h3 class="text-center py-3">LOGO APP</h3>
  </div>

  <!-- Barra de navegación -->
  <div class="container-fluid bg-light">
    <div class="container">
      <ul class="nav nav-justified py-2 nav-pills">
        <!-- Codigo en php para recorrer la barra de navegación para activar los bootnes de acuerdo a la ubicación -->
        <?php if (isset($_GET["pages"])):  ?>
          <!-- Si estamos en registro, estará activo registro -->
          <?php if ($_GET["pages"] == "registro"):  ?>
            <li class="nav-item">
              <a href="index.php?pages=registro" class="nav-link active">Registro</a>
            </li>
          <?php else:  ?>
            <li class="nav-item">
              <a href="index.php?pages=registro" class="nav-link">Registro</a>
            </li>
          <?php endif  ?>

          <!-- Si estamos en Ingreso, estará activo Ingreso -->
          <?php if ($_GET["pages"] == "ingreso"):  ?>
            <li class="nav-item">
              <a href="index.php?pages=ingreso" class="nav-link active">Ingreso</a>
            </li>
          <?php else:  ?>
            <li class="nav-item">
              <a href="index.php?pages=ingreso" class="nav-link">Ingreso</a>
            </li>
          <?php endif  ?>

          <!-- Si estamos en Inicio, estará activo Inicio -->
          <?php if ($_GET["pages"] == "inicio"):  ?>
            <li class="nav-item">
              <a href="index.php?pages=inicio" class="nav-link active">Inicio</a>
            </li>
          <?php else:  ?>
            <li class="nav-item">
              <a href="index.php?pages=inicio" class="nav-link">Inicio</a>
            </li>
          <?php endif  ?>

          <!-- Si estamos en salir, estará activo Salir -->
          <?php if ($_GET["pages"] == "salir"):  ?>
            <li class="nav-item">
              <a href="index.php?pages=salir" class="nav-link active">Salir</a>
            </li>
          <?php else:  ?>
            <li class="nav-item">
              <a href="index.php?pages=salir" class="nav-link">Salir</a>
            </li>
          <?php endif  ?>

        <?php endif  ?>

      </ul>
    </div>
  </div>