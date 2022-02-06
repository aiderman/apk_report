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
	<!-- <a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a> -->
	<!-- /menu -->

	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-6 content-left">

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
								<h3 class="main_question"><strong>Langkah 1</strong>How do you describe your overall satisfaction?</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Service provided</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-1-5" name="rating_input_1" value="5 Stars" onchange="getVals(this, 'rating_input_1');">
										<label for="rating-input-1-5" class="rating-star"></label>
										<input type="radio" class="required rating-input" id="rating-input-1-4" name="rating_input_1" value="4 Stars" onchange="getVals(this, 'rating_input_1');">
										<label for="rating-input-1-4" class="rating-star"></label>
										<input type="radio" class="required rating-input" id="rating-input-1-3" name="rating_input_1" value="3 Stars" onchange="getVals(this, 'rating_input_1');">
										<label for="rating-input-1-3" class="rating-star"></label>
										<input type="radio" class="required rating-input" id="rating-input-1-2" name="rating_input_1" value="2 Stars" onchange="getVals(this, 'rating_input_1');">
										<label for="rating-input-1-2" class="rating-star"></label>
										<input type="radio" class="required rating-input" id="rating-input-1-1" name="rating_input_1" value="1 Star" onchange="getVals(this, 'rating_input_1');">
										<label for="rating-input-1-1" class="rating-star"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Product's quality</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-2-5" name="rating_input_2" value="5 Stars" onchange="getVals(this, 'rating_input_2');">
										<label for="rating-input-2-5" class="rating-star"></label>
										<input type="radio" class="required rating-input" id="rating-input-2-4" name="rating_input_2" value="4 Stars" onchange="getVals(this, 'rating_input_2');">
										<label for="rating-input-2-4" class="rating-star"></label>
										<input type="radio" class="required rating-input" id="rating-input-2-3" name="rating_input_2" value="3 Stars" onchange="getVals(this, 'rating_input_2');">
										<label for="rating-input-2-3" class="rating-star"></label>
										<input type="radio" class="required rating-input" id="rating-input-2-2" name="rating_input_2" value="2 Stars" onchange="getVals(this, 'rating_input_2');">
										<label for="rating-input-2-2" class="rating-star"></label>
										<input type="radio" class="required rating-input" id="rating-input-2-1" name="rating_input_2" value="1 Star" onchange="getVals(this, 'rating_input_2');">
										<label for="rating-input-2-1" class="rating-star"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Support</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-3-5" name="rating_input_3" value="5 Stars" onchange="getVals(this, 'rating_input_3');">
										<label for="rating-input-3-5" class="rating-star"></label>
										<input type="radio" class="required rating-input" id="rating-input-3-4" name="rating_input_3" value="4 Stars" onchange="getVals(this, 'rating_input_3');">
										<label for="rating-input-3-4" class="rating-star"></label>
										<input type="radio" class="required rating-input" id="rating-input-3-3" name="rating_input_3" value="3 Stars" onchange="getVals(this, 'rating_input_3');">
										<label for="rating-input-3-3" class="rating-star"></label>
										<input type="radio" class="required rating-input" id="rating-input-3-2" name="rating_input_3" value="2 Stars" onchange="getVals(this, 'rating_input_3');">
										<label for="rating-input-3-2" class="rating-star"></label>
										<input type="radio" class="required rating-input" id="rating-input-3-1" name="rating_input_3" value="1 Star" onchange="getVals(this, 'rating_input_3');">
										<label for="rating-input-3-1" class="rating-star"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">General satisfaction</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-4-5" name="rating_input_4" value="5 Stars" onchange="getVals(this, 'rating_input_4');">
										<label for="rating-input-4-5" class="rating-star"></label>
										<input type="radio" class="required rating-input" id="rating-input-4-4" name="rating_input_4" value="4 Stars" onchange="getVals(this, 'rating_input_4');">
										<label for="rating-input-4-4" class="rating-star"></label>
										<input type="radio" class="required rating-input" id="rating-input-4-3" name="rating_input_4" value="3 Stars" onchange="getVals(this, 'rating_input_4');">
										<label for="rating-input-4-3" class="rating-star"></label>
										<input type="radio" class="required rating-input" id="rating-input-4-2" name="rating_input_4" value="2 Stars" onchange="getVals(this, 'rating_input_4');">
										<label for="rating-input-4-2" class="rating-star"></label>
										<input type="radio" class="required rating-input" id="rating-input-4-1" name="rating_input_4" value="1 Star" onchange="getVals(this, 'rating_input_4');">
										<label for="rating-input-4-1" class="rating-star"></label>
									</span>
								</div>
							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>Langkah 2</strong>Your review and comments</h3>
								<div class="form-group add_top_30">
									<textarea name="review_message" class="form-control review_message required" placeholder="Write your review here..." onkeyup="getVals(this, 'review_message');"></textarea>
								</div>
							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>Langkah 3</strong>Please fill with your details</h3>
								<div class="form-group">
									<input type="text" name="firstname" class="form-control required" placeholder="First Name">
								</div>
								<div class="form-group">
									<input type="text" name="lastname" class="form-control required" placeholder="Last Name">
								</div>
								<div class="form-group">
									<input type="email" name="email" class="form-control required" placeholder="Your Email">
								</div>
								<div class="form-group">
									<input type="text" name="telephone" class="form-control" placeholder="Telephone">
								</div>
								<div class="form-group terms">
									<label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a>
										<input type="checkbox" name="terms" value="Yes" class="required">
										<span class="checkmark"></span>
									</label>
								</div>
							</div>
							<!-- /step-->
							<div class="submit step">
								<h3 class="main_question"><strong>Langkah 4</strong>Summary</h3>
								<div class="summary">
									<ul>
										<li><strong>1</strong>
											<h5>How do you describe your overall satisfaction?</h5>
											<ul>
												<li><label>Service provided</label> <span id="rating_input_1" class="float-right"></span></li>
												<li><label>Product's quality</label> <span id="rating_input_2" class="float-right"></span></li>
												<li><label>Support</label> <span id="rating_input_3" class="float-right"></span></li>
												<li><label>General satisfaction</label> <span id="rating_input_4" class="float-right"></span></li>
											</ul>
										</li>
										<li><strong>2</strong>
											<h5>Your review and comments</h5>
											<p id="review_message"></p>
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



	<!-- COMMON SCRIPTS -->
	<script src="<?php echo base_url('assets1/') ?>js/jquery-3.5.1.min.js"></script>
	<script src="<?php echo base_url('assets1/') ?>js/common_scripts.min.js"></script>
	<script src="<?php echo base_url('assets1/') ?>js/velocity.min.js"></script>
	<script src="<?php echo base_url('assets1/') ?>js/functions.js"></script>

	<!-- Wizard script -->
	<script src="<?php echo base_url('assets1/') ?>js/review_func.js"></script>

</body>

</html>