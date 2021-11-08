<?php
    require_once "../../app/config/conexion.php";
    $conectar = new Conectar();
    $conexion = $conectar->conexion();
    $sql = "SELECT * FROM t_process";
    $resultado = mysqli_query($conexion, $sql);
    while($mostrar = mysqli_fetch_array($resultado)){
        if($mostrar['estado_process'] == "activo"){
            if($mostrar['letra_process'] == "a"){
                for($i = 1; $i<= $mostrar['page_process']; $i++){
?>
                    <div class="col-md-12 bg-info">A</div>
<?php
                }
            }else if ($mostrar['letra_process'] == "b"){        
                for($i = 1; $i<= $mostrar['page_process']; $i++){
?>
                    <div class="col-md-12 bg-primary">B</div>
<?php
                }
            }else if ($mostrar['letra_process'] == "c"){
                for($i = 1; $i<= $mostrar['page_process']; $i++){
?>
                    <div class="col-md-12 bg-warning">C</div>
<?php
                }
            }else if ($mostrar['letra_process'] == "d"){
                for($i = 1; $i<= $mostrar['page_process']; $i++){
?>
                    <div class="col-md-12 bg-danger">D</div>
<?php
                }
            }else if ($mostrar['letra_process'] == "e"){
                for($i = 1; $i<= $mostrar['page_process']; $i++){
?>
                    <div class="col-md-12 bg-secondary">E</div>
<?php
                }
            }
        }
    }
?>