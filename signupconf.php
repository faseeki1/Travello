<?php
$connect = mysqli_connect("localhost","root","","travello");	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Signup Confirmation - Travello</title>
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
    .btn-submlg{
        background: black;
        color: white!important;
        padding: 6px 1.7rem;
        border-radius: 2rem;
        cursor: pointer;
		transition: 1s all;
    }
	.signup-arrow{
		display: none;
		transition: 1s all;
	}
	.btn-submlg:hover .signup-arrow{
		transition: 1s all;
		display: inline;
	}
	
</style>

<?php

	if(isset($_POST["signupbtn"])){
		$user_firstname = mysqli_real_escape_string($connect,$_POST["firstname"]); 
		$user_lastname = mysqli_real_escape_string($connect,$_POST["lastname"]);
		$username = mysqli_real_escape_string($connect,$_POST["username"]);
		$user_email = mysqli_real_escape_string($connect,$_POST["email"]);
		$user_password = mysqli_real_escape_string($connect,$_POST["password"]);
		$user_password = password_hash($user_password,PASSWORD_BCRYPT,array("cost"=>10));
		if($connect){
			$check_username = mysqli_query($connect,"SELECT * FROM users WHERE username = '$username'");
			$row_check = mysqli_num_rows($check_username);
			if($row_check == 0){
				$check_email = mysqli_query($connect,"SELECT * FROM users WHERE email = '$user_email'");
				$check_email_username = mysqli_fetch_assoc($check_email)["username"];
				$email_row_check = mysqli_num_rows($check_email);
				if($email_row_check == 0){
					$submit =  mysqli_query($connect,"INSERT INTO users(firstname,lastname,email,username,password) VALUES('$user_firstname','$user_lastname','$user_email','$username','$user_password')");
					if($submit){
						$conf_msg = "<h6>Dear $user_firstname $user_lastname, your Signup was successful. Click the button below to login</h6>";
						$conf_btn = "<a href='login.php' class='btn-submlg btn-sm btn'>Go to Login <i class='fa fa-arrow-right signup-arrow'></i> </a>";
					}
				}else{
					$conf_msg = "<h6 class='text-danger'> Signup failed. You already have an account with Travello. Forgot password? Click link below to recover.</h6>";
					$conf_btn = "<a href='signup.php' class='btn-submlg btn-sm btn'><i class='fa fa-arrow-left signup-arrow'></i> Go back to sign up </a>  <a href='#'  style='margin-left: 2rem;' class='btn-submlg btn-sm btn'>Recover Password <i class='fa fa-arrow-right signup-arrow'></i></a> ";
				}
			}else{
				/*for($i=0;$i<=6;$i++){
					$suggestions = $_POST["username"] .rand(0,10);
					$check_all_usernames = mysqli_query($connect,"SELECT * FROM users");
					while($get_usernames_row = mysqli_fetch_assoc($check_all_usernames)){
						$get_user = $get_usernames_row["username"];
						if($suggestions != $get_user){
							$username_suggestions +=  $suggestions .", ";
						}
					}
				}*/
				$conf_msg = "<h6 class='text-danger'> Signup failed. The username <strong>' $username '</strong> already exists. Please try another username.</h6>";
				$conf_btn = "<a href='signup.php' class='btn-submlg btn-sm btn'><i class='fa fa-arrow-left signup-arrow'></i> Go Back to signup  </a>";
			}

			
		}
	}else{
		header("Location: signup.php");
	}
?>

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
						<div class="home_search_title"><i class="fa fa-user"></i> Sign up Confirmation</div>
						<div class="home_search_content">
							<div class="row text-center">
                                <div class="col-12">
                                    <h6><?php echo $conf_msg;?></h6>
                                </div>
                                <div class="col-12">
									<?php echo $conf_btn;?>
                                </div>
                            </div>
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
<?php include "include/pljs.php";?>
<script src="js/jquery-3.2.1.min.js"></script>
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