<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Wilio Survey, Quotation, Review and Register form Wizard by Ansonika.">
	<meta name="author" content="Ansonika">
	<title>Wilio | Survey, Quotation, Review and Register form Wizard</title>



	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="<?php echo base_url('assets1/') ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url('assets1/') ?>css/menu.css" rel="stylesheet">
	<link href="<?php echo base_url('assets1/') ?>css/style.css" rel="stylesheet">
	<link href="<?php echo base_url('assets1/') ?>css/vendors.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="<?php echo base_url('assets1/') ?>css/custom.css" rel="stylesheet">

	<!-- MODERNIZR MENU -->
	<script src="<?php echo base_url('assets1/') ?>js/modernizr.js"></script>

</head>

<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<nav>
		<ul class="cd-primary-nav">
			<li><a href="index.html" class="animated_link">Home</a></li>
			<li><a href="quotation-wizard-version.html" class="animated_link">Quote Version</a></li>
			<li><a href="review-wizard-version.html" class="animated_link">Review Version</a></li>
			<li><a href="registration-wizard-version.html" class="animated_link">Registration Version</a></li>
			<li><a href="about.html" class="animated_link">About Us</a></li>
			<li><a href="contacts.html" class="animated_link">Contact Us</a></li>
		</ul>
	</nav>
	<!-- /menu -->

	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-6 content-left">
				<div class="content-left-wrapper">
					<a href="index.html" id="logo"><img src="img/logo.png" alt="" width="49" height="35"></a>
					<div id="social">
						<ul>
							<li><a href="#0"><i class="icon-facebook"></i></a></li>
							<li><a href="#0"><i class="icon-twitter"></i></a></li>
							<li><a href="#0"><i class="icon-google"></i></a></li>
							<li><a href="#0"><i class="icon-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->
					<div>
						<figure><img src="img/info_graphic_2.svg" alt="" class="img-fluid"></figure>
						<h2>Registration Wizard</h2>
						<p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel. Adhuc invidunt duo ex. Eu tantas dolorum ullamcorper qui.</p>
						<a href="#0" class="btn_1 rounded">Purchase this template</a>
						<a href="#start" class="btn_1 rounded mobile_btn">Start Now!</a>
					</div>
					<div class="copy">© 2021 Wilio</div>
				</div>
				<!-- /content-left-wrapper -->
			</div>
			<!-- /content-left -->

			<div class="col-lg-6 content-right" id="start">
				<div id="wizard_container">
					<div id="top-wizard">
						<div id="progressbar"></div>
					</div>
					<!-- /top-wizard -->
					<form id="wrapped" method="POST">
						<input id="website" name="website" type="text" value="">
						<!-- Leave for security protection, read docs for details -->
						<div id="middle-wizard">
							<div class="step">
								<h3 class="main_question"><strong>1/3</strong>Please fill with your details</h3>
								<div class="form-group">
									<input type="text" name="first_name" class="form-control required" placeholder="First Name" onchange="getVals(this, 'first_name');">
								</div>
								<div class="form-group">
									<input type="text" name="last_name" class="form-control required" placeholder="Last Name" onchange="getVals(this, 'last_name');">
								</div>
								<div class="form-group">
									<input type="email" name="email" class="form-control required" placeholder="Your Email" onchange="getVals(this, 'email');">
								</div>
								<div class="form-group">
									<div class="styled-select clearfix">
										<select class="wide required" name="country" onchange="getVals(this, 'country');">
											<option value="">Your Country</option>
											<option value="Europe">Europe</option>
											<option value="Asia">Asia</option>
											<option value="North America">North America</option>
											<option value="South America">South America</option>
											<option value="Oceania">Oceania</option>
										</select>
									</div>
								</div>
								<div class="form-group terms">
									<label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a>
										<input type="checkbox" name="terms" value="Yes" class="required">
										<span class="checkmark"></span>
									</label>
								</div>
							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>2/3</strong>Plase provide your account details</h3>
								<div class="form-group">
									<input type="text" name="user_name" class="form-control required" placeholder="User name" onchange="getVals(this, 'user_name');">
								</div>
								<div class="form-group">
									<input class="form-control" type="password" id="password1" name="password1" placeholder="Password" onchange="getVals(this, 'password');">
								</div>
								<div class="form-group">
									<input class="form-control" type="password" id="password2" name="password2" placeholder="Confirm Password">
								</div>
								<div id="pass-info" class="clearfix"></div>
							</div>
							<!-- /step-->
							<div class="submit step">
								<h3 class="main_question"><strong>3/3</strong>Summary</h3>
								<div class="summary">
									<ul>
										<li><strong>1</strong>
											<h5>Personal Details</h5>
											<ul>
												<li><label>First Name</label>: <span id="first_name"></span></li>
												<li><label>Last Name</label>: <span id="last_name"></span></li>
												<li><label>Email</label>: <span id="email"></span></li>
												<li><label>Country</label>: <span id="country"></span></li>
											</ul>
										</li>
										<li><strong>2</strong>
											<h5>Account Details</h5>
											<ul>
												<li><label>User Name</label>: <span id="user_name"></span></li>
												<li><label>Password</label>: <span id="password"></span></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							<!-- /step-->
						</div>
						<!-- /middle-wizard -->
						<div id="bottom-wizard">
							<button type="button" name="backward" class="backward">Prev</button>
							<button type="button" name="forward" class="forward">Next</button>
							<button type="submit" name="process" class="submit">Submit</button>
						</div>
						<!-- /bottom-wizard -->
					</form>
				</div>
				<!-- /Wizard container -->
			</div>
			<!-- /content-right-->
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
	<!-- /menu button -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->


	<!-- COMMON SCRIPTS -->
	<script src="<?php echo base_url('assets1/') ?>js/jquery-3.5.1.min.js"></script>
	<script src="<?php echo base_url('assets1/') ?>js/common_scripts.min.js"></script>
	<script src="<?php echo base_url('assets1/') ?>js/velocity.min.js"></script>
	<script src="<?php echo base_url('assets1/') ?>js/functions.js"></script>

	<!-- Wizard script -->
	<script src="<?php echo base_url('assets1/') ?>js/review_func.js"></script>

</body>

</html>