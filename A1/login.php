<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    include("header.php");
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `registration` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die("failed");
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
 //
  <div class="w3-blue-gray w3-display-middle w3=cell  w3-card-4 w3-border w3-round-large " style="width: 40%">
            <p>
                <h1 class="w3-blue-gray w3-center w3-text-black">Log in</h1>
            </p>
  
            <form class="w3-panel" method="post" name="login">
                <p>
                    <input type="text" class="w3-input" name="username" placeholder="Username" autofocus="true" > <!--  class="login-input" -->
                </p>

                <p>
                    <input type="password" class="w3-input" name="password" placeholder="Password" >  <!--  class="login-input" -->
                </p>

                <p>
                    <button class="w3-input w3-button w3-black w3-round w3-text-white" name="submit" type="submit" value="Login"> Enter </button>
                </p>
                <p class="link w3-text-black" ><a href="registration.php">New Registration</a></p>
            </form>
        </div>








<?php
    }
?>
<?php include 'footer.php';?>
</body>
</html>