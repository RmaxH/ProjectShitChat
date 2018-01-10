<?php

      session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Du musst dich zuerst einloggen";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }


?>

<html>
    
    <head>
        <title>Chat</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>      
    </head>
    <body> 
        
        <div class="ContentCont">
        
            <?php  if (isset($_SESSION['username'])) : ?>
                <p>Willkommen <strong><?php echo $_SESSION['username']; ?></strong>!</p>
                <a href="index.php?logout='1'" style="color: red;"><img src="close.png" alt="Close"></a>

            <?php endif ?>


            <div class="chatContainer">
                <div class="ChatHeader">

                </div>
            </div>
            <div class="chatMessages"></div>
            <div class="chatButton">
                <form action = "#" onsubmit="return false;" id="chatForm">
                    <input type="hidden" id="name" value="<?php echo $user; ?>"/>
                    <input type="text" width="250px" name="text" id="text" value="" placeholder="Schreib eine Nachricht"/>
                    <input type="submit" name="submit" value="Senden" />

                </form> 
            </div>
        
        </div> 
    </body>
    
</html>