<?php
/**
    * Creamos la clase y los métodos necesarios para conectar la BD 
*/

class Conexion{

    static public function conectar(){
        # Creamos la instancia de la clase PDO
        $link = new PDO('mysql:host=localhost;dbname=php_iutv', 'root');
        # Seleccionamos el tipo de caracteres (charset) para manipular los datos
        $link->exec('SET NAMES UTF8');
        return $link;
    }
}