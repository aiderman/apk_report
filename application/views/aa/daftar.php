
<body>
	
<div class="page page--login" data-page="login">
	
	<!-- HEADER -->
	<header class="header header--fixed">	
		<div class="header__inner">	
			<div class="header__icon"><a href="<?php echo base_url('c_master')?>"><img src="<?php echo base_url('assets')?>/images/icons/black/arrow-back.svg" alt="" title=""/></a></div>	
                </div>
	</header>
	
        <div class="login">
		<div class="login__content">	
		
			<h2 class="login__title">	<div class="header__logo header__logo--text"><h2<a href="#">Lapor<strong>MIN</strong></a></div></h2>
			<p class="login__text">Mari bergabung bersama kami!</p>
				<div class="login-form">
					<form id="LoginForm" method="post" action="main.html">
						<div class="login-form__row">
							<label class="login-form__label">Nama Lengkap</label>
							<input type="text" name="nama_lengkap" value="" class="login-form__input required" />
						</div>
						<div class="login-form__row">
							<label class="login-form__label">Tanggal Lahir</label>
							<input type="text" name="tanggal_lahir" value="" class="login-form__input required" />
						</div>
						<div class="login-form__row">
							<label class="login-form__label">Alamat</label>
							<input type="text" name="alamat" value="" class="login-form__input required" />
						</div>
						<div class="login-form__row">
							<label class="login-form__label">rt/rw</label>
							<input type="text" name="rt/rw" value="" class="login-form__input required" />
						</div>
						<div class="login-form__row">
							<label class="login-form__label">Kelurahan</label>
							<input type="text" name="kelurahan" value="" class="login-form__input required" />
						</div>
						<div class="login-form__row">
							<label class="login-form__label">Kecamatan</label>
							<input type="text" name="kecamatan" value="" class="login-form__input required" />
						</div>
						<div class="login-form__row">
							<label class="login-form__label">Email</label>
							<input type="text" name="email" value="" class="login-form__input required email" />
						</div>
						<div class="login-form__row">
							<label class="login-form__label">Password</label>
							<input type="password" name="password" value="" class="login-form__input required" />
						</div>
						<div class="login-form__row">
							<label class="login-form__label">foto</label>
							<input type="file" name="password" value="" class="login-form__input required" />
							
						</div>
						<div class="login-form__row">
							<input type="submit" name="submit" class="login-form__submit button button--main button--full" id="submit" value="DAFTAR" />
						</div>
					</form>	
				</div>
		</div>
        </div>
			  


</div>
<!-- PAGE END -->

<script src="<?php echo base_url('assets')?>/vendor/jquery/jquery-3.5.1.min.js"></script>
<script src="<?php echo base_url('assets')?>/vendor/jquery/jquery.validate.min.js" ></script>
<script src="<?php echo base_url('assets')?>/vendor/swiper/swiper.min.js"></script>
<script src="<?php echo base_url('assets')?>/vendor/plyr/plyr.min.js"></script>
<script src="<?php echo base_url('assets')?>/vendor/plyr/html5media.min.js"></script>
<script src="<?php echo base_url('assets')?>/js/swiper-init.js"></script>
<script src="<?php echo base_url('assets')?>/js/jquery.custom.js"></script>

</body>
</html>

