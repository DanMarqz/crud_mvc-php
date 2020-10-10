<?php

require_once('conexion.php');

class FormsModels{

    static public function mdlRegistro($tabla, $datos){

        $stmt = Conexion::conectar()->prepare('INSERT INTO $tabla(registroName,
         registroMail, registroPwd) VALUES (:registroName, :registroMail, :registroPwd)');
        
        $stmt->bindParam(':registroName',$datos["registroName"], PDO::PARAM_STR);
        $stmt->bindParam(':registroMail',$datos["registroMail"], PDO::PARAM_STR);
        $stmt->bindParam(':registroPwd',$datos["registroPwd"], PDO::PARAM_STR);
        
        if($stmt->execute()){
            return 'OK';
        }
        else{
            print_r(Conexion::conectar()->errorInfo());
        }
        
        // $stmt->close();
        $stmt = null;
    }
}