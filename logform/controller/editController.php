<?php
require_once('../model/editModel.php');
require_once('../config/db.php');
session_start();

$id = $_SESSION['id'];
$name=htmlspecialchars($_POST['name']);
$surename=htmlspecialchars($_POST['surename']);
$info=htmlspecialchars($_POST['about']);
//проверка на то обновляет ли пользователь фото
if(isset($_FILES)){
    $imgname = $_FILES['photo']['name'];
    $serverpath = $_FILES['photo']['tmp_name'];
    $path = '../pic/'.$imgname; 
    photo($serverpath,$path);
}
else{
    $imgname = '';
}

edit($db,$id,$name,$surename,$info,$imgname);


print_r($_FILES);


?>