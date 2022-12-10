<?php
//include auth_session.php file on all user panel pages
require('db.php');
include("auth_session.php");
include("dash_header.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
    <h2>Hey, <?php echo $_SESSION['username']; ?>!</h2>
        <p>You are now user dashboard page.</p>
       
    </div>
</body>
</html>
