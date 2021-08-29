<?php
 session_start();
 
 
 
      if(isset($_SESSION['email']))
        {
             echo 'wellcome'.$_SESSION['email'].'<br/>';
			 echo '<a href="logout.php">LOGOUT</a>';
 
 
        }
?>
