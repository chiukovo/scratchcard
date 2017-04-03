<?php
    ini_set('default_charset','utf-8');
    if (isset($_POST) && !empty($_POST['fileName'])) {
        include('mysql_connect.php');
        $sql = "insert into user set name = '".$_POST['name']."', content = '".$_POST['content']."', image = '".$_POST['fileName']."'";
        $result=$mysqli->query($sql);
        echo '<script>alert("感謝您的祝福 ^___^");</script>';
        echo '<script>location.replace("http://www.kaopaul.com/game/upload.php");</script>';

    } else {
        echo 'no data';
    }
?>
