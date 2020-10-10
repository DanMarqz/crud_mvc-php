<?php 

	class FormsController{

		static public function ctrRegistro(){

			if(isset($_POST['registroName'])){

				$tabla = 'prueba';
				$datos = array(
											'registroName' => $_POST['registroName'],
											'registroMail' => $_POST['registroMail'],
											'registroPwd' => $_POST['registroPwd']
											);
				$resultado = FormsModels::mdlRegistro($tabla, $datos);
				return $resultado;
			}
		}
	}