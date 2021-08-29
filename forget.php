<?php
//connect to database
session_start();
$conn=mysqli_connect('localhost','root','','vatss');
if(isset($_POST['submit'])){
	$email=$_POST['emails'];
	$_SESSION['email']=$_POST['emails'];
	$check_email=mysqli_query($conn,"SELECT * FROM register WHERE emails='".$email."'");
	if(mysqli_num_rows($check_email)==1)
	{
		echo"please check your email for otp";
		
		$r=rand(999,99999);
		echo"$r";
		$sql = "insert into forget (otp,email) VALUES($r,'$email')";
        mysqli_query($conn,$sql);
		  $to=$email;
   $subject= "OTP";
   $message= "OTP: ".$r."\r\n";
   
   $message.="you can use this otp (one-time password) to reset your password";
  
   $headers= "From: rajveeranshu786@gmail.com" . "\r\n" .
  mail($to, $subject, $message, $headers);
		
		
	header('location:otp.php?email='.$email);
	} else
	{
		echo'wrong email';
	}
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>forgot your password</title>

<center><table><th colspan=2>
<form  method="post">
<h3>forget password ?</h3>
<input type="email" name="emails" placeholder="enter a valid email" required>
<input type ="submit" value="submit" name="submit" >
</form>


<tr><td colspan=2>


</table>
</form>
</head>
</html>