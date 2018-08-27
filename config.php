<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_table = "Commentbd";
    $con = mysqli_connect($db_host, $db_user, $db_password, $db_table) OR die('123');
    mysqli_select_db($con, $db_table) or die ("Error! select-database");             
?>