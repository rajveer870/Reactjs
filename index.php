
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
      	auto: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
				<div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
					<h1><a href="index.php">Vats <span>Fashion</span></a></h1>	
				</div>
				
<?php
session_start();
if(isset($_SESSION['email']))
{
	echo$_SESSION['email'];
}
else
{
	header("location:account.php");
}
		?>		
				
			<div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">
					<div class="cart box_1">
						<a href="#">
						<h3> <div class="total">
							<!--<span class="simpleCart_total"></span> --></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
			</div>
			<div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
					<span><i class="glyphicon glyphicon-phone"></i>08210180664</span>
					<p>Call me</p>
				</div>
			<div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">		
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
								<a href="#" class="menu-drop" data-toggle="dropdown">Women<span class="caret"></span></a>				
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
<!--banner-->
<div class="banner">
	<div class="matter-banner">
	 	<div class="slider">
	    	<div class="callbacks_container">
	      		<ul class="rslides" id="slider">
	        		<li>
	          			<img src="images/1.jpg" alt="">
						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<h2>MEN & WOMEN</h2>
							<h3>Trousers & Chinos</h3>
							<h4>UPTO 50%</h4>
							<p>OFFER</p>
						</div>
	       			 </li>
			 		 <li>
	          			<img src="images/3.jpg" alt=""> 
						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<h2>MEN & WOMEN</h2>
							<h3>Trousers & Chinos</h3>
							<h4>UPTO 50%</h4>
							<p>OFFER</p>
						</div>					
	       			 </li>
					 <li>
	          			<img src="images/2.jpg" alt="">
						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<h2>MEN & WOMEN</h2>
							<h3>Trousers & Chinos</h3>
							<h4>UPTO 50%</h4>
							<p>OFFER</p>
						</div>
	        		</li>	
	      		</ul>
	 	 	</div>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<!--//banner-->
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<div class="content-top1">
				<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="sarees.php">
							<img class="img-responsive" src="images/Sr1.jpeg" alt="" />
						</a>
						<h3><a href="sarees.php">Saree</a></h3>
						<div class="price">
								<h5 class="item_price"> &#8377; 799</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
				<div class="col-md-6 animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
					<div class="col-md3">
						<div class="up-t">
							<h3>Flat 50% Offer</h3>
						</div>
					</div>
				</div>
			<div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="shirts.php">
							<img class="img-responsive" src="images/s12.jpeg" alt="" />
						</a>
						<h3><a href="shirts.php">shirt</a></h3>
						<div class="price">
								<h5 class="item_price">&#8377; 499</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="clearfix"> </div>
			</div>	
			<div class="content-top1">
				<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="top2.php">
							<img class="img-responsive" src="images/tp5.jpeg" alt="" />
						</a>
						<h3><a href="top2.php">Top</a></h3>
						<div class="price">
								<h5 class="item_price">&#8377; 599</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="wa21.php">
							<img class="img-responsive" src="images/wa21.jpeg" alt="" />
						</a>
						<h3><a href="wa21.php">Watch</a></h3>
						<div class="price">
								<h5 class="item_price">&#8377; 499</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="dre2.php">
							<img class="img-responsive" src="images/dr6.jpeg" alt="" />
						</a>
						<h3><a href="dre2.php">Dress</a></h3>
						<div class="price">
								<h5 class="item_price">&#8377; 699</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			<div class="col-md-3 col-md2 cmn animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="sc3.php">
							<img class="img-responsive" src="images/sc3.jpeg" alt="" />
						</a>
						<h3><a href="sc3.php">Dupatta</a></h3>
						<div class="price">
								<h5 class="item_price">&#8377; 399</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="clearfix"> </div>
			</div>			
		</div>
	</div>
</div>
<!--//content-->
	<div class="con-tp">
		<div class="container">
			<div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
				<a href="products.php">
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="images/6.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
										<h4>30%offer</h4>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 con-tp-lft animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<a href="products.php">			
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="images/10.jpg" alt="image" class="img-responsive zoom-img"></div>
							<div class="info-box">
								<div class="info-content simpleCart_shelfItem">
										<h4>45%offer</h4>	
								</div>
							</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
				<a href="products.php">
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="images/9.jpg" alt="image" class="img-responsive zoom-img"></div>
							<div class="info-box">
								<div class="info-content simpleCart_shelfItem">
										<h4>50%offer</h4>	
								</div>
							</div>
					</div>
				</a>
			</div>
			<div class="clearfix"></div>
		<div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
			<a href="products.php">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/12.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
									<h4>25%offer</h4>	
							</div>
						</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 con-tp-lft animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
			<a href="products.php">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/13.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
									<h4>50%offer</h4>	
							</div>
						</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
			<a href="products.php">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/14.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
									<h4>35%offer</h4>	
							</div>
						</div>
				</div>
			</a>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
	<div class="c-btm">
		<div class="content-top1">
			<div class="container">
				<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="tsingle3.php">
							<img class="img-responsive" src="images/ts9.jpeg" alt="" />
						</a>
						<h3><a href="tsingle3.php">T-Shirt</a></h3>
						<div class="price">
								<h5 class="item_price">&#8377; 599</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="blaze3.php">
							<img class="img-responsive" src="images/bl10.jpeg" alt="" />
						</a>
						<h3><a href="blaze.php">Blazers</a></h3>
						<div class="price">
								<h5 class="item_price">&#8377; 2599</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="gog4.php">
							<img class="img-responsive" src="images/gog4.jpeg" alt="" />
						</a>
						<h3><a href="gog4.php">Goggle</a></h3>
						<div class="price">
								<h5 class="item_price">&#8377; 259</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="sh19.php">
							<img class="img-responsive" src="images/sh19.jpeg" alt="" />
						</a>
						<h3><a href="sh19.php">Shoe</a></h3>
						<div class="price">
								<h5 class="item_price">&#8377; 1249</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="clearfix"> </div>
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
				<h3><a href="index2.php">Newsletter</a></h3>
					<!--<form action="subscribe.php" method="post">
					<input type ="text" name="name" placeholder="enter name.." value="">
						<input type="text" name="email" placeholder="Enter your e-mail-Id ..."  value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="SUBSCRIBE" <a href="index2.php">
					</form>-->
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