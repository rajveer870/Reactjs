
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
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Accessories</li>
			</ol>
		</div>
	</div>
<div class="single">

<div class="container">
<div class="col-md-9">
	<div class="col-md-5 grid">		
		<div class="flexslider">
			  <ul class="slides">
			    <li data-thumb="images/be16.jpeg">
			        <div class="thumb-image"> <img src="images/be16.jpeg" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="images/be17.jpeg">
			         <div class="thumb-image"> <img src="images/be17.jpeg" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="images/be18.jpeg">
			       <div class="thumb-image"> <img src="images/be18.jpeg" data-imagezoom="true" class="img-responsive"> </div>
			    </li> 

				
			  </ul>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
						<div class="single-para simpleCart_shelfItem">
							<h2>men's casual belt</h2>
							<p>Fashion Men Artificial Leather Waist Belt Casual Belt</p>
							<div class="star-on">
								<ul>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
								</ul>
								<div class="review">
									<a href="#"> 3 reviews </a>/
									<a href="#">  Write a review</a>
								</div>
							<div class="clearfix"> </div>
							</div>
							
								<label  class="add-to item_price">&#8377; 179</label>
							
							<div class="available">
								<h6>Available Options :</h6>
								<ul>
								<form action="addtocart.php" method="post">	
								
								<li>Size:<select name="size">
									<option>Large</option>
									<option>Medium</option>
									<option>small</option>
									<option>Large</option>
									<option>small</option>
								</select></li>
								<input type="submit" value="Buy now">
								</form>
							</ul>
						</div>

						</div>
					</div>
			<div class="clearfix"> </div>
			<div class="content-top1">
				<div class="col-md-4 col-md4">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="be13.php">
							<img class="img-responsive" src="images/be13.jpeg" alt="" />
						</a>
						<h3><a href="be13.php">Belt</a></h3>
						<div class="price">  
								<h5 class="item_price">&#8377; 359</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-4 col-md4">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="be4.php">
							<img class="img-responsive" src="images/be4.jpeg" alt="" />
						</a>
						<h3><a href="be4.php">Belt</a></h3>
						<div class="price">
								<h5 class="item_price">&#8377; 299</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-4 col-md4">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="be1.php">
							<img class="img-responsive" src="images/be1.jpeg" alt="" />
						</a>
						<h3><a href="be1.php">Belt</a></h3>
						<div class="price">
								<h5 class="item_price">&#8377; 150</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			
			<div class="clearfix"> </div>
			</div>		
</div>
<!----->
<div class="col-md-3 product-bottom">
			<!--categories-->
				<div class=" rsidebar span_1_of_left">
						<h3 class="cate">Categories</h3>
							 <ul class="menu-drop">
							<li class="item1"><a href="#">Men </a>
								<ul class="cute">
									<li class="subitem1"><a href="tshirt.php">T-shirt </a></li>
									<li class="subitem2"><a href="shirts.php">Shirt </a></li>
									<li class="subitem3"><a href="mjeans.php">Jeans </a></li>
								</ul>
							</li>
							<li class="item2"><a href="#">Women </a>
								<ul class="cute">
									<li class="subitem1"><a href="dress.php">Dress </a></li>
									<li class="subitem2"><a href="wjeans.php">Jeans </a></li>
									<li class="subitem3"><a href="tops.php">Tops </a></li>
								</ul>
							</li>
							<li class="item3"><a href="kids.php">Kids</a>
							</li>
							<li class="item4"><a href="#">Accesories</a>
								<ul class="cute">
									<li class="subitem1"><a href="accessories.php">Watches </a></li>
									<li class="subitem2"><a href="accessories.php">Goggles </a></li>
									<li class="subitem3"><a href="accessories.php">Belts</a></li>
								</ul>
							</li>
									
							<li class="item4"><a href="#">Shoes</a>
								<ul class="cute">
									<li class="subitem1"><a href="shoes.php">Man Shoe </a></li>
									<li class="subitem2"><a href="shoes.php">Women Shoe</a></li>
								</ul>
							</li>
						</ul>
					</div>
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->
<!--seller-->
				<div class="product-bottom">
						<h3 class="cate">Best Sellers</h3>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="single4.php"><img class="img-responsive " src="images/s16.jpeg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single4.php" >Men's formal shirt </a></h6>
							<span class=" price-in1"> &#8377; 599.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="tsingle3.php"><img class="img-responsive " src="images/ts11.jpeg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="tsingle3.php" >Men's T-Shirt  </a></h6>
							<span class=" price-in1"> &#8377; 599.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="sr11.php"><img class="img-responsive " src="images/sr11.jpeg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="sr11.php" >Saree  </a></h6>
							<span class=" price-in1"> &#8377; 799.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>	
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="wa6.php"><img class="img-responsive " src="images/wa6.jpeg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="wa6.php" >Men's Wrist Watch  </a></h6>
							<span class=" price-in1"> &#8377; 599.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>		
				</div>

<!--//seller-->
<!--tag-->
				<div class="tag">	
						<h3 class="cate">Tags</h3>
					<div class="tags">
						<ul>
							<li><a href="dupattas.php">design</a></li>
							<li><a href="tops.php">fashion</a></li>
							<li><a href="shoes.php">lorem</a></li>
							<li><a href="dress.php">dress</a></li>
							<li><a href="tshirt.php">fashion</a></li>
							<li><a href="mjeans.php">modern</a></li>
							<li><a href="sarees.php">color</a></li>
							<li><a href="blazers.php">style</a></li>
							<li><a href="trouser.php">comfortable</a></li>
							<li><a href="accessories.php">latest</a></li>
							<li><a href="shirts.php">classy</a></li>
							<li><a href="wjeans.php">advance</a></li>
						<div class="clearfix"> </div>
						</ul>
				</div>					
			</div>
		</div>
		<div class="clearfix"> </div>
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
<!-- slide -->
<script src="js/jquery.min.js"></script>
<script src="js/imagezoom.js"></script>
<!-- start menu -->
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
						<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!---pop-up-box---->
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
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
</body>
</html>