<?php 
	class FormsController{
		# Crea la funcion publica ctrRegistro
		static public function ctrRegistro(){
			# IF en las variables POST tienen datos
			if(isset($_POST['registroName'])){
				return "OK";
				echo $_POST['registroName'].'<br>'. // Retorna el valor de la variable
					$_POST['registroEmail'].'<br>'.
					$_POST['registroPwd'].'<br>';
			}
		}
	}