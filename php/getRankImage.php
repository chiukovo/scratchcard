<?php
    include('mysql_connect.php');
    $sql = "SELECT id,image FROM user where `chosen`='0' ORDER BY rand() LIMIT 1";
    $result=$mysqli->query($sql);

    if ($result) {
         if($result->num_rows>0) {
            $row = $result->fetch_array();
            echo $row['image'];
            $updateSql = "UPDATE `user` SET `chosen`='1' WHERE `id`= '".$row['id']."';";
            $update = $mysqli->query($updateSql);
         }
    }
?>
