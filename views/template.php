<?php require_once('pages/header.php'); ?>

	<?php
	// comprobamos que la variable GET existe y no es nula
		if(isset($_GET["pages"])){

			if(
				$_GET["pages"] == "registro" ||	$_GET["pages"] == "ingreso"  ||
				$_GET["pages"] == "inicio"   ||	$_GET["pages"] == "salir" ){
					include("pages/".$_GET["pages"].".php");
				}
				# de no existir ninguna de las opciones mostramos la página 404
				else{
					include("pages/error404.php");
				}		

		}else{
			# en caso de no estar definida la variable $_GET mostramos la página de ingreso por defecto
			include('pages/ingreso.php');
		}
	?>

<?php require_once('pages/footer.php'); ?>