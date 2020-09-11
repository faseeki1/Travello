
<?php include "include/db.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Destinations</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/destinations.css">
<link rel="stylesheet" type="text/css" href="styles/destinations_responsive.css">
<link rel="stylesheet" href="styles/extra.css">
<?php include "include/plcss.php";?>
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
							<div class="logo"><a href="index.html">Travello</a></div>
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li ><a href="index.php">Home</a></li>
									<li><a href="about.php">About us</a></li>
									<li class="active"><a href="destinations.php">Destinations</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li><a href="login.php" class="login"><i class="fa fa-user"></i> Login/Signup</a></li>
								</ul>
							</nav>
							<div class="header_phone ml-auto">Call us: 00-56 445 678 33</div>

							<!-- Hamburger -->

							<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_social d-flex flex-row align-items-center justify-content-start">
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_header d-flex flex-row align-items-center justify-content-start">
			<div class="menu_logo"><a href="index.html">Travello</a></div>
			<div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
		</div>
		<div class="menu_content">
			<ul>
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="destinations.php">Destinations</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="login.php" class="login"><i class="fa fa-user"></i> Login/Signup</a></li>
			</ul>
		</div>
		<div class="menu_social">
			<div class="menu_phone ml-auto">Call us: 00-56 445 678 33</div>
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/destinations.jpg)"></div>
	</div>

	<!-- Search -->

	<div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
						<div class="home_search_title">Search for your trip</div>
						<div class="home_search_content">
						<form action="search.php" method="post" class="home_search_form" id="home_search_form">
								<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
									<select name="city_name" class="search_input search_input_1" placeholder="City" required="required"  id="">
										<option selected disabled value="">Select City</option>
										<?php 
											$get_states = mysqli_query($connect,"SELECT DISTINCT state FROM tour_places");
											while($all = mysqli_fetch_assoc($get_states)){
												$states = $all["state"];
												echo "<option value='$states'>$states</option>";
											}
										?>
									</select>
									<input type="text" name="departure" class="search_input search_input_2" placeholder="Departure">
									<input type="text" name="arrival" class="search_input search_input_3" placeholder="Arrival">
									<input type="number" name="price" class="search_input search_input_4" placeholder="Budget in Naira" required="required">
									<button type="submit" name="search" style="border:none; cursor:pointer;" class="text-white btn btn-lg signup"><i class="fa fa-search "></i> Search</button>
								</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Destinations -->

	<div class="destinations" id="destinations">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">simply amazing places</div>
					<div class="section_title"><h2>Popular Destinations</h2></div>
				</div>
			</div>
			<div class="row destination_sorting_row">
				<div class="col">
					<div class="destination_sorting d-flex flex-row align-items-start justify-content-start">
						<div class="sorting">
							<ul class="item_sorting">
								<li>
									<span class="sorting_text">Sort By</span>
									<i class="fa fa-chevron-down" aria-hidden="true"></i>
									<ul>
										<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Show All</span></li>
										<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
										<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Name</span></li>
									</ul>
								</li>
								<li>
									<span class="sorting_text">Categories</span>
									<i class="fa fa-chevron-down" aria-hidden="true"></i>
									<ul>
										<li class="num_sorting_btn"><span>Category</span></li>
										<li class="num_sorting_btn"><span>Category</span></li>
										<li class="num_sorting_btn"><span>Category</span></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="sort_box ml-auto"><i class="fa fa-th" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
			<div class="row destinations_row">
				<div class="col">
					<div class="destinations_container item_grid">
					<?php
					$query_pag = mysqli_query($connect,"SELECT * FROM tour_places ORDER BY id DESC");
					$tour_rows = mysqli_num_rows($query_pag);
					if(isset($_GET['page'])){
						$x = $_GET['page'];
						
					}else{
						$x = 1;
					}
					$limit_value = ($x-1)*6;
						
						$query_details = mysqli_query($connect,"SELECT * FROM tour_places ORDER BY id DESC LIMIT $limit_value, 6 ");
						while($tour = mysqli_fetch_assoc($query_details)){
							$tour_name = $tour["name"];
							$tour_id = $tour["id"];
							$tour_locality = $tour["locality"];
							$tour_state = $tour["state"];
							$tour_image = $tour["image_main"];
							$tour_price = $tour["price"];
							$tour_hotel = $tour["include_hotel"];
							$tour_refreshment = $tour["include_refreshment"];
							$tour_flight = $tour["include_flight"];
							$tour_movie = $tour["include_movie"];
						
						
					?>
					<!-- Destination -->
					<div class="destination item" style="margin: 2rem 0;">
						<div class="destination_image">
							<img src="images/<?php echo $tour_image;?>" alt="">
						</div>
						<div class="destination_content">
							<div class="destination_title"><a href="destinations.html" style="font-size: 1.2rem;"><?php echo $tour_name ." - " .$tour_locality;?></a></div>
							<div class="destination_subtitle"><p><?php echo $tour_state;?></p></div>
							<div class="destination_price" style="margin:-1px 0 9px 0;">From N<?php echo $tour_price;?></div>
							<!-- <div class="destination_list" style="margin-top:-1px;">
								<ul>
									<li>Hotel <?php echo $tour_hotel;?></li>
									<li>Refreshment <?php echo $tour_refreshment;?></li>
									<li>Flight <?php echo $tour_flight;?></li>
									<li>Movie <?php echo $tour_movie;?></li>
								</ul>
							</div> -->
							<a href="place.php?place=<?php echo $tour_id;?>" style="margin-top:10px;" class="btn btn-success btn-sm">See more <i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
						<?php }?>

					</div>
				</div>
			</div>
			<div class="row load_more_row">
				<div class="col">
					<ul class="pag-ul">
					<li class="pag-li"><a href="destinations.php?page=<?php if($x==1){ $prev = 1;}else{$prev=$x-1;} echo $prev;?>" class="pag-a text-white"> <i class="fa fa-chevron-left"></i> <i class="fa fa-chevron-left"></i> </a></li>
					<?php
						$num_pages = round($tour_rows / 6);
						for($i=1;$i<=$num_pages;$i++){
							echo "<li class='pag-li'><a href='destinations.php?page=$i' class='pag-a text-white'>$i</a></li>";
						}
					?>
						<li class="pag-li"><a href="destinations.php?page=<?php if($x==$num_pages){ $next = 1;}else{$next=$x+1;} echo $next;?>" class="pag-a text-white"> <i class="fa fa-chevron-right"></i> <i class="fa fa-chevron-right"></i> </a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer_1.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter">
						<div class="newsletter_title_container text-center">
							<div class="newsletter_title">Subscribe to our newsletter to get the latest trends & news</div>
							<div class="newsletter_subtitle">Join our database NOW!</div>
						</div>
						<div class="newsletter_form_container">
							<form action="#" class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between" id="newsletter_form">
								<div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
									<div><input type="text" class="newsletter_input newsletter_input_name" id="newsletter_input_name" placeholder="Name" required="required"><div class="input_border"></div></div>
									<div><input type="email" class="newsletter_input newsletter_input_email" id="newsletter_input_email" placeholder="Your e-mail" required="required"><div class="input_border"></div></div>
								</div>
								<div><button class="newsletter_button">subscribe</button></div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_contact_row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/sign.svg" alt=""></div>
								<div class="footer_contact_title">give us a call</div>
								<div class="footer_contact_list">
									<ul>
										<li>Office Landline: +44 5567 32 664 567</li>
										<li>Mobile: +44 5567 89 3322 332</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/trekking.svg" alt=""></div>
								<div class="footer_contact_title">come & drop by</div>
								<div class="footer_contact_list">
									<ul style="max-width:190px">
										<li>4124 Barnes Street, Sanford, FL 32771</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/around.svg" alt=""></div>
								<div class="footer_contact_title">send us a message</div>
								<div class="footer_contact_list">
									<ul>
										<li>youremail@gmail.com</li>
										<li>Office@yourbusinessname.com</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="col text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </div>
	</footer>
</div>
<?php include "include/pljs.php";?>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/destinations.js"></script>
</body>
</html>