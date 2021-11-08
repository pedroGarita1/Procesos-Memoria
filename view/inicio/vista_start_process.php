<div class="col-md-4">
    <div class="card" style="width: 20rem;">
        <div class="card-body">
            <h5 class="card-title">Start process</h5>
            <form action="">
                <label for="">process</label>
                <select name="select_process" id="select_process" class="form-control">
                    <option value="1">Select process</option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                    <option value="e">E</option>
                </select>
                <br>
                <label for=""></label>
                <select name="" id="page_process" class="form-control">
                    <option value="0">Select page</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>
                <div class="col-md-12 text-center">
                    <span class="btn btn-primary" id="btn_start">Start Process</span>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <br>
    <?php require_once "vista_end_process.php"?>
</div>