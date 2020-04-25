<?php
$sum = $_POST['sum'];
$pay = $_POST['pay'];
$sessionid = session_create_id();

function jsonCreate($sum,$pay,$sessionid){
    $json = ["sum"=>$sum,
    "pay"=>$pay,
    "session"=>$sessionid];


    $file = fopen('pay.json', 'w');


    $test = fwrite($file,json_encode($json));

    if($test){
    echo 'All ok';
    }
    else{
    echo 'Error';
    }
    fclose($file);
}

jsonCreate($sum,$pay,$sessionid);
header('Location:payment.php/form?sessionId='.$sessionid.'');