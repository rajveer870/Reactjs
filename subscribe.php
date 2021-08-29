<html>
<head><title>Thanks you for subscribing</title></head>
<body>

<?php
require_once('connection.php');	  
error_reporting(0);
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
$sql = "insert into users (name,email) VALUES('$name','$email')";
mysqli_query($conn,$sql);
    $to=$email;
   $subject= "New Application";
   $message= "Name: ".$name."\r\n";
   
   $message.="thank you for subscribing";
  
   $headers= "From: rajveeranshu786@gmail.com" . "\r\n" .
  mail($to, $subject, $message, $headers);
  header("location:index.php");
}
  ?>
</body>
</html>