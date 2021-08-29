
<?php
//session_start();

$con=mysqli_connect('localhost','root','','vatss');
if(isset($_POST['submit']))
{
$n=$_POST['name'];
$dn=$_POST['phn'];
$en=$_POST['email'];
$pn=$_POST['msg'];


//$x=$GLOBALS['n'];
//$y=$GLOBALS['dn'];
//$z=$GLOBALS['en'];
//$w=$GLOBALS['pn'];
//echo"$x";
	  $to="rajveeranshu786@gmail.com";
   $subject= "Query from vats";
   $message= "CONTACT no-:".$dn."\r\n";
   $message.=$pn;
  // echo"$n";
   $message.=$pn;
  
   $headers= "From: ".$en."\r\n" ;
  mail($to, $subject, $message, $headers);
		header("location:contact.php");
}

?>





