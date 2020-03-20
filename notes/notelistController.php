<?php 
require_once('notelistModel.php');
require('db.php');
    if($_SESSION['login'] && $_SESSION['pass']){
       header('Location:adminpage.php');
    }
    else{
        header('Location:index.php');
    }



?>