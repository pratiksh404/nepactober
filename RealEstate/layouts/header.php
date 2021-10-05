<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
		integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
		crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
		integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
		crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
		integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
		crossorigin="anonymous" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/utilities.css">
	<link rel="icon" href="img\favicon-02.jpg" type="image/gif" sizes="16x16">

	<title>Real Estate</title>
</head>

<body>
<div class="loader"></div>


	<div class="site-header">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light bg-white">
				<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo" class="img-fluid"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">about us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="house.php">house</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="land.php">land</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="rent.php">rent</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">contact us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn-primary whiteText" href="postad.php" style="color: #fff;">post ad</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn-primary whiteText" href="#" style="color: #fff;" data-toggle="modal"
								data-target="#myModal">login/signup</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		
			<hr>
	</div>


	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h5>Login</h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<!--asdfasdff-->
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
								aria-controls="home" aria-selected="true">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
								aria-controls="profile" aria-selected="false">Signup</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="buttons pb-3 pt-3">
								<a href="#">
									<div class="fbbutton">
										<div class="d-flex">
											<i class="fab fa-facebook-square pr-1"></i>
											<h6 class="pl-1">Continue With Facebook</h6>
										</div>
									</div>
								</a>
							</div>
							<div class="buttons pb-3">
								<a href="#">
									<div class="googlebutton">
										<div class="d-flex">
											<i class="fab fa-google-plus-g pr-1"></i>
											<h6 class="pl-1">Continue With Google+</h6>
										</div>
									</div>
								</a>
							</div>
							<div class="signup">
								<label for="email">Email address</label>
								<input type="email" placeholder="eg. xyz@email.com" required class="w-100 mb-3 p-1"
									id="email" name="email">
							</div>
							<div class="signup">
								<label for="password">Password</label>
								<input type="password" placeholder="Enter Password" required
									class="w-100 pwField mb-3 p-1" id="password" name="password"><i
									class="fas fa-eye pw"></i>
							</div>
							<div class="d-flex">
          						<a href="#" class="btn btn-primary catBut mar10">Sign In<i class="fas fa-sign-in-alt pl-2"></i></a>
								<a href="forgotpassword.php" class="forgot pl-2 pt-3">Forgot Password?</a>
							</div>
						</div>
						
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="buttons py-3">
								<a href="#">
									<div class="fbbutton">
										<div class="d-flex">
											<i class="fab fa-facebook-square pr-1"></i>
											<h6 class="pl-1">Continue With Facebook</h6>
										</div>
									</div>
								</a>
							</div>
							<div class="buttons pb-3">
								<a href="#">
									<div class="googlebutton">
										<div class="d-flex">
											<i class="fab fa-google-plus-g pr-1"></i>
											<h6 class="pl-1">Continue With Google+</h6>
										</div>
									</div>
								</a>
							</div>
							<div class="signup">
								<label for="name">Full Name</label>
								<input type="name" placeholder="Full Name" required class="w-100 mb-3 p-1" id="name"
									name="name">
							</div>
							<div class="signup">
								<label for="email">Email address</label>
								<input type="email" placeholder="eg. xyz@email.com" required class="w-100 mb-3 p-1"
									id="email" name="email">
							</div>
							<div class="position-relative signup">
								<label for="password">Password</label>
								<input type="password" placeholder="Enter Password" required
									class="w-100 pwField mb-3 p-1" id="password" name="password"><i
									class="fas fa-eye pwSignup"></i>
							</div>
							<div class="signup">
								<label for="number">Mobile Number</label>
								<input type="number" placeholder="Enter Number" required class="w-100 pwField mb-3 p-1"
									id="number" name="number">
							</div>
							<a href="#" class="btn btn-lg btn-block signupButton mt-2">Sign Up<i class="fas fa-user-plus pl-2"></i></a>
						</div>

					</div>
				
					<!--asdfasdff-->


				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->