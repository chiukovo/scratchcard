<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $db_host="localhost";
    $db_user="root";
    $db_psw="";
    $db_name="scratchcard";
    $mysqli=new mysqli($db_host,$db_user,$db_psw,$db_name);
?>