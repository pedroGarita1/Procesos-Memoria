<?php
    require_once "app/config/conexion.php";
    $conectar = new Conectar();
    $conexion = $conectar->conexion();
    $sql = "SELECT * FROM t_process";
    $resultado = mysqli_query($conexion, $sql);
?>
<div class="card" style="width: 27rem;">
    <div class="col-md-12 text-center">
        <h5 class="card-title mt-2">Information</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Execute</th>
                    <th scope="col">wait</th>
                    <th scope="col">Finish</th>
                </tr>
            </thead>
            <tbody>
                <tr>
<?php
    while($mostrar = mysqli_fetch_array($resultado)){
        if($mostrar['estado_process'] == "activo"){
            if($mostrar['letra_process'] == "a"){
?>
                <td><div class="col-md-12 bg-info">A</div></td>
<?php
            }else if($mostrar['letra_process'] == "b"){
?>
                <td><div class="col-md-12 bg-primary">B</div></td>
<?php
            }else if($mostrar['letra_process'] == "c"){
?>
                <td><div class="col-md-12 bg-warning">C</div></td>
<?php
            }else if($mostrar['letra_process'] == "d"){
?>
                <td><div class="col-md-12 bg-warning">D</div></td>
<?php
            }else if($mostrar['letra_process'] == "e"){
?>
                <td><div class="col-md-12 bg-warning">E</div></td>
<?php
            }
        }
?>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
<?php
    }
?>
            </tbody>
        </table>
    </div>
</div>