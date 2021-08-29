<?php
include "connection.php";
$key = $_GET['key'];
$query = mysql_query("DELETE FROM users WHERE hash='$key'");
if ($query) {
  echo "<h1>You have Unsubscribed!</h1>";
}else{
  mysql_errno();
}
?>