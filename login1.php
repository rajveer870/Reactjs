
<?php
session_start();

 
require_once('connection.php');	  
	  
	  
	  if(isset($_POST['login_btn']))
	  {
	   if(empty($_POST['email'])||empty($_POST['pswd']))
	   {
		   
		   
		   
		   header("location:account.php?empty=please fill all the fields");
		   
	   }
	   
	   
	   else
		   {
			   
			   $query="SELECT * FROM register WHERE emails='$_POST[email]'and pswd='$_POST[pswd]'";
			   $result= mysqli_query($conn,$query);
			   if(mysqli_fetch_assoc($result))
			   {
				   
				   echo 'you have successfully logged in';
				   header("location:index.php");
			   
			   }
			   else
			   {
				   header("location:account.php?invalid=please enter correct email and password");
		       }
	       }
	  }
	  else
	 {
	 // echo'not working now guys';
	  }
	  //session_start();
	  $_SESSION['email']=$_POST['email'];
	  
?>

