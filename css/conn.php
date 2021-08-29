<?php
$con=mysquli_connect('localhost','root')
if(!$con)
	echo "connection failed";
else
	echo "connection established";
?>
