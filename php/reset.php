<?php
    include('mysql_connect.php');
    $sql = "UPDATE `user` SET `chosen`='0' WHERE id != 0;";
    $result=$mysqli->query($sql);
?>