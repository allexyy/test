<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'notes';

$db=mysqli_connect($host,$user,$password,$dbname);
if (!$db) {
    echo "Ошибка: Невозможно установить соединение с MySQL<br>";
    echo "<br>Код ошибки errno: " . mysqli_connect_errno();
    echo "<br>Текст ошибки error: " . mysqli_connect_error();
    exit;
}
function selectall($db) {
   $query = mysqli_query($db, 'SELECT * FROM `notelist`');
   $i = 1;
   while($result = mysqli_fetch_array($query)){
       echo('<tr>
       <th scope="row">'.$i++.'</th>
       <td>'.$result['username'].'</td>
       <td>'.$result['email'].'</td>
       <td>' .$result['text'].'</td>
       <td>'.$result['status'].'</td>
     </tr>');
   
   }
}
function adminselectall($db) {
  $query = mysqli_query($db, 'SELECT * FROM `notelist`');
  $i = 1;
  while($result = mysqli_fetch_array($query)){
      echo('<tr>
      <th scope="row">'.$i++.'</th>
      <td>'.$result['username'].'</td>
      <td>'.$result['email'].'</td>
      <td> <a href=notepage.php?&id='.$result['id'].'>'.$result['text'].'</a></td>
      <td>'.$result['status'].'</td>
    </tr>');
  
  }
}


?>