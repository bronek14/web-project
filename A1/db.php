<?php
$dbhost = "remotemysql.com";
$dbuser = "EFF1Vgfj4C";
$dbpass = "bmQs6U20Wb";
$dbname = "EFF1Vgfj4C";
$dbport = "3306";

    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport);
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>