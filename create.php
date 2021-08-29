<?php
session_start();
                      
					  $con=mysqli_connect('localhost','root','','vatss');	 
               
                       
						   $f =$_SESSION['fn'] ;
                           $l=$_SESSION['ln'] ;
                           $e=$_SESSION['email'];
                           $p=$_SESSION['psw'];
                           $d=$_SESSION['do'];
                           $g=$_SESSION['gend'];
                           $n=$_SESSION['nation'];
                           $c=$_SESSION['cont'] ;
						   $sql="insert into register(fname,lname,dob,gender,nationality,con_no,emails,pswd) 
                                                                  values('$f','$l',$d,'$g','$n',$c,'$e','$p')";
                           mysqli_query($con,$sql);







echo 'your account created successfully';
header('Refresh:2;url=account.php');
session_destroy();
?>