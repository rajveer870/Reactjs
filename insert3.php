<?php
session_start();
$con=mysqli_connect('localhost','root','','vatss');
$_SESSION['fn'] = $_POST['fname'];
$_SESSION['ln'] = $_POST['lname'];
$_SESSION['email']= $_POST['emails'];
$_SESSION['psw']= $_POST['pswd'];
$_SESSION['do']=$_POST['dob'];
$_SESSION['gend']=$_POST['gender'];
$_SESSION['nation']=$_POST['nationality'];
$_SESSION['cont']=$_POST['contact'];
$query="SELECT * FROM register WHERE emails='$_POST[emails]'";
			   $res= mysqli_query($con,$query);
          $result=mysqli_num_rows($res);
         
if(isset($_POST['submit']))
{

    if(empty($_POST['emails'])||empty($_POST['pswd'])||empty($_POST['nationality'])||empty($_POST['contact'])||empty($_POST['fname']))
	         {
		   
		   
		          header("location:register.php?Empty=please fill all the fields");
		   
	         }

    else
            {
	                if($result == 1)
	                     {
		 
		                     header("location:register.php?invalid=already");
		 
		 
	                      }

                     elseif($result != 1)
					 {
                              
                            

                           $_SESSION['email']=$_POST['emails'];
                              $ems=$_SESSION['email'];
                                echo"please check your email for otp";
		
		                             $s=rand(999,99999);
		                              // echo"$s";
		                                   $q = "insert into confirm (otps,email) VALUES($s,'$ems')";
                                                 mysqli_query($con,$q);
		                                                $to=$ems;
                                                          $subject= "OTP";
                                                              $message= "OTP: ".$s."\r\n";
   
                                                                $message.="thank you ";
  
                                                                    $headers= "From: rajveeranshu786@gmail.com" . "\r\n" .
                                                                      mail($to, $subject, $message, $headers);
		
                                                                           header('location:confirm1.php?email='.$ems);
                        } 
						else
					       {
	                         echo "Error: ";
                             }
                }
}
?>