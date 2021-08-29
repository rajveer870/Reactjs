<?php
session_start();
require_once('connection.php');	  
error_reporting(0);
if (isset($_POST['submit'])) 
	



	  {
	   if(empty($_POST['email'])||empty($_POST['otp']))
	   {
		   
		   
		   
		   header("location:otp.php?Empty=please fill all the fields");
		   
	   }
	   
	   
	   else
		   {
			   
			   $query="SELECT * FROM forget WHERE email='$_POST[email]'and otp='$_POST[otp]'";
			   $result= mysqli_query($conn,$query);
			   if(mysqli_fetch_assoc($result))
			   {
				   
				   //echo 'you have successfully logged in';
				   header("location:reset.php");
			   
			   }
			   else
			   {
				   header("location:otp.php?invalid=please enter correct email and otp");
		       }
	       }
	  }




  
  ?>
<html>
<head>
<title>enter otp</title>
</head>
<body>
<form method="post">
<table>
<tr><td>Email Address</td><td>
					<input type="text" name="email"></td></tr> 


<tr>
<td>otp</td><td><input type ="password" name="otp" placeholder="enter your otp"></td>
</tr>
<tr>
<td><button name="submit">ENTER</button></td>
</tr>
</table>
</form>
</body>
</html>
