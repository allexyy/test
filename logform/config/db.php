<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'logform';

$db = mysqli_connect($host,$user,$password,$dbname);
if (!$db) {
    echo "Ошибка: Невозможно установить соединение с MySQL<br>";
    echo "<br>Код ошибки errno: " . mysqli_connect_errno();
    echo "<br>Текст ошибки error: " . mysqli_connect_error();
    exit;
}