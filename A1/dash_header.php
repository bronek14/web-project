<!DOCTYPE html>
<head>
    <title>Student Community</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/forms-awesome/4.7.0/css/font-awesome.min.css">
 </head>

    <body style="background-color: DimGray">
     <header>
            <nav class="w3-bar w3-black">                   
                    <ul>
                    <h1>Student Community</h1>
                    <a href="/home.php"  class="w3-bar-item w3-button ">Home</a>
                    <a href="/about.php" class="w3-bar-item w3-button ">About</a>
                    <a href="/Announcements.php" class="w3-bar-item w3-button ">Announcements</a>
                    <a href="/General.php" class="w3-bar-item w3-button ">General Discussions</a>
                    <!-- <a href="/programming.php" class="w3-bar-item w3-button ">Programming</a> -->
                    <!-- <a href="/login.php" class="w3-bar-item w3-button ">Login</a> -->
                    </ul>   
                    <div>
                        <form class="w3-bar-item w3-button w3-right" action="Log-in.php" method="POST">
                            
                        </form>
                    <!-- <form class="w3-bar-item w3-button w3-right" action="logout.php" method="POST">
                            <button class="w3-bar-item w3-button w3-right" type="submit" name="logout.php">Log out </button> -->
                    <!-- </form> -->
                    <!-- <form class="w3-bar-item w3-button w3-right" action="registration.php" method="POST">
                            <a class="w3-bar-item w3-button w3-right" href="registration.php">Sign Up</a>
                    </form> -->
                    <form class="w3-bar-item w3-button w3-right" action="login.php" method="POST">
                            <a class="w3-bar-item w3-button w3-right" href="logout.php">Log Out</a>
                    </form>
                        
                    
                        
                    </div>                
            </nav>
        </header>