<?php
    require_once "../app/config/conexion.php";
    class Procesos extends Conectar{
        public function agregar_proceso($datos){
            $conexion = Conectar::conexion();
            $sql = "INSERT INTO t_process(letra_process,page_process) VALUES (?,?)";
            $query = $conexion->prepare($sql);
            $query->bind_param("si",$datos['procesos'],$datos['paginas']);
            $respuesta = $query->execute();
            $query->close();

            return $respuesta;
        }
    }
?>