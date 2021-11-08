$(document).ready(function() {
    $('#vista_procesos').load("view/paginas_procesos/agregar_procesos.php");
    $('#vista_tabla_activo').load("view/tablas_procesos/tabla_activo.php");
    $('#vista_tabla_espera').load("view/tablas_procesos/tabla_espera.php");
    $('#vista_tabla_finalizado').load("view/tablas_procesos/tabla_finalizado.php");
});