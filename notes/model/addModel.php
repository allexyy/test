<?php
require_once('../config/db.php');

mysqli_query($db,'INSERT INTO `notelist`(`username`, `email`, `text`,`status`) VALUES ("'.htmlspecialchars($_POST['username']).'",
"'.htmlspecialchars($_POST['email']).'","'.htmlspecialchars($_POST['text']).'",0)');
if(isset($_SESSION)){
header('Location:../view/adminpage.php');}
else{
    header('Location:../index.php');
}
?>