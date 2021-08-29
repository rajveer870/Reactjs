<?php
//get values passed from customer in registration
$email=$_POST['email'];
$pswd=$_POST['pswd'];
$email=mysql_real_escape_string($email);
$pswd=mysql_real_escape_string($pswd);					
//establishing connection with the database
mysql_connect("localhost","root","");
mysql_select_db("vatss");
//query the databasefor user
$result=mysql_query("select * from register where email='$email' and pswd='$pswd'")
		or die("failed to login".mysql_error());
$row=mysql_fetch_array($result);
if($row['email']==$email && $row['pswd']==$pswd)
{
	echo"customer logged in!! welcome".row['email'];
}
else
	{
		"LOGIN DENIED";
	}
	?>