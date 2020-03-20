<?php
require_once('../config/db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Notelist</title>
</head>
<body>
    <header>
        <li><a href="addpage.php" class = "btn btn-lg btn-primary btn-block text-uppercase">Add new Note</a></li>
    </header>
    <div calass = "table">
            <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Note</th>
                <th scope="col">Status</th>
            <tr>
            </thead>
            <tbody>
                <?=adminselectall($db)?>
            </div>

</body>
</html>