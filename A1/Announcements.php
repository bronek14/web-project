<?php
//include auth_session.php file on all user panel pages
require('db.php');
include("auth_session.php");
include("dash_header.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>



</p>              
   <!-- <button class="w3-input w3-button w3-black w3-round w3-text-white"> Create a Post</button> -->
 <a href="/write_announcement.php" class="w3-input w3-button w3-black w3-round w3-text-white"> Create a Post</a>
</p>
        <?php include 'footer.php';?>
        </body>
</html>