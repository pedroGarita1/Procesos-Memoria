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
            <th scope="col">Wait</th>
        </tr>
    </thead>
    <tbody>
<?php
    while($mostrar= mysqli_fetch_array($resultado)){
        if ($mostrar['estado_process'] == "detenido"){
?>
        <tr>
            <td><div class="col-md-12 bg-secondary"><?= $mostrar['letra_process']?></div></td>
        </tr>
<?php
        }
    }
?>
    </tbody>
</table>
