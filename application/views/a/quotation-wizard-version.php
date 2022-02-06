<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wilio Survey, Quotation, Review and Register form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>Wilio | Survey, Quotation, Review and Register form Wizard</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
	
	<!-- MODERNIZR MENU -->
	<script src="js/modernizr.js"></script>

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
						<figure><img src="img/info_graphic_3.svg" alt="" class="img-fluid"></figure>
						<h2>Quotation Wizard</h2>
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
						<form id="wrapped" method="POST" enctype="multipart/form-data">
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">
								<div class="step">
									<h3 class="main_question"><strong>1/5</strong>What your poject need?</h3>
									<div class="form-group">
										<label class="container_check version_2">Custom interface and layout
											<input type="checkbox" name="question_1[]" value="Custom interface and layout" class="required" onchange="getVals(this, 'question_1');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Web site design
											<input type="checkbox" name="question_1[]" value="Web site design" class="required" onchange="getVals(this, 'question_1');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Seo optimization
											<input type="checkbox" name="question_1[]" value="Seo optimization" class="required" onchange="getVals(this, 'question_1');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">CMS integrations (Wordpress)
											<input type="checkbox" name="question_1[]" value="CMS integrations (Wordpress)" class="required" onchange="getVals(this, 'question_1');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Newsletter Campaign
											<input type="checkbox" name="question_1[]" value="Newsletter Campaign" class="required" onchange="getVals(this, 'question_1');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Logo Design
											<input type="checkbox" name="question_1[]" value="Logo Design" class="required" onchange="getVals(this, 'question_1');">
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
								<!-- /step-->
								<div class="step">
									<h3 class="main_question"><strong>2/5</strong>Please provide any additional information</h3>
									<div class="form-group add_top_30">
										<label>Additional information</label>
										<textarea name="additional_message" class="form-control required" style="height:150px;" placeholder="Type here additional info..." onkeyup="getVals(this, 'additional_message');"></textarea>
									</div>
									<div class="form-group add_top_30">
										<label>Optional file upload<br><small>(Files accepted: gif, jpg, jpeg, .png, .pdf, .doc/docx - Max file size: 50k for demo purpose, you can increase based on your host settings.)</small></label>
										<div class="fileupload">
											<input type="file" name="fileupload" accept="image/*,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" onchange="getVals(this, 'fileupload');">
										</div>
									</div>
								</div>
								<!-- /step-->
								<div class="step">
									<h3 class="main_question"><strong>3/5</strong>What is your budget?</h3>
									<div class="budget_slider">
										<input type="range" name="budget" min="0" max="2000" step="100" value="0" data-orientation="horizontal" onchange="getVals(this, 'budget');">
										<span>$</span>
									</div>
									<p>Lorem ipsum dolor sit amet, esse mazim disputando vix in. Quem reprimique eum ea, vim cu <strong>partem persius</strong> efficiantur.</p>
									<p>Ex has option delectus. Duo ex iuvaret delicata pertinacia, no nam tale summo euismod.</p>
								</div>
								<!-- /step-->
								<div class="step">
									<h3 class="main_question"><strong>4/5</strong>Please fill with your details</h3>
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
									<h3 class="main_question"><strong>5/5</strong>Summary</h3>
									<div class="summary">
										<ul>
											<li><strong>1</strong>
												<h5>What your poject need?</h5>
												<p id="question_1"></p>
											</li>
											<li><strong>2</strong>
												<h5>Additional information</h5>
												<p id="additional_message"></p>
												<p><label>File upload</label>: <span id="fileupload"></span></p>
											</li>
											<li><strong>3</strong>
												<h5>What is your budget?</h5>
												<p>$<span id="budget"></span></p>
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
	<script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/common_scripts.min.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/functions.js"></script>
	<script src="js/file-validator.js"></script>

	<!-- Wizard script -->
	<script src="js/quotation_func.js"></script>

</body>
</html>