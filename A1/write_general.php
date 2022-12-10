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
<?php
if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");

        $topic_id ="";
        $content ="" ;
        $userid ="";
        $email ="";


        $query    = "INSERT into `announcements` ( topic_id, post_content, email, user_id, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
}
        
?>

<div class="w3-blue-gray w3-display-middle w3=cell  w3-card-4 w3-border w3-round-large " style="width: 40%">
            <p>
                <h1 class="w3-blue-gray w3-center w3-text-black">Create Announcement</h1>
            </p>
  
            <form class="w3-panel" method="post" action="">
                <p>
                    <input type="text" class="w3-input" name="username" placeholder="Username" required > <!--  class="login-input" -->
                </p>
                
                    <button class="w3-input w3-button w3-black w3-round w3-text-white" name="submit" type="submit" value="Login"> Enter </button>
                </p>
               
            </form>
        </div>

        <?php include 'footer.php';?>
        </body>
</html>