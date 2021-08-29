
<?php
session_start();
$con=mysqli_connect('localhost','root','','vatss');	  
error_reporting(0);

if (isset($_POST['submit'])) 
	



	  {
	   if(empty($_POST['emails'])||empty($_POST['otps']))
	   {
		   
		   
		   
		   header("location:confirm1.php?Empty=please fill all the fields");
		   
	   }
	   
	   
	   else
		   {
			    $query="SELECT * FROM confirm WHERE email='$_POST[emails]'and otps='$_POST[otps]'";
			    $result= mysqli_query($con,$query);
			    if(mysqli_fetch_assoc($result))
			             {
				   
						   
						   
						   
						   
						    //echo 'your account created successfully';
				              header("location:create.php");
			   
			             }
			             else
			            {
				              header("location:confirm1.php?invalid=please enter correct email and otp");
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
					<input type="text" name="emails"></td></tr> 


<tr>
<td>otp</td><td><input type ="text" name="otps" placeholder="enter your otp"></td>
</tr>
<tr>
<td><button name="submit">ENTER</button></td>                                    <td><button name="submit">RESEND OTP</button></td>
</tr>
</table>
</form>
</body>
</html>
			
