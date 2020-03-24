<?php
require_once('../config/db.php');
require_once('../model/userModel.php');

$id = $_SESSION['id'];

$user = getInfo($db,$id);

$login = $user['login'];
$name = $user['name'];
$email = $user['email'];
$surename = $user['surename'];
$about = $user['info'];
$image = $user['image'];
