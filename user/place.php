<?php
include "include/db.php";
ob_start();
if(!isset($_GET["place"])){
	header("Location: index.php");
}else{
 $idd = $_GET["place"];
	$query_details = mysqli_query($connect,"SELECT * FROM tour_places WHERE id = $idd ");
	while($tour = mysqli_fetch_assoc($query_details)){
		$tour_name = $tour["name"];
		$tour_id = $tour["id"];
		$tour_locality = $tour["locality"];
		$tour_state = $tour["state"];
		$tour_image = $tour["image_main"];
		$tour_image_alt = $tour["image_alt"];
		$tour_price = $tour["price"];
		$tour_hotel = $tour["include_hotel"];
		$tour_refreshment = $tour["include_refreshment"];
		$tour_flight = $tour["include_flight"];
		$tour_movie = $tour["include_movie"];

	}
}

?>

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
								<li class="active"><a href="index.php">Home</a></li>
									<li><a href="about.php">About us</a></li>
									<li><a href="destinations.php">Destinations</a></li>
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
				<li><a href="login.php" class="signup"><i class="fa fa-user"></i> Login/Signup</a></li>
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
							<form action="#" class="home_search_form" id="home_search_form">
								<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
									<input type="text" class="search_input search_input_1" placeholder="City" required="required">
									<input type="text" class="search_input search_input_2" placeholder="Departure" required="required">
									<input type="text" class="search_input search_input_3" placeholder="Arrival" required="required">
									<input type="text" class="search_input search_input_4" placeholder="Budget" required="required">
									<button class="home_search_button">search</button>
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
					<div class="section_title"><h2><?php echo $tour_name ." - " .$tour_locality;?></h2></div>
				</div>
			</div>
			<div class="row destinations_row" style="margin-bottom: 70rem;">
				<div class="col">
					<div class="destinations_container item_grid">
						<!-- Destination -->
						<div class="col-12">
							<div class="destination_image">
								<div class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img src="../images/<?php echo $tour_image;?>" alt="">
										</div>
										<div class="carousel-item">
											<img src="../images/<?php echo $tour_image_alt;?>" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="#"><?php echo $tour_name ." - " .$tour_locality;?></a></div>
								<div class="destination_subtitle" style="text-transform:uppercase;"><p><?php echo $tour_state;?></p></div>
								<div class="destination_price">From N<?php echo $tour_price;?></div><br>
								<div class="text">
									<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, at doloribus. Nostrum, numquam, iusto mollitia minus alias maxime laudantium eaque at quo laborum ea corrupti minima, vitae suscipit quod unde. </p>
								</div>
								<div class="destination_list">
									<ul>
										<li style="display: inline; margin: 0 1rem;"><i class="fa fa-plane"></i> Flight <?php echo $tour_flight;?></li>
										<li style="display: inline; margin: 0 1rem;"><i class="fa fa-home"></i> Hotel <?php echo $tour_hotel;?></li>
										<li style="display: inline; margin: 0 1rem;"><i class="fa fa-cutlery"></i> Refreshment <?php echo $tour_refreshment;?></li>
										<li style="display: inline; margin: 0 1rem;"><i class="fa fa-video-camera"></i> Movie <?php echo $tour_movie;?></li>
									</ul>
								</div>
								<div class="col-12 text-center" style="margin-top:1rem;"><a onclick="res()" href="#resform" style="border-radius: 2rem;" class="btn btn-lg btn-success">Make a Reservation</a> </div>
							</div>
							<div class="col-6 offset-3">
								<form action="#" id="resform" style="margin: 3rem 0; display:none; padding: 3rem; background: rgba(0,0,0,0.1); ">
									
									<div class="row">
									<div class="col-12 text-center"><h3>Reservation Form</h3></div>
									<div class="form-group col-6 text-center">
										<label for="">What Month Are you expected to arrive?</label>
										<select name="#" id="" class="form-control">
											<option value="january">January</option>
											<option value="febuary">Febuary</option>
											<option value="march">March</option>
											<option value="april">April</option>
											<option value="may">May</option>
											<option value="june">June</option>
											<option value="july">July</option>
											<option value="august">August</option>
											<option value="september">September</option>
											<option value="october">October</option>
											<option value="november">November</option>
											<option value="december">December</option>
										</select>
									</div>
									<div class="form-group col-6">
										<label for="">How do you intend to pay for th tour fee?</label>
										<select name="" id="" class="form-control">
											<option value="">Online payment</option>
											<option value="">Bank Transfer</option>
											<option value="">Bank Deposit</option>
											<option value="">Payment on Arrival</option>
										</select>
									</div>
									<div class="form-group col-12 text-center"><input type="submit" value="Submit reservation" class="btn btn-md btn-success" style="border-radius: 1rem;"></div>
									</div>
								</form>
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
</div>
<?php include "include/pljs.php";?>
<script src="js/jquery-3.2.1.min.js"></script>
<script>
	function res(){
		$("#resform").toggle();
	}
</script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/destinations.js"></script>
</body>
</html>