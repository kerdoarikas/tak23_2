<?php include 'elements/head.php'; ?>
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-row-reverse align-items-center justify-content-start">
                <img src="static/img/logo.png" alt="logo" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="row">
    <form action="db/register.php" method="post">
        <div class="col-12">
            <div class="w-100 d-flex align-items-center justify-content-center">
                <div class="bg-white rounded shadow p-5 w-50">
                    <h3>Registreeru</h3>
                    <div class="form-group">
                        <label for="username">Kasutajanimi</label>
                        <input name="username" type="text" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Parool</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password2">Parool uuesti</label>
                        <input name="password2" type="password" class="form-control" id="password2">
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="index.php" class="btn btn-dark w-50 me-2">Tagasi</a>
                        <button type="submit" class="btn btn-dark w-50">Registreeru</button>
                    </div>
                    <?php if ($_REQUEST['action'] == "password_error"): ?>
                    <div class="w-100 d-flex mt-3" id="error">
                        <span class="text-danger fw-bold">Paroolid ei ühti!</span>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </form>
    </div>
<?php include 'elements/foot.php'; ?>