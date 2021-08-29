<?php
session_start();
//connect to database
$email=$_SESSION['email'];
$conn=mysqli_connect('localhost','root','','vatss');
if(isset($_POST['submit'])){
	$newpass=$_POST['newpass'];
	$query="UPDATE register SET pswd='$_POST[newpass]' WHERE emails='$_SESSION[email]'";
	$changepass=mysqli_query($conn,$query);
if($changepass){
	//echo'your password is changed!';
	header('location:set.php');
}else
{
	echo'error';
}
}
?>





<html>
<head>
<title>reset password</title>
</head>
<body>
<form  method="post">
<table>
<tr>
<td><input type ="text" name="newpass" placeholder="enter your new pass"></td>
</tr>
<tr>
<td><button name="submit">change</button></td>
</tr>
</table>
</form>
</body>
</html>
