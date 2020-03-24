<?php

//ПОлучение всей инофрмации о пользователе
function getInfo($db,$id){
    $sql = 'SELECT * FROM `users` WHERE id = '.$id.'';
    $find = mysqli_query($db,$sql);
    return ($array = mysqli_fetch_array($find));
}




?>