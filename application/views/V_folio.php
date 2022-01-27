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
    <a class="logo-home" href="index.html"><img src="images/logob.png" alt="img" width="40"></a>
    <div class="header-text">
        <strong>FLATY</strong>
        <em>flat and gorgeous</em>
    </div>
</div>
<div class="header-clear"></div>

<div class="content">

	<a href="#" class="content-tab tab-one">Swipe</a>
    <a href="#" class="content-tab tab-two">One Col</a>
    <a href="#" class="content-tab tab-three">Two Cols</a>
    
    <div class="decoration"></div>
    
    <div class="clear"></div>
    
    <div id="tab-one">

        <div class="heading no-bottom">
            <div class="heading-left">
                <em>a touch enabled</em>
                <h3>SWIPE GALLERY</h3>
            </div>
            <div class="heading-right">
                <span class="icon icon-pencil"></span>
            </div>
        </div>
         
        <p>
        	What's a touch enabled template without a touchable gallery! 
            This gallery works amazingly awesome in a WebApp mode, using it natively as a photo app!
        </p>
        
        <div class="decoration"></div>

         <ul class="gallery">
            <li>
            	<a class="swipebox" href="<?=base_url('assets/') ?>images/gallery/full/1.jpg" title="An awesome gallery!">
                	<img class="image-decoration" src="images/gallery/thumb/1t.jpg" alt="Image 001" />
                </a>
            </li>
            <li>
            	<a class="swipebox" href="<?=base_url('assets/') ?>images/gallery/full/2.jpg" title="An awesome gallery!">
                	<img class="image-decoration" src="images/gallery/thumb/2t.jpg" alt="Image 001" />
                </a>
            </li>
            <li>
            	<a class="swipebox" href="<?=base_url('assets/') ?>images/gallery/full/3.jpg" title="An awesome gallery!">
                	<img class="image-decoration" src="images/gallery/thumb/3t.jpg" alt="Image 001" />
                </a>
            </li>
            <li>
            	<a class="swipebox" href="<?=base_url('assets/') ?>images/gallery/full/4.jpg" title="An awesome gallery!">
                	<img class="image-decoration" src="images/gallery/thumb/4t.jpg" alt="Image 001" />
                </a>
            </li>
            <li>
            	<a class="swipebox" href="<?=base_url('assets/') ?>images/gallery/full/5.jpg" title="An awesome gallery!">
                	<img class="image-decoration" src="images/gallery/thumb/5t.jpg" alt="Image 001" />
                </a>
            </li>
            <li>
            	<a class="swipebox" href="<?=base_url('assets/') ?>images/gallery/full/1.jpg" title="An awesome gallery!">
                	<img class="image-decoration" src="images/gallery/thumb/1t.jpg" alt="Image 001" />
                </a>
            </li>
            <li>
            	<a class="swipebox" href="<?=base_url('assets/') ?>images/gallery/full/1.jpg" title="An awesome gallery!">
                	<img class="image-decoration" src="images/gallery/thumb/1t.jpg" alt="Image 001" />
                </a>
            </li>
            <li>
            	<a class="swipebox" href="<?=base_url('assets/') ?>images/gallery/full/2.jpg" title="An awesome gallery!">
                	<img class="image-decoration" src="images/gallery/thumb/2t.jpg" alt="Image 001" />
                </a>
            </li>
            <li>
            	<a class="swipebox" href="<?=base_url('assets/') ?>images/gallery/full/3.jpg" title="An awesome gallery!">
                	<img class="image-decoration" src="images/gallery/thumb/3t.jpg" alt="Image 001" />
                </a>
            </li>
        </ul>          
    </div>
    
    <div id="tab-two">
        <div class="heading no-bottom">
            <div class="heading-left">
                <em>a regular colorbox</em>
                <h3>ONE COLUMN GALLERY</h3>
            </div>
            <div class="heading-right">
                <span class="icon icon-pencil"></span>
            </div>
        </div>
         
        <p>
        	What's a touch enabled template without a touchable gallery! 
            This gallery works amazingly awesome in a WebApp mode, using it natively as a photo app!
        </p>
      
      <div class="decoration"></div>
          
      <div class="container no-bottom">
            <div class="portfolio-item-full-width">
        		<a href="<?=base_url('assets/') ?>images/slider/1.jpg">
                	<img class="responsive-image" src="images/slider/1.jpg" alt="img">
                    Image Caption Goes Here
                </a>
                <h6 class="uppercase">A full width portfolio item!</h6>
                <p>We like portfolios a lot! We've optimized them to the extreme to make them work like a charm on mobiles!</p>
        	</div>
            <div class="decoration"></div>
        	<div class="portfolio-item-full-width">
        		<a href="<?=base_url('assets/') ?>images/slider/2.jpg">
                	<img class="responsive-image" src="images/slider/2.jpg" alt="img">
                    Image Caption Goes Here
                </a>
				<h6 class="uppercase">A full width portfolio item!</h6>
                <p>We like portfolios a lot! We've optimized them to the extreme to make them work like a charm on mobiles!</p>
        	</div>
            <div class="decoration"></div>
        	<div class="portfolio-item-full-width">
        		<a href="<?=base_url('assets/') ?>images/slider/3.jpg">
                	<img class="responsive-image" src="images/slider/3.jpg" alt="img">
                    Image Caption Goes Here
                </a>
                <h6 class="uppercase">A full width portfolio item!</h6>
                <p>We like portfolios a lot! We've optimized them to the extreme to make them work like a charm on mobiles!</p>
        	</div>
        </div>
    </div>
    
    <div id="tab-three">
    
      <div class="heading no-bottom">
          <div class="heading-left">
              <em>a regular colorbox</em>
              <h3>TWO COLUMN GALLERY</h3>
          </div>
          <div class="heading-right">
              <span class="icon icon-pencil"></span>
          </div>
      </div>
      
      <p>
          What's a touch enabled template without a touchable gallery! 
          This gallery works amazingly awesome in a WebApp mode, using it natively as a photo app!
      </p>
      
      <div class="decoration"></div>
    
       <div class="container no-bottom">
        	<div class="column no-bottom">
            	<div class="portfolio-item-thumb one-half">
                	<a href="<?=base_url('assets/') ?>images/gallery/full/001.jpg">
                    	<img class="responsive-image" src="images/gallery/thumb/1t.jpg" alt="img">
                        Image Caption
                    </a>
                	<h5 class="uppercase center-text">Image Title</h5>
                    <p class="center-text">
                   		Lorem ipsum dolor sit amet, consecr adipiscing elit. Aenean iaculis erat site amet sapien tempor et eleifend risus faucibus. 
                    </p>
                </div>
                <div class="portfolio-item-thumb one-half">
                	<a href="<?=base_url('assets/') ?>images/gallery/full/002.jpg">
                    	<img class="responsive-image" src="images/gallery/thumb/2t.jpg" alt="img">
                        Image Caption
                    </a>
                	<h5 class="uppercase center-text">Image Title</h5>
                    <p class="center-text">
                   		Lorem ipsum dolor sit amet, consecr adipiscing elit. Aenean iaculis erat site amet sapien tempor et eleifend risus faucibus. 
                    </p>
                </div>
            </div>  
            
        	<div class="column no-bottom">
            	<div class="portfolio-item-thumb one-half">
                	<a href="<?=base_url('assets/') ?>images/gallery/full/003.jpg">
                    	<img class="responsive-image" src="images/gallery/thumb/3t.jpg" alt="img">
                        Image Caption
                    </a>
                	<h5 class="uppercase center-text">Image Title</h5>
                    <p class="center-text">
                   		Lorem ipsum dolor sit amet, consecr adipiscing elit. Aenean iaculis erat site amet sapien tempor et eleifend risus faucibus. 
                    </p>
                </div>
                <div class="portfolio-item-thumb one-half">
                	<a href="<?=base_url('assets/') ?>images/gallery/full/004.jpg">
                    	<img class="responsive-image" src="images/gallery/thumb/4t.jpg" alt="img">
                        Image Caption
                    </a>
                	<h5 class="uppercase center-text">Image Title</h5>
                    <p class="center-text">
                   		Lorem ipsum dolor sit amet, consecr adipiscing elit. Aenean iaculis erat site amet sapien tempor et eleifend risus faucibus. 
                    </p>
                </div>
            </div>         
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






























