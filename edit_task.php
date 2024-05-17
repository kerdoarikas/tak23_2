<?php
require 'config.php';

session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}

$username = $_SESSION['user']['username'];
$id = $_GET['ids'];
$data = getTaskById($id);
print_r($data);

include 'elements/head.php';
?>

<div class="container bg-white rounded p-3 shadow mt-3">
    <div class="d-flex justify-content-between align-items-center">
    <h5 class="m-0">Tere tulemast, kasutajanimi</h5>
    <a href="db/logout.php" class="btn btn-dark"></a>
    </div>
</div>

<div class="container bg-white rounded p-3 shadow mt-3">
    <h5>Muuda kirjet</h5>
    <hr>
    <form action="db/edit_task.php" method="post">
        <input type="hidden" name="user_id" value="<?= $_SESSION['user']['id'] ?>">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <div class="form-group">
            <textarea class="form-control" name="text" id="" cols="30" rows="1" placeholder="Lisa kirjeldus siia!"><?php echo $data['text'] ?></textarea>
        </div>
        <div class="form-group mt-2">
            <label for="task_status">Staatus</label>
            <select class="form-select" name="status" id="task_status">
                <option value="ootel" <?php if($data['status'] == 'ootel'){echo 'selected';} ?>>ootel</option>
                <option value="tegemisel" <?php if($data['status'] == 'tegemisel'){echo 'selected';} ?>>tegemisel</option>
                <option value="valmis" <?php if($data['status'] == 'valmis'){echo 'selected';} ?>>valmis</option>
            </select>
        </div>
        <button class="btn btn-dark mt-3" type="submit"><i class="fa-solid fa-save me-2"></i>Salvesta</button>
    </form>
</div>

<?php include 'elements/foot.php'; ?>