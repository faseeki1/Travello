

<?php include "includes/login_check.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Travello</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
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
	.name{
		font-size: 1.2rem;
		color: white;
		font-weight: 700;
	}
	.last-seen{
		color: white;
		font-size: .9rem;
		font-weight: 600;
    }
    .nav-tabs>li>a{
        padding: 3rem 3rem 3px 3rem;
        color: gray;
        font-weight: 100;
        font-size:1.1rem;
    }
    .nav-tabs>li>a.active{
        border-radius: 7px;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
        border: 1px solid rgba(0,0,0,0.2);
        background:white;
        border-bottom: none;
    }
    .change{
        padding: 11px 2rem;
        border-radius: 2rem;
        margin-bottom: -3rem;
    }
</style>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header" style="background-image:url(images/home_slider.jpg);">
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
							<div class="logo"><a href="index.html">Travello</a></div>
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li class="active"><a href="index.php">Home</a></li>
									<li><a href="about.html">About us</a></li>
									<li><a href="#">Services</a></li>
									<li class="name">Welcome, <?php echo $profile_firstname ." " .$profile_lastname;?></li>
									<li><a href="logout.php" class="login">Logout</a></li>
									
								</ul>
							</nav>
							<div class="last-seen ml-auto" style="margin-right: -9px;">Last Login: <?php echo $profile_last_login;?></div>

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
				<li><a href="inex.html">Home</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="news.html">Sign up</a></li>
				<li><a href="contact.html">Login</a></li>
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
	
	

	<!-- Profile body-->

	<div class="destinations" id="destinations" style="top:5rem; ">
		<div class="container">
			<div class="row">
            <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center text-primary">
                            <h4><?php echo $profile_firstname ." " .$profile_lastname;?> - Your Account</h4>
                        </div>
                        <div class="panel-body" style="margin-top:2rem;">
                            <ul class="nav nav-tabs">
                                <li class="active text-center text-primary"><div><i style="margin-top: 1.5rem;" class="fa fa-2x text-primary fa-user"></i></div> <a class="text-primary" href="#home" data-toggle="tab"> PROFILE INFORMATION</a>
                                </li>
                                <li class="text-center text-primary"><div><i style="margin-top: 1.5rem;" class="fa fa-2x text-primary fa-bookmark"></i></div> <a class="text-primary" href="#profile" data-toggle="tab"> SAVED DESTINATIONS</a>
                                </li>
                                <li class="text-center text-primary"><div><i style="margin-top: 1.5rem;" class="fa fa-2x text-primary fa-history"></i></div> <a class="text-primary" href="#messages" data-toggle="tab"> DESTINATION HISTORY</a>
                                </li>
                                <li class="text-center text-primary"><div><i style="margin-top: 1.5rem;" class="fa fa-2x text-primary fa-cog "></i></div> <a class="text-primary" href="#settings" data-toggle="tab"> ACCOUNT SETTINGS</a>
                                </li>
                            </ul>

                            <div class="tab-content text-black" style="margin-top:2rem;">
                                <div class="tab-pane fade active in" id="home" >
                                    <div class="row text-center">
                                    <div class="col-md-12 text-center"><img src="images/team_4.jpg" alt="" style="border-radius:50%;"></div>
                                    <div class="col-3">
                                        <h4>Firstname:</h4>
                                        <p class="text-primary" style="text-transform:capitalize;"><?php echo $profile_firstname; ?></p>
                                        <br>
                                        <h6>Change:</h6>
                                        <form action="#">
                                            <input type="text" class="form-control"> <br>
                                             <button href="profile.php?change" class="change text-white bg-primary">change</button>
                                        </form>
                                    </div>
                                    <div class="col-3">
                                        <h4>Lastname:</h4>
                                        <p class="text-primary" style="text-transform:capitalize;"><?php echo $profile_lastname; ?></p>
                                        <br>
                                        <h6>Change:</h6>
                                        <form action="#">
                                            <input type="text" class="form-control"> <br>
                                             <button href="profile.php?change" class="change text-white bg-primary">change</button>
                                        </form>
                                       
                                    </div>
                                    <div class="col-3">
                                        <h4>Email:</h4>
                                        <p class="text-primary" style="text-transform:capitalize;"><?php echo $profile_email; ?></p>
                                        <br>
                                        <h6>Change:</h6>
                                        <form action="#">
                                            <input type="text" class="form-control"> <br>
                                             <button href="profile.php?change" class="change text-white bg-primary">change</button>
                                        </form>
                                    </div>
                                    <div class="col-3">
                                        <h4>Last login:</h4>
                                        <p class="text-primary" style="text-transform:capitalize;"><?php echo $profile_last_login; ?></p>
                                    </div>
  
                                </div>
                                    
                                    
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Saved Destination Tab</h4>
                                    <p class="text-primary" style="text-transform:capitalize;">Saved destinations</p>
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Destination History Tab</h4>
                                    <p class="text-primary" style="text-transform:capitalize;">Destination History</p>
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h4>Settings Tab</h4>
                                    <p class="text-primary" style="text-transform:capitalize;">Setting</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			
		</div>
	</div><!--/Profile body ends here-->

	<!-- Testimonials -->

	<div class="testimonials" id="testimonials">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">simply amazing places</div>
					<div class="section_title"><h2>Testimonials</h2></div>
				</div>
			</div>
			<div class="row testimonials_row">
				<div class="col">

					<!-- Testimonials Slider -->
					<div class="testimonials_slider_container">
						<div class="owl-carousel owl-theme testimonials_slider">
							
							<!-- Slide -->
							<div class="owl-item text-center">
								<div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis vehicula odio.</div>
								<div class="testimonial_author">
									<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
										<div>john turner,</div>
										<div>client</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item text-center">
								<div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis vehicula odio.</div>
								<div class="testimonial_author">
									<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
										<div>john turner,</div>
										<div>client</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item text-center">
								<div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis vehicula odio.</div>
								<div class="testimonial_author">
									<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
										<div>john turner,</div>
										<div>client</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="test_nav">
			<ul class="d-flex flex-column align-items-end justify-content-end">
				<li><a href="#">City Breaks Clients<span>01</span></a></li>
				<li><a href="#">Cruises Clients<span>02</span></a></li>
				<li><a href="#">All Inclusive Clients<span>03</span></a></li>
			</ul>
		</div>
	</div>

	<!-- News -->

	<div class="news" id="news">
		<div class="container">
			<div class="row">
				<div class="col-xl-8">
					<div class="news_container">
						
						<!-- News Post -->
						<div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
							<div class="news_post_image"><img src="images/news_1.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
									<div>02</div>
									<div>june</div>
								</div>
								<div class="news_post_title"><a href="#">Best tips to travel light</a></div>
								<div class="news_post_category">
									<ul>
										<li><a href="#">lifestyle & travel</a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet.</p>
								</div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
							<div class="news_post_image"><img src="images/news_2.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
									<div>01</div>
									<div>june</div>
								</div>
								<div class="news_post_title"><a href="#">Best tips to travel light</a></div>
								<div class="news_post_category">
									<ul>
										<li><a href="#">lifestyle & travel</a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p>Tempor massa et laoreet malesuada. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo.</p>
								</div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
							<div class="news_post_image"><img src="images/news_3.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
									<div>29</div>
									<div>may</div>
								</div>
								<div class="news_post_title"><a href="#">Best tips to travel light</a></div>
								<div class="news_post_category">
									<ul>
										<li><a href="#">lifestyle & travel</a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p>Vivamus massa.Tempor massa et laoreet malesuada. Aliquam nulla nisl, accumsan sit amet mattis.</p>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!-- News Sidebar -->
				<div class="col-xl-4">
					<div class="travello">
						<div class="background_image" style="background-image:url(images/travello.jpg)"></div>
						<div class="travello_content">
							<div class="travello_content_inner">
								<div></div>
								<div></div>
							</div>
						</div>
						<div class="travello_container">
							<a href="#">
								<div class="d-flex flex-column align-items-center justify-content-end">
									<span class="travello_title">Get a 20% Discount</span>
									<span class="travello_subtitle">Buy Your Vacation Online Now</span>
								</div>
							</a>
						</div>
					</div>
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

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>