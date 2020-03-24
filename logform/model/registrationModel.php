<?php
//Добавление нового пользователя
function userAdd($db,$email,$login,$password){
    $sql ='INSERT INTO `users`(`login`, `password`, `email`) VALUES ("'.$login.'","'.$password.'","'.$email.'")';
    mysqli_query($db,$sql);
}