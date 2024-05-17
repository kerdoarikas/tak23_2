<?php

require '../config.php';

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if (registerUser($username, $password, $password2)) {
    header("Location: ../login.php");
    exit;
} else {
    header("Location: ../register.php?action=password_error#error");
}
