$(document).ready(function() {
    $('#btn-start').click(function() {
        var select_process = $('#select-process').val();
        var page_process = $('#page-process').val();
        if (select_process == "" && page_process == 0) {
            swal("Debes agregar informacion");
            return false;
        } else {

            $.ajax({
                type: "POST",
                data: {
                    "process": select_process,
                    "pagina": page_process
                },
                url: "php/selects_process.php",
                success: (r) => {
                    console.log("hola");
                    console.log(r);
                    r = r.trim();
                    if (r == 1) {
                        swal(":D", "Categoria Agregada con exito", "success");
                    } else {
                        swal("D:", "Fallo al agregar", "Error");
                    }
                }
            });
        }
    });
});