<?php
require_once('../config/db.php');
require_once('../model/registrationModel.php');

$email = $_POST['email'];
$login = $_POST['login'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);

userAdd($db,$email,$login,$password);

mysqli_close($db);

header('Location:../index.php');