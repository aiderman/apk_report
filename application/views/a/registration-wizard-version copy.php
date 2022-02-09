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
	<link href="<?= base_url('assets1/') ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets1/') ?>css/menu.css" rel="stylesheet">
	<link href="<?= base_url('assets1/') ?>css/style.css" rel="stylesheet">
	<link href="<?= base_url('assets1/') ?>css/vendors.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="<?= base_url('assets1/') ?>css/custom.css" rel="stylesheet">

	<!-- MODERNIZR MENU -->
	<script src="<?= base_url('assets1/') ?>js/modernizr.js"></script>

</head>

<body>


	<!-- /menu -->



	<div class="col-lg-6 content-right" id="start" style="margin-top:-100px;">
		<div id="wizard_container">
			<div id="top-wizard">
				<div id="progressbar"></div>
			</div>
			<!-- /top-wizard -->
			<form id="wrapped" method="POST">
				<input id="website" name="website" type="text" value="">
				<!-- Leave for security protection, read docs for details -->
				<div id="middle-wizard">
					<!-- <h3 class="main_question"><strong>1/3</strong>Please fill with your details</h3>
					<div class="form-group">
						<input type="text" name="first_name" class="form-control required" placeholder="First Name" onchange="getVals(this, 'first_name');">
					</div>
					<div class="form-group">
						<input type="text" name="last_name" class="form-control required" placeholder="Last Name" onchange="getVals(this, 'last_name');">
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control required" placeholder="Your Email" onchange="getVals(this, 'email');">
					</div> -->
					<!-- <div class="form-group terms">
						<label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a>
							<input type="checkbox" name="terms" value="Yes" class="required">
							<span class="checkmark"></span>
						</label>
					</div> -->
					<div class="step">
						<div class="form-group">
							<div class="styled-select clearfix">
								<select class="wide required" name="country" onchange="getVals(this, 'country');">
									<option selected disabled>pilih kategori</option>
									<option value="kategori 1">kategori 1</option>
									<option value="kategori 2">kategori 2</option>

								</select>
							</div>
						</div>
					</div>
					<div class="step">
						<div class="form-group">
							<div class="styled-select clearfix">
								<select class="wide required" name="country1" onchange="getVals(this, 'country1');">
									<option selected disabled>pilih sub kategori</option>
									<option value="sub kategori 1">sub kategori 1</option>
									<option value="sub kategori 2">sub kategori 2</option>

								</select>
							</div>
						</div>
					</div>
					<div class="step">
						<h3 class="main_question"><strong>1/3</strong>Please fill with your details</h3>

						<div class="form-group">
							<input type="email" name="email" class="form-control required" placeholder="Email" onchange="getVals(this, 'email');">
						</div>
						<div class="form-group">
							<input type="text" name="judul_aduan" class="form-control required" placeholder="Judul" onchange="getVals(this, 'first_name');">
						</div>
						<div class="form-group">
							<input type="text" name="isi_aduan" class="form-control required" placeholder="Keterangan" onchange="getVals(this, 'last_name');">

						</div>
						<script>
							$.getJSON("http://ip-api.io/json/",
								function(result) {
									console.log(result);
								});
						</script>


						<!-- <div class="form-group terms">
							<label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a>
								<input type="checkbox" name="terms" value="Yes" class="required">
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="form-group terms">
							<label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a>
								<input type="checkbox" name="terms" value="Yes" class="required">
								<span class="checkmark"></span>
							</label>
						</div> -->
					</div>
					<!-- /step-->
					<div class="step">
						<h3 class="main_question"><strong>3/3</strong>Plase provide your account details</h3>
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
						<h3 class="main_question"><strong>4/3</strong>silahkan periksa data yang anda input</h3>
						<div class="summary">
							<ul>
								<li><strong>1</strong>
									<h5>ADUAN</h5>
									<ul>
										<li><label>KATEGORI</label>: <span id="country"></span></li>
										<li><label>SUB KATEGORI</label>: <span id="country1"></span></li>
										<li><label>Judul</label>: <span id="judul_aduan"></span></li>
										<li><label>isi</label>: <span id="isi_aduan"></span></li>
										<li><label>waktu</label>: <span id="date"></span></li>
										<li><label>lokasi</label>: <span id="demo"></span></li>
										<script>
											n = new Date();
											y = n.getFullYear();
											m = n.getMonth() + 1;
											d = n.getDate();
											document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
										</script>




									</ul>
								</li>
								<li><strong>2</strong>
									<h5>DATA DIRI</h5>
									<ul>
										<li><label>Email</label>: <span id="email"></span></li>
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
	<script src="<?= base_url('assets1/') ?>js/jquery-3.5.1.min.js"></script>
	<script src="<?= base_url('assets1/') ?>js/common_scripts.min.js"></script>
	<script src="<?= base_url('assets1/') ?>js/velocity.min.js"></script>
	<script src="<?= base_url('assets1/') ?>js/functions.js"></script>
	<script src="<?= base_url('assets1/') ?>js/pw_strenght.js"></script>

	<!-- Wizard script -->
	<script src="<?= base_url('assets1/') ?>js/registration_func.js"></script>

</body>

</html>