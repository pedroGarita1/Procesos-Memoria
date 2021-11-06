<?php
    class Conectar{
        public function conexion(){
            $servidor = "localhost";
            $usuario = "root";
            $password = "";
            $base = "procesos_memoria";
            $conexion = mysqli_connect($servidor,$usuario,$password,$base);
            return $conexion;
        }
    }
?>