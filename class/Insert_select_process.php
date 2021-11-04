<?php
    require_once "../app/config/conexion.php";
    class Procesos extends Conectar{
        public function agregar_proceso($datos,$estados){
            $conexion = Conectar::conexion();
            $consulta = "SELECT SUM(page_process) AS total FROM t_process";
            $resultado = mysqli_query($conexion,$consulta);
            $columna = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
            if($columna['total'] <= 5){
                $sql = "INSERT INTO t_process(letra_process,page_process,estado_process) VALUES (?,?,?)";
                $query = $conexion->prepare($sql);
                $query->bind_param("sis",$datos['procesos'],$datos['paginas'],$estados['activo']);
                $respuesta = $query->execute();
                $query->close();
                return $respuesta;
            }else if($columna['total'] > 5){
                $sql = "INSERT INTO t_process(letra_process,page_process,estado_process) VALUES (?,?,?)";
                $query = $conexion->prepare($sql);
                $query->bind_param("sis",$datos['procesos'],$datos['paginas'],$estados['detenido']);
                $respuesta = $query->execute();
                $query->close();
                return $respuesta;
            }
        }
    }
?>