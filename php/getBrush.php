<?php
    include('mysql_connect.php');
    $sql = "SELECT brush FROM brush where id = 1";
    $result=$mysqli->query($sql);
    if ($result) {
         if($result->num_rows>0) {
              $row = $result->fetch_array();
              echo $row['brush'];
         }
    }
?>
