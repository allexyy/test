<?php
function is_valid_credit_card($s) {
    // оставить только цифры
    $s = strrev(preg_replace('/[^\d]/','',$s));

    // вычисление контрольной суммы
    $sum = 0;
    for ($i = 0, $j = strlen($s); $i < $j; $i++) {
        // использовать четные цифры как есть
        if (($i % 2) == 0) {
            $val = $s[$i];
        } else {
            // удвоить нечетные цифры и вычесть 9, если они больше 9
            $val = $s[$i] * 2;
            if ($val > 9)  $val -= 9;
        }
        $sum += $val;
    }

    // число корректно, если сумма равна 10
    if (!(($sum % 10) == 0)) {
        echo 'Ошибка при введении данных';
    }
    else{
        header('Location:index.php');
    }
}
$card = $_POST['CardNumber'];
is_valid_credit_card($card);


?>