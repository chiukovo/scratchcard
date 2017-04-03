<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $db_host="localhost";
    $db_user="kaopaulc_lau";
    $db_psw="Kaobo0988102608!";
    $db_name="kaopaulc_wedding";
    $mysqli=new mysqli($db_host,$db_user,$db_psw,$db_name);
    $mysqli->query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
?>