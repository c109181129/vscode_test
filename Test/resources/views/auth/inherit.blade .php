<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=PT+Serif:ital@0;1&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet"href="{{asset('assets/style.css')}}">

	<!-- Font Icons -->
	<link rel="stylesheet"href="{{asset('assets/css/font-icons.css')}}">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Document Title
	============================================= -->
	<title>Login - Layout 3 | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">
			
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section class="page-title bg-transparent">
			<div class="container">
				<div class="page-title-row">

					<div class="page-title-content">
						<h1>My Account</h1>
					</div>

					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Templates</a></li>
							<li class="breadcrumb-item active" aria-current="page">Login &amp; Register 3</li>
						</ol>
					</nav>

				</div>
			</div>
		</section><!-- .page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="accordion accordion-lg mx-auto mb-0" style="max-width: 550px;">

						<div class="accordion-header">
							<div class="accordion-icon">
								<i class="accordion-closed fa-solid fa-lock"></i>
								<i class="accordion-open bi-unlock"></i>
							</div>
							<div class="accordion-title">
								Login to your Account
							</div>
						</div>
						<div class="accordion-content">
							<form id="login-form" name="login-form" class="row mb-0" action="#" method="post">
								<div class="col-12 form-group">
									<label for="login-form-username">Username:</label>
									<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control">
								</div>

								<div class="col-12 form-group">
									<label for="login-form-password">Password:</label>
									<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control">
								</div>

								<div class="col-12 form-group">
									<div class="d-flex justify-content-between">
										<button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
										<a href="#">Forgot Password?</a>
									</div>
								</div>
							</form>
						</div>

						<div class="accordion-header">
							<div class="accordion-icon">
								<i class="accordion-closed bi-person"></i>
								<i class="accordion-open bi-check-circle-fill"></i>
							</div>
							<div class="accordion-title">
								New Signup? Register for an Account
							</div>
						</div>
						<div class="accordion-content">
							<form id="register-form" name="register-form" class="row mb-0" action="#" method="post">
								<div class="col-12 form-group">
									<label for="register-form-name">Name:</label>
									<input type="text" id="register-form-name" name="register-form-name" value="" class="form-control">
								</div>

								<div class="col-12 form-group">
									<label for="register-form-email">Email Address:</label>
									<input type="text" id="register-form-email" name="register-form-email" value="" class="form-control">
								</div>

								<div class="col-12 form-group">
									<label for="register-form-username">Choose a Username:</label>
									<input type="text" id="register-form-username" name="register-form-username" value="" class="form-control">
								</div>

								<div class="col-12 form-group">
									<label for="register-form-phone">Phone:</label>
									<input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control">
								</div>

								<div class="col-12 form-group">
									<label for="register-form-password">Choose Password:</label>
									<input type="password" id="register-form-password" name="register-form-password" value="" class="form-control">
								</div>

								<div class="col-12 form-group">
									<label for="register-form-repassword">Re-enter Password:</label>
									<input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control">
								</div>

								<div class="col-12 form-group">
									<button class="button button-3d button-black m-0" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
								</div>
							</form>
						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer >
			
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('assets/js/functions.js')}}"></script>

</body>
</html>