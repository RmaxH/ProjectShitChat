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
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300
              600,700,800" rel="stylesheet" type="text/css">
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>    
        <script src="Chat.js"></script> 
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body id="ChatBody">    
        
            <div class="chatContainer">
                <div class="ChatHeader">
                        <?php  if (isset($_SESSION['username'])) : ?>
                <h3>Willkommen <strong><?php echo $_SESSION['username']; ?></strong>!</h3>
                        <a href="index.php?logout='1'">
                                                     <button id="logOut">Ausloggen</button><!--<img src="close.png" alt="Close">--></a>

                        <?php endif ?>
                </div>
            </div>
            <div class="chatMessages"></div>
            <div class="chatBottom">
                <form action = "#" onsubmit="return false;" id="chatForm">
                    <input type="text" id="username" value="<?php echo $_SESSION['username']; ?>"/>
                    <input type="text"  name="text" id="message" value="" placeholder="Schreib eine Nachricht"/>
                    <input type="submit" name="sub_chat" value="Senden" />

                </form> 
            </div>
         
    </body>
    
</html>