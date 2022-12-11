
        
        
  
    <?php
        require('db.php');
        include("auth_session.php");
        include("dash_header.php");
    ?>
     <?php 
        if ($_POST && !empty($_POST['content']) && !empty($_POST['email']) && !empty($_POST['topic_id'])){
        $topic_id = $_POST['topic_id'];//topic_id
        $post_content = $_POST['content'];//content
        $email = $_POST['email'];//email
        $posted_on = date("Y-m-d H:i:s"); //date
        //$create_datetime = date("Y-m-d H:i:s");
        $username = $_SESSION['username']; //username from session
        
         $sql = "INSERT into Announcements (topic_id, post_content,username, email, created ) 
                     VALUES ('$topic_id', '$post_content','$username','$email', '$posted_on')";

        $results = mysqli_query($con, $sql);

        if(!$results){
            echo " cant load";
        }
        }
     ?>

            <!DOCTYPE html>
            <html>

            <head>
                <meta charset="utf-8" />
                <title>Post</title>
                <link rel="stylesheet" href="style.css" />
            </head>
            <body>

        <div class="w3-blue-gray w3-display-middle w3=cell  w3-card-4 w3-border w3-round-large " style="width: 40%">
            <p>
            <h1 class="w3-blue-gray w3-center w3-text-black">Create Announcement</h1>
            </p>

            <form class="w3-panel" method="POST">
            <input type="text" class="w3-input" name="topic_id" placeholder="Title" required> 
            <br>
            <input type="text" class="w3-input" name="email" placeholder="email" required> 
            <br>
            <input type="text" class="w3-input" name="content" placeholder="Content" required>
            <br>
            <button class="w3-input w3-button w3-black w3-round w3-text-white" name="submit" type="submit" Value="post" > Post </button> 
               
            </form>
        </div>

    <?php include 'footer.php'; ?>
</body>

</html>