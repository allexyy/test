<?php
require_once('db.php');

function asdminselectall($db){
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
            <td> <a href=notepage.php?&id='.$row['id'].'>'.$row['text'].'</a></td>
            <td>'.$row['status'].'</td>
          </tr>'
        );
        }
    }

