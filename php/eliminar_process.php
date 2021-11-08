<?php
    require_once "../class/Eliminar_select_process.php";
    $eliminar_procesos = new Eliminar_procesos();
    $datos = array(
        "procesos" => $_POST['procesos']
    );
    $estados = array(
        "finish" => "finalizado",
        "activo" => "activo",
        "detenido" => "detenido"
    );
    echo $eliminar_procesos->eliminar_proceso($datos,$estados);
?>