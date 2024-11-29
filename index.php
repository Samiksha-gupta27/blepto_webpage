<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>Blepto</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

		<!--flaticon.css-->
        <link rel="stylesheet" href="assets/css/flaticon.css">

		<!--slick.css-->
        <link rel="stylesheet" href="assets/css/slick.css">
		<link rel="stylesheet" href="assets/css/slick-theme.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!--header-top start -->
		<header id="header-top" class="header-top">
			<ul>
				<li>
					<div class="header-top-left">
					</div>
				</li>
				<li class="head-responsive-right pull-right">
					<div class="header-top-right">
						<ul>
							<li class="header-top-contact">
								Contact Us
							</li>
							<li class="header-top-contact">
								<a href="Sign-up.php">Sign in</a>
							</li>
							<li class="header-top-contact">
								<a href="Login.php">Login</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
					
		</header><!--/.header-top-->
		<!--header-top end -->

		<!-- top-area Start -->
		<section class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand" href="index.php">BLE<span>pTO</span></a>

			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                    <li class="scroll active"><a href="#home">Home</a></li>
								<li class="scroll"><a href="#groceries">Groceries</a></li>
								<li class="scroll"><a href="#reviews">Reviews</a></li>
								<li class="scroll"><a href="#cart">My Cart</a></li>
								<li class="scroll"><a href="#Sign-up">Sign In</a></li>

			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->
		    <div class="clearfix"></div>

		</section><!-- /.top-area-->
		<!-- top-area End -->

		<!--welcome-hero start -->
		<section id="home" class="welcome-hero">
			<div class="container">
				<div class="welcome-hero-txt">
					<h2> Need something in 10 Minutes? <br> We got you covered </h2>
					<p>
						Find groceries and many more think in just One click 
					</p>
				</div>
				<div class="welcome-hero-serch-box">
					<div class="welcome-hero-form">
						<div class="single-welcome-hero-form">
							<h3>what?</h3>
							<form action="index.php">
								<input type="text" placeholder="Ex: palce, resturent, food, automobile" />
							</form>
							<div class="welcome-hero-form-icon">
								<i class="flaticon-list-with-dots"></i>
							</div>
						</div>
						<div class="single-welcome-hero-form">
							<h3>location</h3>
							<form action="index.php">
								<input type="text" placeholder="Ex: london, newyork, rome" />
							</form>
							<div class="welcome-hero-form-icon">
								<i class="flaticon-gps-fixed-indicator"></i>
							</div>
						</div>
					</div>
					<div class="welcome-hero-serch">
						<button class="welcome-hero-btn" onclick="window.location.href='#'">
							 search  <i data-feather="search"></i> 
						</button>
					</div>
				</div>
			</div>

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--list-topics start -->
		<section id="list-topics" class="list-topics">
			<div class="container">
				<div class="list-topics-content">
					<ul>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<img src="assets\img\Snacks.jpg" alt="Personal Care Icon">
								</div>
								<h2><a href="snacks.php">Snacks</a></h2>
								<p>Your Favorite Snacks Delivered</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<img src="assets\img\Cold_drinks.jpg" alt="Personal Care Icon">
								</div>
								<h2><a href="cold_drink.php">Cold Drinks</a></h2>
								<p>Refresh Yourself with Cold Drinks</p>
							</div>
						</li>
						<!-- Add more categories as needed -->
					</ul>
				</div>
			</div>
		</section>
		
		<!--list-topics end-->

		<section id="groceries" class="explore">
			<div class="container">
				<div class="section-header">
					<h2>Shop Groceries</h2>
					<p>Fresh groceries delivered to your doorstep.</p>
				</div>
				<div class="explore-content">
					<div class="row">
						<!-- Apple -->
						<div class="col-md-4 col-sm-6">
							<div class="single-explore-item">
								<img src="assets\img\apple_2.0.jpg" alt="Apple" class="product-image">
								<h2>Fresh Apples</h2>
								<p>Price: $3.99 / lb</p>
								<button class="add-to-cart-btn" onclick="addToCart('Fresh Apples', 3.99)">Add to Cart</button>
							</div>
						</div>
						<!-- Banana -->
						<div class="col-md-4 col-sm-6">
							<div class="single-explore-item">
								<img src="assets\img\banana.jpg" alt="Banana" class="product-image">
								<h2>Bananas</h2>
								<p>Price: $1.29 / lb</p>
								<button class="add-to-cart-btn" onclick="addToCart('Bananas', 1.29)">Add to Cart</button>
							</div>
						</div>
						<!-- Orange -->
						<div class="col-md-4 col-sm-6">
							<div class="single-explore-item">
								<img src="assets\img\oranges.jpg" alt="Orange" class="product-image">
								<h2>Oranges</h2>
								<p>Price: $2.49 / lb</p>
								<button class="add-to-cart-btn" onclick="addToCart('Oranges', 2.49)">Add to Cart</button>
							</div>
						</div>
						<!-- Add more fruits similarly -->
					</div>
				</div>
			</div>
		</section>		
		<section id="cart" class="cart-section">
			<div class="container">
				<h2>Your Cart</h2>
				<div class="cart-items">
				<button class="close-btn" onclick="window.location.href='cart.php'">Veiw Cart</button>
				</div>
			</div>
		</section>
		

		<!--explore start -->
		<section id="explore" class="explore">
			<div class="container">
				<div class="section-header">
					<h2>Shop by Category</h2>
					<p>Explore New place, food, culture around the world and many more</p>
				</div><!--/.section-header-->
				<div class="explore-content">
					<div class="row">
						<div class=" col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="assets\img\pharmacy.png" alt="Personal Care Icon"> 
									<div class="single-explore-img-info">
										<button onclick="window.location.href='pharmacy.php'">Assured</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-1">
									<h2><a href="#">Pharmacy</a></h2>
									<p class="explore-rating-price">
										<span class="explore-price-box">
									</p>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-2">
												<div class="explore-person-img">
													<a href="#">
													</a>
												</div>
											</div>
											<div class="col-sm-10">
												<p>
												Medicines in Minutes!!!
												</p>
											</div>
										</div>
									</div>
									<div class="explore-open-close-part">
										<div class="row">
											<div class="col-sm-5">
												<button class="close-btn" onclick="window.location.href='pharmacy.php'">Order Now</button>
											</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="assets\img\personal-care.png" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">featured</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-2">
									<h2><a href="#">Personal Care</a></h2>
									<p class="explore-rating-price">
									</p>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-2">
												<div class="explore-person-img">
													<a href="#"></a>
													</a>
												</div>
											</div>
											<div class="col-sm-10">
												<p>
													Explore the Wide Range of products
												</p>
											</div>
										</div>
									</div>
									<div class="explore-open-close-part">
										<div class="row">
											<div class="col-sm-5">
												<button class="close-btn open-btn" onclick="window.location.href='personal.php'">Order now</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>							

		</section><!--/.explore-->
		<!--explore end -->

		<!--reviews start -->
		<section id="reviews" class="reviews">
			<div class="section-header">
				<h2>clients reviews</h2>
				<p>What our client say about us</p>
			</div><!--/.section-header-->
			<div class="reviews-content">
				<div class="testimonial-carousel">
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c1.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Tom Leakar</h2>
									<h4>london, UK</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Absolutely love the convenience. I ordered some essentials, and they arrived within minutes. The quality of the fruits and vegetables was fantastic, and the service was top-notch
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c2.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>monirul islam</h2>
									<h4>london, UK</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Fast delivery and fresh products every time! Blinkit has made my life so much easier, especially with their pharmacy and personal care options. Highly recommend!
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c3.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Shohrab Hossain</h2>
									<h4>london, UK</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Blepto has a great selection, and everything arrives so quickly. I even got pharmacy items delivered right to my door. Such a time-saver!
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c4.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Tom Leakar</h2>
									<h4>london, UK</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Fantastic service! It's like having a mini supermarket in my pocket. I order groceries, personal care items, and more without any hassle. Keep it up!
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c1.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Tom Leakar</h2>
									<h4>london, UK</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Tried Blepto for the first time, and I'm so impressed! The fruits were fresh, the delivery was fast, and I even received a notification to track my order in real-time. Will definitely order again
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c2.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>monirul islam</h2>
									<h4>london, UK</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Perfect for busy schedules. I order everything from pharmacy products to vegetables in one place. The quality and customer service are outstanding. Thank you, Blepto!
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c3.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Shohrab Hossain</h2>
									<h4>london, UK</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									I love Blepto's service! It's so reliable, and I can get anything I need, even at the last minute. A lifesaver for working moms like me!
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c4.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Tom Leakar</h2>
									<h4>london, UK</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Highly recommended! The pharmacy products arrived in pristine condition, and the customer support team was very helpful. I'll keep coming back for the quality and convenience
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				</div>
			</div>

		</section><!--/.reviews-->
		<!--reviews end -->

		<!-- statistics strat -->
		<section id="statistics"  class="statistics">
			<div class="container">
				<div class="statistics-counter"> 
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">900</div> <span>+</span>
							</div><!--/.statistics-content-->
							<h3>Products</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">40</div> <span>+</span>
							</div><!--/.statistics-content-->
							<h3>Categories</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">100</div> <span>+</span>
							</div><!--/.statistics-content-->
							<h3>Brands</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">50</div> <span>k+</span>
							</div><!--/.statistics-content-->
							<h3>happy clients</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section><!--/.counter-->	
		<!-- statistics end -->

	

		<!--subscription strat -->
		<section id="Sign-up"  class="subscription">
			<div class="container">
				<div class="subscribe-title text-center">
					<h2>
						New to Blepto?
					</h2>
					<p>
						Sign-up and enjoy benefits exclusively for first time users
					</p>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="subscription-input-group">
							<form action="Sign-up.php">
								<input type="email" class="subscription-input-form" placeholder="Enter your email here">
								<button class="appsLand-btn subscribe-btn" onclick="href='Sign-up.php'">
									create account
								</button>
							</form>
						</div>
					</div>	
				</div>
			</div>

		</section><!--/subscription-->	
		<!--subscription end -->

		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="footer-menu">
		           	<div class="row">
			           	<div class="col-sm-3">
			           		 <div class="navbar-header">
				                <a class="navbar-brand" href="index.php">BLE<span>pTO</span></a>
				            </div><!--/.navbar-header-->
			           	</div>
			           	<div class="col-sm-9">
			           		<ul class="footer-menu-item">
			                    <footer id="footer" class="footer">
									<div class="container">
										<p>&copy; Blepto. All rights reserved.</p>
										<ul class="footer-links">
											<li><a href="#contact">Contact Us</a></li>
											<li><a href="#">Download Our App</a></li>
											<li><a href="#">Privacy Policy</a></li>
										</ul>
									</div>
								</footer>								
			                </ul><!--/.nav -->
			           	</div>
		           </div>
				</div>
				<div class="hm-footer-copyright">
					<div class="row">
						<div class="col-sm-5">
							<p>
								&copy;copyright. designed and developed by SAMIKSHA
							</p><!--/p-->
						</div>
						<div class="col-sm-7">
							<div class="footer-social">
								<span><i class="fa fa-phone"> +1  (222) 777 8888</i></span>
								<a href="#"><i class="fa fa-facebook"></i></a>	
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
					
				</div><!--/.hm-footer-copyright-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-->
		<!--footer end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

        <!--feather.min.js-->
        <script  src="assets/js/feather.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

        <!--slick.min.js-->
        <script src="assets/js/slick.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		     
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
		<script>
		let cart = [];
		let cartTotal = 0;

		function addToCart(itemName, price) {
    		cart.push({ itemName, price });
    		updateCartTotal();
			}

		function updateCartTotal() {
    		cartTotal = cart.reduce((total, item) => total + item.price, 0);
    		document.getElementById('cart-total').textContent = `$${cartTotal.toFixed(2)}`;
			}
		// Function to open a specific modal
function openModal(modalId) {
    document.getElementById(modalId).style.display = "block";
}

// Function to close a specific modal
function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}

// Close modal when clicking outside of it
window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
        event.target.style.display = "none";
    }
};

	</script>
    </body>
	
</html>