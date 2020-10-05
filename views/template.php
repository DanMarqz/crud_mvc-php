<?php require_once('pages/header.php'); ?>

<!--
	Para comprobar que todo funciona debemos modificar en el archivo template.php su estructura y agregar una función predefinida llamada ISSET, que permite comprobar si una variable está definida y no es nula. 
	Y se crea la estructura if para recorrer las opciones de la barra de navegación y nos permita visitar las rutas preestablecidas
-->
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
			# en caso de no estar definida la variable $_GET mostramos la página de registro por defecto
			include('pages/registro.php');
		}
	?>

<?php require_once('pages/footer.php'); ?>