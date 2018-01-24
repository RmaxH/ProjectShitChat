<?php
    $db = mysqli_connect('localhost', 'root', '', 'registration');
    
    if(isset($_POST['message']) && isset($_POST['username']))
    {
        $message = strip_tags(stripslashes($_POST['message']));
        $username = strip_tags(stripslashes($_POST['username']));
        
        if(!empty($message) && !empty($username))
        {
            $insert = $db->prepare("UPDATE users SET message = '".$message."'");
            $insert->execute();
            
            echo "<li class='cm'><b>".ucwords($username)."</b> - ".$message."</li>";
        }
    }
?>
