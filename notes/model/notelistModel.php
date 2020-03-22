<?php
require_once '../config/db.php';

$login =$_POST['login'];
$pass= $_POST['pass'];

$users=mysqli_query($db,"SELECT * FROM users");

while($data = mysqli_fetch_array($users)){
    if($login == $data['name'] && $pass == $data['password']){
        session_start();
        $_SESSION['login']=$login;
        $_SESSION['pass']=$pass;
        header('Location:../view/adminpage.php');
    }
    else{
        header('Location:../view/loginpage.php');   
    }
}

?>