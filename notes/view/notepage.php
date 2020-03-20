<?php
require('../config/db.php');
$note = mysqli_query($db,'SELECT * FROM `notelist` WHERE id='.$_GET["id"]);
$res = mysqli_fetch_array($note);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Заметка под номером <?=$res['id']?></title>
</head>
<body>
<?='Id='.$res['id']?><br>
<?='Username='.$res['username']?><br>
<?='Email  ='.$res['email']?><br>

<form action="../model/updateModel.php" method="post">
<label for="contactChoice1">Ready</label>
<input type="radio" name="status" value='1' id="contactChoice1">
<label for="contactChoice1">Not Ready</label>
<input type="radio" name="status" value='0' id="contactChoice2" checked><br>
<textarea name="update" id="" cols="30" rows="10"><?= $res['text']?></textarea>
<button type="submit">Submit</button>
</form>
</body>
</html>



