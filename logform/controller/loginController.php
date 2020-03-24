<?php
session_start();
require_once('../config/db.php');
require_once('../model/loginModel.php');

$login = $_POST['login'];
$password = $_POST['password'];

checkInput($db,$login,$password);

header('Location:../index.php');