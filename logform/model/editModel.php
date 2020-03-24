<?php

//Обновление данных пользователя
function edit($db,$id,$name,$surename,$info,$image){
    $sql = 'UPDATE `users` SET `name`="'.$name.'",`surename`="'.$surename.'",`info`="'.$info.'",`image`="'.$image.'" WHERE id = '.$id.'';
    mysqli_query($db,$sql);
}
//Сохранение фото пользователя на сервере
function photo($serverpath,$path){
    copy($serverpath,$path);
}


?>