<?php 
require_once('../model/notelistModel.php');
require('../config/db.php');
    if(isset($_SESSION['login']) && isset($_SESSION['pass'])){
       header('Location:adminpage.php');
    }
    else{
        header('Location:index.php');
    }



?>