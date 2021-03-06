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
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
</head>

<style>
	.form-input img {
		width: 100%;
		display: none;

		margin-bottom: 30px;
	}
</style>
<script>
	var map = L.map('map').setView([51.505, -0.09], 13);

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	L.marker([51.5, -0.09]).addTo(map)
		.bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
		.openPopup();
</script>
<script type="text/javascript">
	function showLocation(position) {
		var latitude = position.coords.latitude;
		var longitude = position.coords.longitude;
		alert("Latitude : " + latitude + " Longitude: " + longitude);
		document.getElementById("lat").value = latitude;
		document.getElementById("long").value = longitude;
	}

	function errorHandler(err) {
		if (err.code == 1) {
			alert("Error: Access is denied!");
		} else if (err.code == 2) {
			alert("Error: Position is unavailable!");
		}
	}

	function getLocation() {

		if (navigator.geolocation) {

			// timeout at 60000 milliseconds (60 seconds)
			var options = {
				enableHighAccuracy: true,
				timeout: 6000,
				maximumAge: 0
			};
			navigator.geolocation.getCurrentPosition(showLocation, errorHandler, options);
		} else {
			alert("Sorry, browser does not support geolocation!");
		}
	}
</script>

</head>

<body>
	<!-- /menu -->
	<div class="col-lg-6 content-right" id="start" style="margin-top:-100px;">
		<div id="wizard_container">
			<!-- /top-wizard -->
			<form id="wrapped" method="POST" target="<?php echo base_url('c_regist/cek_data'); ?>">
				<input id="website" name="website" type="text">
				<!-- wizard data diri start -->
				<div id="middle-wizard">
					<div class="step">
						<h3 class="main_question"><strong>1/3</strong>Lengkapi data diri</h3>
						<div class="form-group">
							<input type="text" name="nama_lengkap" class="form-control required" placeholder="Nama Lengkap" onchange="getVals(this, 'nama_lengkap');">
						</div>
						<div class="form-group">
							<input type="date" placeholder="Tanggal Lahir" name="tanggal_lahir" class="form-control required" onchange="getVals(this, 'tanggal_lahir');">
						</div>
						<div class="form-group">
							<div class="styled-select clearfix">
								<select class="wide required" name="kecamatan" onchange="getVals(this, 'kecamatan');">
									<option selected disabled>pilih kecamatan</option>
									<option value="kec_1">kecamatan 1</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<input type="text" name="desa" class="form-control required" placeholder="Nama Lengkap" onchange="getVals(this, 'rtrw1');">
						</div>


						<div class="form-group">
							<div class="styled-select clearfix">
								<select class="wide required" name="kelurahan" onchange="getVals(this, 'kelurahan');">
									<option selected disabled>pilih kelurahan</option>
									<option value="kelurahan_1">kelurahan 1</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<div id="map"></div>

							<p>longitude :
								<input type="hiden" class="form-control required" name="lat" id="lat" />
							<p>latitude :
								<input type="hiden" class="form-control required" name="long" id="long" />
							</p>
							<input style="background-color: darkseagreen;" type="button" class="form-control" onclick="getLocation();" value="pindai lokasi" />
						</div>
					</div>
					<!-- wizard data diri start end-->
					<div class="step">
						<h3 class="main_question"><strong>2/3</strong>daftarkan akun</h3>

						<div class="form-group">
							<input type="email" name="email" class="form-control required" placeholder="Email" onchange="getVals(this, 'email');">
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
					<div class="step">
						<h3 class="main_question"><strong>3/3</strong>pilih foto profil anda</h3>
						<div class="center">
							<div class="form-input">
								<div class="preview">
									<img id="file-ip-1-preview">
								</div>
								<label for="file-ip-1">Upload Image</label>
								<input type="file" id="file-ip-1" name="foto" accept="image/*" onchange="showPreview(event); ">

							</div>
						</div>

					</div>
					<!-- /step-->
					<div class="submit step">
						<h3 class="main_question"><strong>4/4</strong>silahkan periksa data yang anda input</h3>
						<div class="summary">
							<ul>
								<li><strong>1</strong>
									<h5>Data diri</h5>
									<ul>
										<li><label>Nama lengkap</label>: <span id="nama_lengkap"></span></li>
										<li><label>Tanggal lahir</label>: <span id="tanggal_lahir"></span></li>
										<li><label>Kecamatan</label>: <span id="kecamatan"></span></li>
										<li><label>Nama lengkap</label>: <span id="nama_lengkap"></span></li>
										<li><label>RT/RW</label>: <span id="rtrw1"></span></li>
										<li><label>Kelurahan</label>: <span id="kelurahan"></span></li>
										<li><label>lokasi</label>: <span id="lokasi"></span></li>
									</ul>
								</li>
								<li><strong>2</strong>
									<h5>Akun</h5>
									<ul>
										<li><label>Email</label>: <span id="email"></span></li>
										<li><label>Password</label>: <span id="password"></span></li>
										<li><label>foto</label>: <span id="file-ip-1"></span></li>

									</ul>
								</li>
							</ul>
							<div class="form-group terms">
								<label class="container_check">Silahkan centang <a href="<?php base_url('c_login') ?>" data-toggle="modal" data-target="#terms-txt">jika anda sudah yakin</a>
									<input type="checkbox" name="terms" value="Yes" class="required">
									<span class="checkmark"></span>
								</label>
							</div>
						</div>
					</div>
					<!-- /step-->
				</div>
				<!-- /middle-wizard -->
				<div id="bottom-wizard">
					<button type="button" name="backward" class="backward">Prev</button>
					<button type="button" name="forward" class="forward">Next</button>
					<button type="submit" name="simpan" class="submit">Submit</button>
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


	<script type="text/javascript">
		function showPreview(event) {
			if (event.target.files.length > 0) {
				var src = URL.createObjectURL(event.target.files[0]);
				var preview = document.getElementById("file-ip-1-preview");
				preview.src = src;
				preview.style.display = "block";
			}
		}
	</script>

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	<a href="<?= base_url('c_login/') ?>" class="cd-nav-trigger close-nav">Menu<span class="cd-icon"></span></a>
	<!-- /menu button -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Syarat dan ketentuan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>silahkan perhatikan setiap laporan yang anda ajukan karena setiap laporan yang telah anda kirim tidak dapat di ubah lagi</p>
					<p>setiap laporan yang anda kirimkan akan menjadi tanggung jawab pelapor, jika menebar data palsu atau ujaran kebencian anda akan di hukum sesuan dengan ketentuan hukum yang berlaku</p>
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