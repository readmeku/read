<?php

    $host="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="test_db";

    $conn = mysqli_connect($host, $db_user, $db_pass, $db_name);
    if(!$conn){
        echo "connection failed";
    }
?>