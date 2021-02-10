<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "system_movies";

    $dbcon = mysqli_connect($servername, $username, $password, $dbname);

    if(!$dbcon) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        // echo "เชื่อต่อสำเร็จ";
    }

?>