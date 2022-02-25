<div class="page page--login" data-page="login">

	<!-- HEADER -->
	<header class="header header--fixed">
		<div class="header__inner">
			<div class="header__icon"></a>
			</div>
		</div>
	</header>

	<div class="login">
		<div class="login__content">
			<h2 class="login__title">
				<div class="header__logo header__logo--text">
					<h2<a href="#">Lapor<strong>MIN</strong></a>
				</div>
			</h2>
			<p class="login__text">Masukusan dengan akun anda</p>
			<div class="login-form">
				<form id="LoginForm" method="post" action="<?php echo base_url('c_login/login_cek') ?>">
					<div class="login-form__row">
						<label class="login-form__label">Username</label>
						<input type="text" name="Username" value="" class="login-form__input required" />
					</div>
					<div class="login-form__row">
						<label class="login-form__label">Password</label>
						<input type="password" name="password" value="" class="login-form__input required" />
					</div>
					<div class="login-form__row">
						<input type="submit" name="submit" class="login-form__submit button button--main button--full" id="submit" value="Masuk" />
					</div>
				</form>

				<div class="login-form__bottom">
					<p>belum buat akun?</p>
					<a href="<?php echo base_url('C_regist/') ?>" class="button button--secondary button--full">DAFTAR</a>
				</div>
			</div>
		</div>
	</div>



</div>

<script src="<?php echo base_url('assets') ?>/vendor/jquery/jquery-3.5.1.min.js"></script>
<script src="<?php echo base_url('assets') ?>/vendor/jquery/jquery.validate.min.js"></script>
<script src="<?php echo base_url('assets') ?>/vendor/swiper/swiper.min.js"></script>
<script src="<?php echo base_url('assets') ?>/vendor/plyr/plyr.min.js"></script>
<script src="<?php echo base_url('assets') ?>/vendor/plyr/html5media.min.js"></script>
<script src="<?php echo base_url('assets') ?>/js/swiper-init.js"></script>
<script src="<?php echo base_url('assets') ?>/js/jquery.custom.js"></script>

</body>

</html>