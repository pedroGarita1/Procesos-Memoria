$(document).ready(function() {
    $('#btn-start').click(function() {
        let select_page = $("#page-process").val();
        let select_process = $("#select-process").val();
        switch (select_process) {
            case 'a':
                for (let i = 0; i <= select_page; i++) {
                    $('#secnemto').html('<div class="col-md-12 text-center text-white bg-primary">A</div>');
                }
                break;
            case 'b':
                for (let i = 0; i <= select_page; i++) {
                    $('#secnemto').html('<div class="col-md-12 text-center text-white bg-success">B</div>');
                }
                break;
            case 'c':
                for (let i = 0; i <= select_page; i++) {
                    $('#secnemto').html('<div class="col-md-12 text-center text-white bg-info">C</div>');
                }
                break;
            case 'd':
                for (let i = 0; i <= select_page; i++) {
                    $('#secnemto').html('<div class="col-md-12 text-center text-white bg-warning">D</div>');
                }
                break;
            case 'e':
                for (let i = 0; i <= select_page; i++) {
                    $('#secnemto').html('<div class="col-md-12 text-center text-white bg-danger">E</div>');
                }
                break;
        }
    });
});