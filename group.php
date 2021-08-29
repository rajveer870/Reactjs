
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
					<h1><a href="index.php">vats <span>Fashion</span></a></h1>	
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
		<div class="container">
			<div class="head-top">
			<div class="n-avigation">
			
				<nav class="navbar nav_bottom" role="navigation">
				
				 <!-- Brand and toggle get grouped for better mobile display -->
				  <div class="navbar-header nav_2">
					  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="#"></a>
				   </div> 
				   <!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1">
							<li><a href="index.php">Home</a></li>
							<li class="dropdown mega-dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Women<span class="caret"></span></a>				
								<div class="dropdown-menu mega-dropdown-menu">
									<div class="container-fluid">
										<!-- Tab panes -->
										<div class="tab-content">
										  <div class="tab-pane active" id="men">
											<ul class="nav-list <!--list-inline-->">
												<li><a href="tops.php">Tops</a></li>
												<li><a href="dress.php">Dress</a></li>
												<li><a href="wjeans.php">Jeans</a></li>
												<li><a href="sarees.php">Sarees</a></li>
												<li><a href="dupattas.php">Dupattas</a></li>
											</ul>
										  </div>
									   </div>
									</div>
									<!-- Nav tabs -->
									                
								</div>				
							</li>
							<li class="dropdown mega-dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>				
								<div class="dropdown-menu mega-dropdown-menu">
									<div class="container-fluid">
										<!-- Tab panes -->
										<div class="tab-content">
										  <div class="tab-pane active" id="men">
											<ul class="nav-list <!--list-inline-->">
												<li><a href="tshirt.php">T-shirt</a></li>
												<li><a href="shirts.php">Shirt</a></li>
												<li><a href="mjeans.php">Jeans</a></li>
												<li><a href="blazers.php">Blazers</a></li>
												<li><a href="trouser.php">Trouser</a></li>
											</ul>				
										  </div>
										 
									   </div>
									</div>
									<!-- Nav tabs -->
									                   
								</div>				
							</li>
							<li><a href="kids.php">Kids</a></li>
							<li><a href="shoes.php">Shoes</a></li>
							<li><a href="accessories.php">Accessories</a></li>
							<li><a href="profile.php">Profile</a></li>
							<li class="last"><a href="contact.php">Contact</a></li>
							<li><a href="group.php"><font color="grey"> Project members</font></a></li>
						</ul>
					 </div><!-- /.navbar-collapse -->
				  
				</nav>
			</div>
			
				
		<div class="clearfix"> </div>
			<!---pop-up-box---->   
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login">
							<form action="#" method="post">
								<input type="submit" value="">
								<input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
							
							</form>
						</div>
						<p>	Shopping</p>
					</div>				
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
	<!---->		
		</div>
	</div>
</div>
<!--//header-->
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Project members </li>
			</ol>
		</div>
	</div>
<table width="100%" border=0 >
<!--<tr> <td colspan="2" height="50" bgcolor="purple"><marquee behavior="alternate"><font color="white" size="6"><b>Vatss Group</b></font></marquee></td></tr>-->
<tr><th height="50" colspan="2" bgcolor="grey"><font color="black" size="5" align="centre">--:<strong><em> Project Members </em></strong>:-<strong><em>-</em></strong></font></th></tr>
<tr><td width="20%" height="140" ><marquee behavior="slide"><img width="100%" height="100%" src="images/vishu.jpeg"></marquee></td>
	<td bgcolor="brown"><marquee behavior="slide" direction="right"><font size="6" color="white">
			<b>Name :--</b> Vishwajeet Sadhu  <font color="yellow">(Group Leader)</font><br>
			<b>Board Roll :-- 16301060050</b><br>
			<b>Contact Number.--</b>08210180664<br>
			<b>E-mail--</b>vishwajeetsd.73218@gmail.com</font></font></marquee></td></tr>
<tr><td width="20%" height="140" ><marquee behavior="slide"><img width="100%" height="100%" src="images/anshu.jpeg"></marquee></td>
	<td bgcolor="brown"><marquee behavior="slide"><font size="6" color="white">
			<b>Name :--</b> Anshu Kumar<br>
			<b>Board Roll :-- 16301060005</b><br>
			<b>Contact Number.--</b>08709025988<br>
			<b>E-mail--</b>rajveeranshu786@gmail.com</font></font></marquee></td></tr>


<tr><td width="20%" height="140" ><marquee behavior="slide"><img width="100%" height="100%" src="images/santo.jpeg"></marquee></td>
	<td bgcolor="brown"><marquee behavior="slide" direction="right"><font size="6" color="white">
			<b>Name :--</b> Santosh Kumar Mahato<br>
			<b>Board Roll :-- 16301060042</b><br>
			<b>Contact Number.--</b>07870021216<br>
			<b>E-mail--</b>santoshmahato475@gmail.com</font></font></marquee></td></tr>
<tr><td width="20%" height="140" ><marquee behavior="slide"><img width="100%" height="100%" src="images/chandr.jpeg"></marquee></td>
	<td bgcolor="brown"><marquee behavior="slide" direction="left"><font size="6" color="white">
			<b>Name :--</b> Thamsanchandra Marandi<br>
			<b>Board Roll :-- 16301060049</b><br>
			<b>Contact Number.--</b>08002417637<br>
			<b>E-mail--</b>thamsanchandra@gmail.com</font></font></marquee></td></tr>
</table>
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