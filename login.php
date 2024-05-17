<?php include 'elements/head.php'; ?>
    <div class="row">
    <form action="db/login.php" method="post">
        <div class="col-12">
            <div class="w-100 d-flex align-items-center justify-content-center">
                <div class=" rounded shadow p-5 w-50">
                    <h3>Sisene</h3>
                    <div class="form-group">
                        <label for="username">Kasutajanimi</label>
                        <input name="username" type="password" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Parool</label>
                        <input name="password" type="text" class="form-control" id="username">
                    </div>
                    <button type="submit" class="btn btn-outline-light mt-3 w-100">
                    <i class="fa-solid fa-right-to-bracket"></i> Sisene</button>
                </div>
            </div>
        </div>
    </form>
    </div>
<?php include 'elements/foot.php'; ?>