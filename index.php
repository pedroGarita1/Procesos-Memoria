<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "app/config/dependencias.php"?>
    <title>Simulacion de memoria</title>
</head>

<body class="body-color">
    <?php require_once "view/title.php";?>
    <div class="container">
        <div class="row">
            <?php require_once "view/inicio/vista_start_process.php";?>
            <?php require_once "view/inicio/vista_page_frame.php";?>
            <?php require_once "view/inicio/vista_informacion_frame.php";?>
        </div>
    </div>
    <?php require_once "view/creadores.php";?>
</body>
</html>