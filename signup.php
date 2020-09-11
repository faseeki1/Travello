<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sign up - Travello</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">

<style>
	.login{
		background-image: linear-gradient(to bottom right,rgba(0, 247, 255,0.9),rgba(255, 123, 0,0.8));
		padding: 10px 1.4rem;
		border-radius: 2rem;
		transition: .7s all;
	}
	.login:hover{
		background-image: linear-gradient(to bottom right,rgba(255, 123, 0,0.8),rgba(0, 247, 255,0.9));
		padding: 10px 1.9rem;
	}
	.signup{
		background-image: linear-gradient(to bottom right,rgba(255, 123, 0,0.8),rgba(0, 247, 255,0.9));
		padding: 10px 1.4rem;
		border-radius: 2rem;
		transition: .7s all;
		cursor: pointer;
	}
	.signup:hover{
		padding: 10px 1.9rem;
		background-image: linear-gradient(to bottom right,rgba(0, 247, 255,0.9),rgba(255, 123, 0,0.8));
	}
	.home_search_container{
		background: rgba(0,0,0,0);
	}
	@media (max-width:580px){
		.home_search_container{
			top:-8rem;
		}
	}
	@media (min-width:581px){
		.home_search_container{
			top:-30rem;
		}
	}
    .btn-subm{
        background: black;
        color: white!important;
        padding: 6px 1.7rem;
        border-radius: 2rem;
        cursor: pointer;
    }
	
</style>
<?php include "include/plcss.php";?>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
							<div class="logo"><a href="index.html">Travello</a></div>
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">About us</a></li>
									<li><a href="destinations.php">Destinations</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li class="active"><a href="login.php" class="login"><i class="fa fa-user"></i> Login/Signup</a></li>
								</ul>
							</nav>
							<div class="header_phone ml-auto">Call us: 00-56 445 678 33 <span> <a href="admin/admin.php" style="margin-left: 10px; padding: 10px 1rem; background: black; color: white; border-radius: 50%;"> <i class="fa fa-user-secret text-white"></i> </a> </span></div>

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

	<!-- Menu (Mobile) -->

	<div class="menu">
		<div class="menu_header d-flex flex-row align-items-center justify-content-start">
			<div class="menu_logo"><a href="index.html">Travello</a></div>
			<div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
		</div>
		<div class="menu_content">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="destinations.php">Destinations</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li class="active"><a href="login.php" class="login"><i class="fa fa-user"></i> Login/Signup</a></li>
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
		<div class="background_image" style="background-image:url(images/about.jpg)"></div>
	</div>

	<!-- Search -->

	<div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
						<div class="home_search_title"><i class="fa fa-edit"></i> Sign up here</div>
						<div class="home_search_content">
							<form action="signupconf.php" onsubmit="verify();" method="post" class="home_search_form" id="home_search_form">
								<div class="row text-center">
									<div class="col-6 form-group">
										<label for="name">Enter your Firstname:<span class="text-danger">*</span> </label>
										<input type="text" name="firstname" class="form-control" required>
									</div>
									<div class="col-6 form-group">
										<label for="name">Enter your Lastname:<span class="text-danger">*</span></label>
										<input type="text" name="lastname" class="form-control" required>
									</div>
									<div class="col-6 form-group">
										<label for="name">Enter your Email:<span class="text-danger">*</span></label>
										<input type="email" name="email" class="form-control" required>
									</div>
									<div class="col-6 form-group">
										<label for="name">Enter Preferred Username:<span class="text-danger">*</span></label>
										<input type="text" name="username" class="form-control" required>
									</div>
									<div class="col-6 form-group">
										<label for="name">Enter Preferred Password:<span class="text-danger">*</span></label>
										<input type="password" id="p1" onblur="hidelabel1()" onfocus="showlabel1();" onkeyup="compare();"  name="password" class="form-control" required>
										<p id="plabel1" style="display:none;" class="text-success">Password must be more than 4 characters</p>
									</div>
									<div class="col-6 form-group">
										<label for="name">Confirm Password:<span class="text-danger">*</span></label>
										<input type="password" id="p2" name="password2" onblur="hidelabel2()" onfocus="showlabel2()" onkeyup="compare();" class="form-control" required>
										<p id="plabel2" style="display:none;" class="text-success">Password must be more than 4 characters</p>
									</div>
									<div class="col-12 alert h4" style="display:none;" id="comp_mssg">
										aa
									</div>
									<div class="col-12 form-group">
										<input type="submit" name="signupbtn" class="btn btn-primary btn-lg signup" value="Sign up">
                                    </div>
                                    <div class="col-12 form-group">
										<p>Already have an account? Click <strong><a href="login.php">here</a></strong> to Login</p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle"></div>
					<div class="section_title"><h2></h2></div>
				</div>
			</div>
			<!-- <div class="row about_row">
				<div class="col-lg-6">
					<div class="about_content">
						<div class="text_highlight"></div>
						<div class="about_text">
							<p> </p>
						</div>
						<div class="button about_button"><a href="#">read more</a></div>
					</div>
				</div>
			</div> -->
		</div>
	</div>

	

	<!-- Why Choose Us -->

	

	

	<!-- Footer -->

	
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script>
function verify(){
	let pass1 = document.getElementById("p1").value;
	let pass2 = document.getElementById("p2").value;
	if(pass1 != pass2){
		event.preventDefault();
		window.alert("Please password fields must be the same");
		
	}

	if(pass1.length <= 4){
		event.preventDefault();
		window.alert("Please Password must be more than 4 characters");
		
	}
}
function showlabel1(){
	let label1 = document.getElementById("plabel1");
	label1.style.display = "block";
}
function hidelabel1(){
	let label1 = document.getElementById("plabel1");
	label1.style.display = "none";
}
function showlabel2(){
	let label2 = document.getElementById("plabel2");
	label2.style.display = "block";
	

	
}
function hidelabel2(){
	let label2 = document.getElementById("plabel2");
	label2.style.display = "none";
}

function compare(){
	
	let pass1 = document.getElementById("p1").value;
	let pass2 = document.getElementById("p2").value;
	let  comp_msg = document.getElementById("comp_mssg");
	
	if((pass1 == "" && pass2== "") || (pass1 != "" && pass2== "")){
		comp_msg.style.display = "none";
	}else{
		comp_msg.style.display = "block";
		if(pass1 == pass2){
		comp_msg.innerHTML = "Password match";
		comp_msg.classList.add("alert-success");
		comp_msg.classList.remove("alert-danger");
		
		}else{
		comp_msg.innerHTML = "Passwords do not match";
		comp_msg.classList.add("alert-danger");
		comp_msg.classList.remove("alert-success");
		}
	}
	
}
	
</script>
<?php include "include/pljs.php";?>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/about.js"></script>
</body>
</html>