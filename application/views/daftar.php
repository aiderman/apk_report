<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
<title>MobioKit - Premium Mobile Template</title>
<link rel="stylesheet" href="../../vendor/swiper/swiper.min.css">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet"> 
</head>
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
							<label class="login-form__label">Username</label>
							<input type="text" name="Username" value="" class="login-form__input required" />
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

