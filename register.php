
<!DOCTYPE html>
<html>
<head>
<title>Vats Fashion A Ecommerce site</title>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- start menu -->
<script src="js/bootstrap.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
				<div class="col-sm-4 logo">
					<h1><a href="index.php">Vats <span>Fashion</span></a></h1>	
				</div>
			<div class="col-sm-4 world">
					<div class="cart box_1">
						<a href="#">
						<h3> <div class="total">
							<!--<span class="simpleCart_total"></span>--></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
			</div>
			<div class="col-sm-2 number">
					<span><i class="glyphicon glyphicon-phone"></i>08210180664</span>
					<p>Call me</p>
				</div>
			<div class="col-sm-2 search">		
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
		
	</div>
</div>
<!--//header-->
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Register</li>
			</ol>
		</div>
	</div>
<div class="container">
	<div class="register">
	<center><table><font color="black"> <th colspan=2>
		<h2>Register</h2>
		   <?php
			   if(@$_GET['empty']==true)
			   {
				   ?>
				   <div class ="alert-light text-danger text-center py-3"><?php echo $_GET['empty']?></div>
				   <?php
			   }
			   unset($_GET['empty']);
			   if(@$_GET['result']==true)
			   {
				    ?>
				   <div class ="alert-light text-danger text-center py-3"><?php echo $_GET['result'] ?></div>
				   <?php
			   }
				 unset($_GET['result']);  
			   
			   ?>
				   
		
		
		
		
		<form action="insert3.php" method="post">
		<div class="col-md-6  register-top-grid">
		<div class="mation">
		<tr><center><td colspan=2><font color="red"> *</font> Marked are mandatory</td></center></tr>
	   
		
<tr><td><h1><span>First Name <font color="red"> *</font></span></h1></td><td> <input type="text" name="fname" ></td></tr><br>
<tr><td><h1><span>Last Name  <font color="red"> *</font></span></h1></td><td> <input type="text" name="lname"></td></tr>
<tr><td><h1><span>GENDER</span></h1></td><td><input type="radio" name="gender" value="male" checked>M
<input type="radio" name="gender" value="female"/>F<input type="radio" name="gender" value="others"/>Others</td></tr>

<tr>
<td><h1><span>DATE OF BIRTH</span></h1></td>
<td><input type="date" name="dob"/>
</td>
</tr>


<tr><td><h1><span>NATIONALITY <font color="red"> *</font></span></h1></td><td><input type="text" name="nationality"></tr>
<tr><td><h1><span>CONTACT NO <font color="red"> *</font></span></h1></td>
<td><input type="text" maxlength="12" name="contact"/></tr>
<tr><td><h1><span>Email Address <font color="red"> *</font></span></h1></td><td><input type="text" name="emails"></td></tr>
<tr><td><h1><span>Password <font color="red"> *</font></span></h1></td><td><input type="password" name="pswd"></td></tr>

<tr><td colspan=2>
<center><h1><input type="submit" value="Create " name="submit"></h1></center></td></tr>
</table>
</font>
</center>
</form>

				</div>
		   </div>
</div>

<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-6 top-footer animated wow fadeInLeft" data-wow-delay=".5s">
				<h3>Follow Us On</h3>
				<div class="social-icons">
					<ul class="social">
						<li><a href="https://www.facebook.com/vishwajeet.sd.98"><i></i></a> </li>
						<li><a href="https://www.facebook.com/vishwajeet.sd.98"><i class="facebook"></i></a></li>	
						<li><a href="https://vishwajeetsd.73218@gmail.com"><i class="google"></i> </a></li>
						<li><a href="https://www.facebook.com/vishwajeet.sd.98"><i class="linked"></i> </a></li>						
					</ul>
						<div class="clearfix"></div>
				 </div>
			</div>
			<div class="col-md-6 top-footer1 animated wow fadeInRight" data-wow-delay=".5s">
				<h3>Newsletter</h3>
					<form action="#" method="post">
						<input type="text" name="email" placeholder="Enter your e-mail-Id ..."  value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="SUBSCRIBE">
					</form>
			</div>
			<div class="clearfix"> </div>	
		</div>	
	</div>
		<div class="footer-bottom">
		<div class="container">
				<div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
					<h6>Categories</h6>
					<ul>
						<li>Men</li>
						<li>Women</li>
						<li><a href="kids.php">Kids</a></li>
						<li><a href="accessories.php">Accessories</a></li>
						<li><a href="shoes.php">Shoes</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
					<h6>Latest Products</h6>
					<ul>
						<li><a href="tops.php">Top</a></li>
						<li><a href="mjeans.php">Man Jeans</a></li>
						<li><a href="sharees.php">Sharee</a></li>
						<li><a href="trouser.php">Trouser</a></li>
						<li><a href="shirts.php">Shirt</a></li>
						<li><a href="tshirt.php">T-shirt</a></li></ul>
				</div>
				<div class="col-md-3 footer-bottom-cate animated wow fadeInRight" data-wow-delay=".5s">
					<h6>Top Brands</h6>
					<ul><font color="grey" size="2">
					    <li>Levis</li>
						<li>Park Avenue</li>
						<li>Allen Solly</li>
						<li>Provogue</li>
						<li>Lee</li>
						<li>Pepe Jeans</li>
						<li>Wrangler</li>
						<li>Spykar</li>
						<li>Numero Uno</li>
						<li>Flying Machine</li>
					</font></ul>
				</div>
				<div class="col-md-3 footer-bottom-cate cate-bottom animated wow fadeInRight" data-wow-delay=".5s">
					<h6>Our Address</h6>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : G.P. Dhanbad, Near bekar bandh, Dhanbad (826001), <span>India.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="vishwajeetsd.73218@gmail.com">vishwajeetsd.73218@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +91 8210180664</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				<p class="footer-class animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"> © 2019 Vats Fashion . All Rights Reserved | Design by <a href="http://Csegroup.com/" target="_blank">Vats Group</a> (CSE G.P. Dhanbad (2016-1019) </p>
			</div>
	</div>
</div>
<!--footer-->
</body>
</html>