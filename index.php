<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "app/config/dependencias.php"?>
    <title>Document</title>
</head>

<body class="body-color">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center text-size bg-gray">
                <h1 class="text-white mt-2">SIMULACION DE SECMENTACION DE MEMORIA</h1>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Start process</h5>
                        <form action="">
                            <label for="">process</label>
                            <select name="" id="select-process" class="form-control">
                                <option value="">Select process</option>
                                <option value="a">A</option>
                                <option value="b">B</option>
                                <option value="c">C</option>
                                <option value="d">D</option>
                                <option value="e">E</option>
                            </select>
                            <br>
                            <label for=""></label>
                            <select name="" id="page-process" class="form-control">
                                <option value="0">Select page</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <br>
                            <div class="col-md-12 text-center">
                                <span class="btn btn-primary" id="btn-start">Start Process</span>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <br>
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Start process</h5>
                        <form action="">
                            <label for="">process</label>
                            <select name="" id="" class="form-control">
                                <option value="">Select process</option>
                                <option value="a">A</option>
                                <option value="b">B</option>
                                <option value="c">C</option>
                                <option value="d">D</option>
                                <option value="e">E</option>
                            </select>
                            <br>
                            <div class="col-md-12 text-center">
                                <span class="btn btn-danger">End Process</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <h5 class="card-title mt-2">Page Frame</h5>
                <div class="card-body">
                    <div id="secnemto">

                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card" style="width: 27rem;">
                    <div class="col-md-12 text-center">
                        <h5 class="card-title mt-2">Information</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Execute</th>
                                    <th scope="col">wait</th>
                                    <th scope="col">Finish</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

</body>

</html>