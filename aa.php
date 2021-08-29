
				<?php
session_start();
if(isset($_SESSION['email']))
{
	$_SESSION['email'];
}
else
{
	header("location:account.php");
}
		?>	


<?php

$con=mysqli_connect('localhost','root','','vatss');
$cname=$_POST['cname'];
$dname=$_POST['phn'];
$ename=$_POST['caddress'];
$sn=$_POST['email'];
$q="insert into bynow(cname,phn,caddress,email) 
values('$cname','$dname','$ename','$sn')";
mysqli_query($con,$q);
//header("location:addtocart.php");
if(empty($_POST['cname'])||empty($_POST['phn'])||empty($_POST['caddress']||empty($_POST['email'])))
 
	   {
		   
		   
		     header("location:addtocart.php?Empty=please fill all the fields");
		   
	  }
	   else
	   {
		   $query="SELECT * FROM bynow WHERE email='$_POST[email]'";
			   $res= mysqli_query($con,$query);
          $result=mysqli_num_rows($res);
          if($result == 1)
           {
           while($row=mysqli_fetch_array($res))

		  {
			  $x=$row['cname'];
			  $y=$row['phn'];
			  $z=$row['caddress'];
			  $w=$row['email'];
			  	
		$r=rand(999,99999);
	//	echo"$r";
		$sql = "insert into orders (id,email) VALUES($r,'$w')";
        mysqli_query($con,$sql);
		  $to=$w;
   $subject= "YOUR ORDER";
   $message= "ORDER ID: ".$r."\r\nIS CONFIRMED\n Thank you";
   
  
      $message.="THIS ORDER PLACED ON THIS";
      $message.="ADDRESS: ".$z."\r\n";
      $message.="PLEASE CHECK YOUR EMAIL: ".$w."\r\n";
      $headers= "From: rajveeranshu786@gmail.com" ;
      mail($to, $subject, $message, $headers);
 
	  echo"<center align='left' ><font size='30px' color=pink>";echo"Your order id:";echo"</font>";echo"<font size='30px' color=purple>";echo "$r";echo"</font>";echo"</center>";
	  echo"<center align='left' ><font size='30px' color=pink>";echo"Name:";echo"</font>";echo"<font size='30px' color=purple>";echo "$row[cname]";echo"</font>";echo"</center>";
      echo"<center align='left' ><font size='30px' color=pink>";echo"Email:";echo"</font>";echo"<font size='30px' color=purple>";echo "$row[email]";echo"</font>";echo"</center>";
      echo"<center align='left' ><font size='30px' color=pink>";echo"Phone no-:";echo"</font>";echo"<font size='30px' color=purple>";echo "$row[phn]";echo"</font>";echo"</center>";
      echo"<center align='left' ><font size='30px' color=pink>";echo"Address:";echo"</font>";echo"<font size='30px' color=purple>";echo "$row[caddress]";echo"</font>";echo"</center>";
		  }
 
		   }
	   }

		  
		  
		  
		  
		  
		  

	   




?>