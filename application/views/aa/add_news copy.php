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
					<a href="#" class="cd-nav-trigger">Menu<span class="cd-close"></span></a>
					<!-- /top-wizard -->
					<form id="wrapped" method="POST">
						<input id="website" name="website" type="text" value="">
						<!-- Leave for security protection, read docs for details -->
						<div id="middle-wizard">
							<div class="step">
								<h3 class="main_question"><strong>Langkah 1</strong>silahkan pilih kategori 1</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">KATEGORI</label>

									<br>
									<br>
									<div class="form-check">
										<input type="radio" class="form-check-input required" id="radio1" name="optradio" value="1" checked>KATEGORI 1
										<label class="form-check-label" for="radio1"></label>
									</div>
									<div class="form-check">
										<input type="radio" class="form-check-input required" id="radio2" name="optradio" value="2">KATEGORI 2
										<label class="form-check-label" for="radio2"></label>
									</div>

								</div>

							</div>
							<div class="step">
								<h3 class="main_question"><strong>Langkah 2</strong>silahkan pilih sub kategori 1</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">SUB KATEGORI</label>

									<br>
									<br>
									<div class="form-check">
										<input type="radio" class="form-check-input required" id="radio1" name="optradio" value="1" checked>SUB KATEGORI 1
										<label class="form-check-label" for="radio1"></label>
									</div>
									<div class="form-check">
										<input type="radio" class="form-check-input required" id="radio2" name="optradio" value="2">SUB KATEGORI 2
										<label class="form-check-label" for="radio2"></label>
									</div>

								</div>

							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>Langkah 3</strong>Masukan alamat</h3>
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