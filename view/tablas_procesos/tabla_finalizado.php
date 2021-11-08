<?php
    require_once "../../app/config/conexion.php";
    $conectar = new Conectar();
    $conexion = $conectar->conexion();
    $sql = "SELECT * FROM t_process";
    $resultado = mysqli_query($conexion, $sql);
?>
<table class="table table-bordered text-center">
    <thead>
            <tr>
            <th scope="col">Finish</th>
        </tr>
    </thead>
    <tbody>
<?php
    while($mostrar= mysqli_fetch_array($resultado)){
        if ($mostrar['estado_process'] == "finalizado"){
?>
        <tr>
            <td><div class="col-md-12 bg-danger text-center"><?= $mostrar['letra_process']?></div></td>
        </tr>
<?php
        }
    }
?>
    </tbody>
</table>