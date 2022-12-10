<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    include('header.php');
    require('db.php');
    // When form submitted, insert values into the database.
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
        $query    = "INSERT into `registration` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
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
                <h1 class="w3-blue-gray w3-center w3-text-black">Registration</h1>
            </p>
  
            <form class="w3-panel" method="post" action="">
                <p>
                    <input type="text" class="w3-input" name="username" placeholder="Username" required > <!--  class="login-input" -->
                </p>
                <p>
                    <input type="text" class="w3-input" name="email" placeholder="Email Adress" >  <!--  class="login-input" -->
                </p>

                <p>
                    <input type="password" class="w3-input" name="password" placeholder="Password" >  <!--  class="login-input" -->
                </p>

                <p>
                    <button class="w3-input w3-button w3-black w3-round w3-text-white" name="submit" type="submit" value="Login"> Enter </button>
                </p>
                <p class="link w3-text-black" ><a href="login.php">Click to Login</a></p>
            </form>
        </div>
<?php
    }
?>
<?php include 'footer.php';?>
</body>
</html>