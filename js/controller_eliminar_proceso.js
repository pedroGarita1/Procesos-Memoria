$(document).ready(function() {
    $('#btn_end').click(function() {
        let select_process_end = $('#select_process_end').val();
        if (select_process_end == 1) {
            swal("ERROR", "Necesitas agregar un procesos para eliminarlo", "error");

        } else {

            $.ajax({
                type: "POST",
                data: "procesos=" + select_process_end,
                url: "php/eliminar_process.php",
                success: (r) => {
                    console.log(r);
                    r.trim();
                    if (r == 1) {
                        $('#vista_tabla_finalizado').load("view/tablas_procesos/tabla_finalizado.php");
                        $('#vista_procesos').load("view/paginas_procesos/agregar_procesos.php");
                        $('#vista_tabla_activo').load("view/tablas_procesos/tabla_activo.php");
                        $('#vista_tabla_espera').load("view/tablas_procesos/tabla_espera.php");
                        swal(":D", "Se ha eliminado el proceso con exito", "success");
                    } else {
                        swal("D:", "No se pudo eliminar el proceso con exito", "error");
                    }
                }
            })
        }
    });
});