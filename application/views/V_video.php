<!DOCTYPE html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Declare page as mobile friendly --> 
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
<!-- Declare page as iDevice WebApp friendly -->
<meta name="apple-mobile-web-app-capable" content="yes"/>
<!-- iDevice WebApp Splash Screen, Regular Icon, iPhone, iPad, iPod Retina Icons -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url('assets/') ?>images/splash/splash-icon.png"> 
<!-- iPhone 3, 3Gs -->
<link rel="apple-touch-startup-image" href="<?=base_url('assets/') ?>images/splash/splash-screen.png" 			media="screen and (max-device-width: 320px)" /> 
<!-- iPhone 4 -->
<link rel="apple-touch-startup-image" href="<?=base_url('assets/') ?>images/splash/splash-screen@2x.png" 		media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<!-- iPhone 5 -->
<link rel="apple-touch-startup-image" sizes="640x1096" href="<?=base_url('assets/') ?>images/splash/splash-screen@3x.png" />

<!-- Page Title -->
<title>Epsilon Elements | Mobile Framework Starter</title>

<!-- Stylesheet Load -->
<link href="styles/style.css"				rel="stylesheet" type="text/css">
<link href="styles/framework-style.css" 	rel="stylesheet" type="text/css">
<link href="styles/framework.css" 			rel="stylesheet" type="text/css">
<link href="styles/bxslider.css"			rel="stylesheet" type="text/css">
<link href="styles/swipebox.css"			rel="stylesheet" type="text/css">
<link href="styles/icons.css"				rel="stylesheet" type="text/css">
<link href="styles/retina.css" 				rel="stylesheet" type="text/css" media="only screen and (-webkit-min-device-pixel-ratio: 2)" />


<!--Page Scripts Load -->
<script src="<?=base_url('assets/') ?>scripts/jquery.min.js"		type="text/javascript"></script>	
<script src="<?=base_url('assets/') ?>scripts/hammer.js"			type="text/javascript"></script>	
<script src="<?=base_url('assets/') ?>scripts/jquery-ui-min.js"  type="text/javascript"></script>
<script src="<?=base_url('assets/') ?>scripts/subscribe.js"		type="text/javascript"></script>
<script src="<?=base_url('assets/') ?>scripts/contact.js"		type="text/javascript"></script>
<script src="<?=base_url('assets/') ?>scripts/jquery.swipebox.js" type="text/javascript"></script>
<script src="<?=base_url('assets/') ?>scripts/bxslider.js"		type="text/javascript"></script>
<script src="<?=base_url('assets/') ?>scripts/colorbox.js"		type="text/javascript"></script>
<script src="<?=base_url('assets/') ?>scripts/retina.js"			type="text/javascript"></script>
<script src="<?=base_url('assets/') ?>scripts/custom.js"			type="text/javascript"></script>
<script src="<?=base_url('assets/') ?>scripts/framework.js"		type="text/javascript"></script>

</head>
<body>

<div id="preloader">
	<div id="status">
    	<p class="center-text">
			Loading the content...
            <em>Loading depends on your connection speed!</em>
        </p>
    </div>
</div>

<div class="header">
    <a class="logo-home" href="index.html"><img src="<?=base_url('assets/') ?>images/logob.png" alt="img" width="40"></a>
    <div class="header-text">
        <strong>FLATY</strong>
        <em>flat and gorgeous</em>
    </div>
</div>
<div class="header-clear"></div>

<div class="content">
      <div class="container no-bottom">
          <div class="heading">
              <div class="heading-left">
                  <em>HTML5 videos and embedded videso</em>
                  <h3>VIDEO PAGE</h3>
              </div>
              <div class="heading-right">
                  <span class="icon icon-pencil"></span>
              </div>
          </div>
      </div>
      
      <div class="decoration"></div>
      
       <div class="container no-bottom">
            <div class="portfolio-item-full-width">
				<iframe class="responsive-video image-decoration" src="http://www.youtube.com/embed/G_G8SdXktHg"></iframe>
                <h6 class="uppercase">A full width portfolio item!</h6>
                <p>We like portfolios a lot! We've optimized them to the extreme to make them work like a charm on mobiles!</p>
        	</div>
            <div class="decoration"></div>
        	<div class="portfolio-item-full-width">
				<iframe class="responsive-video image-decoration" src="http://player.vimeo.com/video/7449107"></iframe> 
				<h6 class="uppercase">A full width portfolio item!</h6>
                <p>We like portfolios a lot! We've optimized them to the extreme to make them work like a charm on mobiles!</p>
        	</div>
        </div>	
              
    <div class="decoration"></div>
</div>

<div class="footer">
    <div class="small-navigation-icons">
    	<a href="#" class="small-nav-icon facebook-nav"></a>
        <a href="#" class="small-nav-icon go-up up-nav"></a>
        <a href="#" class="small-nav-icon twitter-nav"></a>
        <div class="clear"></div>
    </div>
    <p class="copyright">COPYRIGHT 2013. ALL RIGHTS RESERVED</p>
</div>



</body>
</html>






























