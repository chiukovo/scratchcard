<?php
    include('mysql_connect.php');
    $sql = "SELECT image FROM user ORDER BY rand() LIMIT 1";
    $result=$mysqli->query($sql);
    if ($result) {
         if($result->num_rows>0) {
              $row = $result->fetch_array();
              echo $row['image'];
         }
    }
?>
