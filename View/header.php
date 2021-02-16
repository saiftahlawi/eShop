

        <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../Assest/main.css">
        <link rel="stylesheet" href="../Assest/style.css">
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
       
        <!-- Bootstrap -->
	<link rel="stylesheet" href="../Assest/css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="../Assest/css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="../Assest/css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="../Assest/css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="../Assest/css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="../Assest/css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="../Assest/css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="../Assest/css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="../Assest/css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="../Assest/css/slicknav.min.css">
    <!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="../Assest/css/reset.css">
	<link rel="stylesheet" href="../Assest/style.css">
    <link rel="stylesheet" href="../Assest/css/responsive.css">
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    </head>
        <body>
   
	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +060 (800) 801-582</li>
								<li><i class="ti-email"></i> support@shophub.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-location-pin"></i> Store location</li>
								<li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
								<li><i class="ti-user"></i> <a href="./profile.php">My account</a></li>
								<?php 
	
								if(isset($_SESSION['user'])) {
								echo ' 	<li><i class="ti-power-off"></i><a href="./logout.php">Logout</a></li>';	
								} else {
									echo '<li><i class="ti-power-off"></i><a href="./login.php">Login</a></li>';
								}
								
								?>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.php"><img src="../Assest/images/logo.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<select>
									<option selected="selected">All Category</option>
									<option>watch</option>
									<option>mobile</option>
									<option>kid’s item</option>
								</select>
								<form>
									<input name="search" placeholder="Search Products Here....." type="search">
									<button class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="cart.php" class="single-icon"><i class="fas fa-shopping-cart"></i> <span class="total-count">2</span></a>
								<!-- Shopping Item -->
							
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<div class="all-category">
                            <a href="index.php"><h3 class="cat-heading">CATEGORIES</h3></a>
								
							</div>
						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="index.php">Home</a></li>
													<li><a href="#">Product</a></li>												
													<li><a href="#">Service</a></li>
													<li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
														<ul class="dropdown">
															<li><a href="shop-grid.html">Shop Grid</a></li>
															<li><a href="cart.php">Cart</a></li>
															<li><a href="checkout.html">Checkout</a></li>
														</ul>
													</li>
													<li><a href="#">Pages</a></li>									
													<li><a href="#">Blog<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
														</ul>
													</li>
													<li><a href="contact.html">Contact Us</a></li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>