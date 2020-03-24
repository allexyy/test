<?php
//Проверка совпадают ли введённые данные с необходимыми
function checkInput($db,$login,$password){
    $sql = 'SELECT `id`,`login`, `password` FROM `users` WHERE login = "'.$login.'"';
    if($find = mysqli_query($db,$sql)){
        $array = mysqli_fetch_array($find);
        if(password_verify($password,$array['password'])){
            $_SESSION['id'] = $array['id'];
        }
    }
    else{
        echo 'Error';
    }
}