<?php
require_once('../config/db.php');

mysqli_query($db,'INSERT INTO `notelist`(`username`, `email`, `text`,`status`) VALUES ('.$_POST['username'].',
'.$_POST['email'].','.$_POST['text'].'0)');
header('Location:../view/adminpage.php');
?>