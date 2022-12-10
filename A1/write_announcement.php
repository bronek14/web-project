<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    include('dash_header.php');
    require('db.php');
    // When form submitted, insert values into the database.
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        // // removes backslashes
        // $username = stripslashes($_REQUEST['topic_id']);
        // //escapes special characters in a string
        // $username = mysqli_real_escape_string($con, $username);
        // $email    = stripslashes($_REQUEST['email']);
        // $email    = mysqli_real_escape_string($con, $email);
        // $password = stripslashes($_REQUEST['password']);
        // $password = mysqli_real_escape_string($con, $password);
        // $create_datetime = date("Y-m-d H:i:s");

        $topic_id = $_REQUEST['topic_id'];
        $topic_id =mysqli_real_escape_string($con, $topic_id);

        $post_content = $_REQUEST['post_content'];
        $post_content =mysqli_real_escape_string($con, $post_content);

        $username = $_SESSION['username'] ;
        $username =mysqli_real_escape_string($con, $username);

        $email = $_REQUEST['email'];
        $email =mysqli_real_escape_string($con, $email);

        $create_datetime = date("Y-m-d H:i:s");
        


        $query    = "INSERT into `announcements` (topic_id, post_content, username, email, create_datetime)
                     VALUES ('$topic_id', '$post_content', '$username', '$email','$create_datetime')";
        $result   = mysqli_query($con, $query);

        if ($result) {
            echo "<div class='form'>
                  <h3>You have posted successfully.</h3><br/>
                  <p class='link'>Click here to <a href='Announcements.php'>return</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }


    } else {
?>
    <!-- <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form> -->

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="w3-blue-gray w3-display-middle w3=cell  w3-card-4 w3-border w3-round-large " style="width: 40%">
            <p>
                <h1 class="w3-blue-gray w3-center w3-text-black">Create Announcement</h1>
            </p>
  
            <form class="w3-panel" method="POST" action="">
                <p>
                    <input type="text" class="w3-input" name="topic_id" placeholder="Title" required > <!--  class="login-input" -->
                </p>
                <p>
                    <input type="text" class="w3-input" name="email" placeholder="Your Email" >  <!--  class="login-input" -->
                </p>
                <p>
                    <input type="text" class="w3-input" name="post_content" placeholder="Your Post" >  <!--  class="login-input" -->
                </p>
                <p>
                    <button class="w3-input w3-button w3-black w3-round w3-text-white" name="submit" type="submit" value="POST"> Post </button>
                </p>
            </form>
        </div>
<?php
    }
?>
<?php include 'footer.php';?>
</body>
</html>