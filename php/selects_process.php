<?php
    require_once "../class/Insert_select_process.php";
    $process = new procesos();
    $datos= array(
        "procesos" => $_POST['process'],
        "paginas" => $_POST['pagina'],
    );
    $estados = array(
        "activo" => "activo",
        "detenido" => "detenido"
    );
    echo $process->agregar_proceso($datos,$estados);
?>