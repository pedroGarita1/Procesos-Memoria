$(document).ready(function() {
    $('#btn_start').click(function() {
        let select_process = $('#select_process').val();
        let page_process = $('#page_process').val();
        if (select_process == 1 && page_process == 0) {
            swal("ERROR", "Debes agregar un proceso y una pagina", "error"); //suma de variables para mostrar en el front 
            return false;
        } else {
            $.ajax({
                type: "POST",
                data: {
                    //              A
                    "process": select_process,
                    //              5
                    "pagina": page_process
                },
                url: "php/selects_process.php",
                success: (r) => {
                    r = r.trim();
                    if (r == 1) {
                        $('#vista_procesos').load("view/paginas_procesos/agregar_procesos.php");
                        $('#vista_tabla_activo').load("view/tablas_procesos/tabla_activo.php");
                        $('#vista_tabla_espera').load("view/tablas_procesos/tabla_espera.php");
                        swal(":D", "Proceso agregado con exito", "success");
                    } else {
                        swal("D:", "Fallo al agregar el proceso", "error");
                    }
                }
            });
        }
    });
});