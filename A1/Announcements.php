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
<?php
    $sql = "SELECT * FROM Announcements";
    $results = mysqli_query($con, $sql);
    if(!$results){
        echo " cant load";
    }
    while($row = mysqli_fetch_assoc($results)){
        $topic_id = $row['topic_id'];
        $post_content = $row['post_content'];
        $email = $row['email'];
        $created = $row['created'];
        $username = $row['username'];

        echo "<div class='w3-blue-gray w3-display-middle w3=cell  w3-card-4 w3-border w3-round-large ' style='width: 40%'>
        <p>
        <h1 class='w3-blue-gray w3-center w3-text-black'>$topic_id</h1>
        </p>
        <p>
        <h3 class='w3-blue-gray w3-center w3-text-black'>$post_content</h3>
        </p>
        <p>
        <h3 class='w3-blue-gray w3-center w3-text-black'>$email</h3>
        </p>
        <p>
        <h3 class='w3-blue-gray w3-center w3-text-black'>$created</h3>
        </p>
        <p>
        <h3 class='w3-blue-gray w3-center w3-text-black'>$username</h3>
        </p>
        </div>";
    }
?>

        <?php include 'footer.php';?>
        </body>
</html>