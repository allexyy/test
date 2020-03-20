<?php
require_once('../config/db.php');
mysqli_query($db,'UPDATE `notelist` SET `text`='.$_POST["update"].',`status`=.'.$_POST["status"].' WHERE id='.$_POST['id']);
header('Location: ../view/adminpage.php');
