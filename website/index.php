<?php
include_once 'includes/connector.php';
include_once 'includes/functions.php';

StartSession();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>S.E.R.S.H Home</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<style>
		.team-text {
			padding: 10%;
			margin-top: 20%; 
			margin-bottom: auto; 
			margin-left: auto; 
			margin-right: auto; 
			text-align: center;
		}
	</style>
	<link rel="icon" href="images/ChatBotIcon.png">
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./images/bg-01.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">
				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.php">
							<img class="logo" src="img/logo.png" alt="logo">
							<img class="logo-alt" src="img/logo-alt.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#team">Team</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php if (login_check($mysqli) == true) : ?>
						<li><a>Welcome back, <?php echo htmlentities($_SESSION['username']); ?>!<span></span></a></li>
						<li><a href="includes/logout.php">Log Out<span></span></a></li>
					<?php else : ?>
						<li><a href="loginIn.php">Log In<span></span></a></li>
					<?php endif; ?>
                </ul>
				<!-- /Main navigation -->
			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">
					<!-- home content -->
					<div class="chatbox">
						<iframe src="http://ttu295439.ttu.edu:5000/" width="90%" height="480px"></iframe>
					</div>
					<!-- /home content -->
				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- About -->
	<div id="about" class="section md-padding bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="section-title">
						<h2>Our Project: </h2>
					</div>
				</div>

				<div class="col-md-6 col-sm-6">
					<ul class="nav nav-tabs" role="tablist">
						<li class="active"><a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Project</a></li>
						  <li><a href="#tab02" aria-controls="tab02" role="tab" data-toggle="tab">Completed Requirements</a></li>
						  <li><a href="#tab03" aria-controls="tab03" role="tab" data-toggle="tab">Pending Requirements</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane active" id="tab01" role="tabpanel">
							<div class="tab-pane-item">
								</br>
								<h3>Project Description</h3>
								<p>The goal of this project is to have a responsive AI bot have a simple conversation with a user. This was a great way to 
								organize small tasks to different people on the team so it would be combined into a medium scale project. 
								The LogIn will allow for the AI to learn basic understanding of the user and use it for future conversation purposes. 
								If not logged in it will not learn anything yet It is still able to hold a basic conversation.</p>
							</div>
						</div>

						<div class="tab-pane" id="tab02" role="tabpanel">
							<div class="tab-pane-item">
								</br>
								<h3>Requirement 1</h3>
								<p>The bot must be able to learn from the user's responses.</p>
							</div>
					
							<div class="tab-pane-item">
								<h3>Requirement 2</h3>
								<p>The user must be able to type an input and receive a response.</p>
							</div>
				
							<div class="tab-pane-item">
								<h3>Requirement 3</h3>
								<p>The user must be able to create an account and login.</p>
							</div>
						</div>

						<div class="tab-pane" id="tab03" role="tabpanel">
							<div class="tab-pane-item">
								</br>
								<h3>Requirement 1</h3>
								<p>Mauris rutrum est at fringilla pulvinar. Nam ligula urna, lobortis non scelerisque vel, molestie eu massa. Nullam mattis elit at tortor accumsan.</p>
							</div>
					
							<div class="tab-pane-item">
								<h3>Requirement 2</h3>
								<p>Quisque ullamcorper sem quis sapien cursus efficitur. Sed id sodales ipsum. Morbi eleifend tempus erat sit amet vehicula. Nulla at posuere tellus, non mattis erat. Nulla id massa gravida.</p>
						   </div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-sm-6">
					<div class="feature-image">
						<img src="images/ChatBotIcon.png" width="50%" class="img-responsive" style="display: block; margin-left: auto; margin-right: auto;" alt="Robot Head">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /About -->

	<!-- Team -->
	<div id="team" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Our Team</h2>
				</div>
				<!-- /Section header -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./images/AntonioImg.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<p class="team-text">Juan is 21 years old currently majoring in Computer Science with an expected graduation date of 2019.</p>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Juan Antonio Sillero</h3>
							<span>Web Designer</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./images/LuisImg.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<p class="team-text">Luis is 28 years old and is currently majoring in Computer Science. He works as a Programmer in the IT department and graduates in May 2019.</p>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Luis Rausseo</h3>
							<span>Full Stack Developer</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./images/MauricioImg.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<p class="team-text">Mauricio Barbier is 22 years old and is currently majoring in Computer Science with an expected graduation date of 2019.</p>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Mauricio Barbier</h3>
							<span>Web Designer</span>
						</div>
					</div>
				</div>
				<!-- /team -->
				
				<div class="col-sm-2">
				</div>
				
				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./images/BradImg.jpg" alt="">
							<div class="overlay">
								<p class="team-text">Brad is currently 23 years old. He is majoring in Computer Science with an expected graduation date of May 2019.</p>
							</div>
						</div>
						<div class="team-content">
							<h3>Bradley Teltschik</h3>
							<span>Cybersecurity</span>
						</div>
					</div>
				</div>
				<!-- /team -->
				
				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./images/CalebImg.jpg" alt="">
							<div class="overlay ">
								<p class="team-text">Caleb is currently 21 years old. He is majoring in Computer Science with an expected graduation date of May 2019.</p>
							</div>
						</div>
						<div class="team-content">
							<h3>Caleb Sanchez</h3>
							<span>Python Developer</span>
						</div>
					</div>
				</div>
				<!-- /team -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Team -->


	<!-- Contact -->
	<div id="contact" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Get in touch</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Phone</h3>
						<p>512-421-3940</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>email@support.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Address</h3>
						<p>1739 Bubby Drive</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact form -->
				<div class="col-md-8 col-md-offset-2">
					<form class="contact-form">
						<input type="text" class="input" placeholder="Name">
						<input type="email" class="input" placeholder="Email">
						<input type="text" class="input" placeholder="Subject">
						<textarea class="input" placeholder="Message"></textarea>
						<button class="main-btn">Send message</button>
					</form>
				</div>
				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->


	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.php"><img src="img/logo-alt.png" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2017. All Rights Reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>
