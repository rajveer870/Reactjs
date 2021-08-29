<?php
session_start();
echo$_SESSION['email'];
echo"thankyou";
session_destroy();

?>
<html>
<head>
<title>your password is changed</title>
<body>
<a href="account.php">click here to go back to account page</a>
</body>
</html>