<?php
require_once('../config/db.php');
$sql= mysqli_query($db,'UPDATE `notelist` SET `text`="'.htmlspecialchars($_POST['update']).'",`status`='.$_POST['status'].' WHERE id='.$_POST['id']);
header('Location: ../view/adminpage.php');
