<?php
require_once('config/db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Notelist</title>
</head>
<body>
    <header>
        <li><a href="view/loginpage.php" class = "btn btn-lg btn-primary btn-block text-uppercase">LOG IN</a></li>
        <li><a href="view/addpage.php" class = "btn btn-lg btn-primary btn-block text-uppercase">Add Note</a></li>
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
            <?php
                if(isset($_GET['pageno'])){
                    $pageno = $_GET['pageno'];
                }
                else{
                    $pageno = 1;
                }
                $no_of_records_per_page = 3;
                $offset = ($pageno-1) * $no_of_records_per_page;
            
                $total_pages_sql = "SELECT COUNT(*) FROM `notelist`";
                $result = mysqli_query($db,$total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];
                $total_pages = ceil($total_rows / $no_of_records_per_page);
            
                $sql = "SELECT * FROM `notelist` LIMIT $offset, $no_of_records_per_page"; 
                $res_data = mysqli_query($db,$sql);
                $i =1;
                    while($row = mysqli_fetch_array($res_data)){
                        echo('<tr>
                        <th scope="row">'.$i++.'</th>
                        <td>'.$row['username'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['text'].'</a></td>
                        <td>'.$row['status'].'</td>
                      </tr>'
                    );
                    }
                ?>
            </div>
            <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
    <script src="view/script.js"></script>

</body>
</html>