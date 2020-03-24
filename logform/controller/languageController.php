<?php
if(isset($_POST['lang'])){
    $lang = $_POST['lang'];
}
else{
    $lang = 'ru';
}

$_SESSION['lang'] = $lang;

function lang($lang,$rutext,$engtext){
    if($lang=='ru'){
        return $rutext;
    }
    else{
        return $engtext;
    }
}