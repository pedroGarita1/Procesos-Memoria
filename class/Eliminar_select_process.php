<?php
    require_once "../app/config/conexion.php";
    class Eliminar_procesos extends Conectar{
        public function eliminar_proceso($datos,$estados){
            $conexion = Conectar::conexion();
            $sql = "UPDATE t_process SET estado_process = ? WHERE letra_process = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param("ss",$estados['finish'],$datos['procesos']);
            $respuesta = $query->execute();
            $query->close();
            return $respuesta;
            //<----------------------------------------------------------------------------------------------->
            $consulta = "SELECT SUM(page_process) AS total FROM t_process WHERE estado_process = 'activo'";
            $resultado = mysqli_query($conexion,$consulta);
            $columna = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
            $resultado_evaluacion = 8 - $columna['total'];
            //<----------------------------------------------------------------------------------------------->
            $consulta1 = "SELECT page_process AS paginas FROM t_process WHERE estado_process = 'detenido'";
            $resultado1 = mysqli_query($conexion,$consulta1);
            $columna1 = mysqli_fetch_array($resultado1, MYSQLI_ASSOC);
            //<----------------------------------------------------------------------------------------------->
            if($columna['total'] < 8 &&  $columna1['paginas'] <= $resultado_evaluacion){
                $insersion = "UPDATE t_process SET estado_process = ?";
                $query = $conexion->prepare($insersion);
                $query->bind_param("s", $datos['activo']);
                $respuesta = $query->execute();
                $query->close();
                return $respuesta;
            }
        }
    }
?>