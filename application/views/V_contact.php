<!DOCTYPE html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Declare page as mobile friendly --> 
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
<!-- Declare page as iDevice WebApp friendly -->
<meta name="apple-mobile-web-app-capable" content="yes"/>
<!-- iDevice WebApp Splash Screen, Regular Icon, iPhone, iPad, iPod Retina Icons -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/splash/splash-icon.png"> 
<!-- iPhone 3, 3Gs -->
<link rel="apple-touch-startup-image" href="images/splash/splash-screen.png" 			media="screen and (max-device-width: 320px)" /> 
<!-- iPhone 4 -->
<link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png" 		media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<!-- iPhone 5 -->
<link rel="apple-touch-startup-image" sizes="640x1096" href="images/splash/splash-screen@3x.png" />

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
<script src="scripts/jquery.min.js"		type="text/javascript"></script>	
<script src="scripts/hammer.js"			type="text/javascript"></script>	
<script src="scripts/jquery-ui-min.js"  type="text/javascript"></script>
<script src="scripts/subscribe.js"		type="text/javascript"></script>
<script src="scripts/contact.js"		type="text/javascript"></script>
<script src="scripts/jquery.swipebox.js" type="text/javascript"></script>
<script src="scripts/bxslider.js"		type="text/javascript"></script>
<script src="scripts/colorbox.js"		type="text/javascript"></script>
<script src="scripts/retina.js"			type="text/javascript"></script>
<script src="scripts/custom.js"			type="text/javascript"></script>
<script src="scripts/framework.js"		type="text/javascript"></script>

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
      <div class="container no-bottom">
          <div class="heading">
              <div class="heading-left">
                  <em>AJAX PHP Contact form with validation</em>
                  <h3>GET IN TOUCH</h3>
              </div>
              <div class="heading-right">
                  <span class="icon icon-pencil"></span>
              </div>
          </div>
      </div>
      
      <div class="decoration"></div>
      
         <div class="container">
            <div class="maps-container">
        		<iframe class="responsive-image maps" src="https://maps.google.com/?ie=UTF8&amp;ll=47.595131,-122.330414&amp;spn=0.006186,0.016512&amp;t=h&amp;z=17&amp;output=embed"></iframe>
            </div>
        </div>

        <div class="decoration"></div>
    	<div class="container no-bottom">
            <div class="contact-form no-bottom"> 
                <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                    <div class="notification-box green-box">
                        <h4>YOUR MESSAGE HAS BEEN SENT!</h4>
                        <a href="#" class="close-notification">x</a>
                        <div class="clear"></div>
                        <p>
                            You're message has been successfully sent. Please allow up to 48 hours for us to reply!  
                        </p>  
                    </div> 
                </div>
            
                <form action="php/contact.php" method="post" class="contactForm" id="contactForm">
                    <fieldset>
                        <div class="formValidationError" id="contactNameFieldError">
                            <div class="small-notification red-notification no-bottom">
                                <p>NAME IS REQUIRED</p>
                            </div>
                        </div>             
                        <div class="formValidationError" id="contactEmailFieldError">
                            <div class="small-notification red-notification no-bottom">
                                <p>EMAIL IS REQUIRED</p>
                            </div>
                        </div> 
                        <div class="formValidationError" id="contactEmailFieldError2">
                            <div class="small-notification red-notification no-bottom">
                                <p>ADDRESS MUST BE VALID</p>
                            </div>
                        </div> 
                        <div class="formValidationError" id="contactMessageTextareaError">
                            <div class="small-notification red-notification no-bottom">
                                <p>MESSAGE FIELD IS EMPTY</p>
                            </div>
                        </div>   
                        <div class="formFieldWrap">
                            <label class="field-title contactNameField" for="contactNameField">Name:<span>(required)</span></label>
                            <input type="text" name="contactNameField" value="" class="contactField requiredField" id="contactNameField"/>
                        </div>
                        <div class="formFieldWrap">
                            <label class="field-title contactEmailField" for="contactEmailField">Email: <span>(required)</span></label>
                            <input type="text" name="contactEmailField" value="" class="contactField requiredField requiredEmailField" id="contactEmailField"/>
                        </div>
                        <div class="formTextareaWrap">
                            <label class="field-title contactMessageTextarea" for="contactMessageTextarea">Message: <span>(required)</span></label>
                            <textarea name="contactMessageTextarea" class="contactTextarea requiredField" id="contactMessageTextarea"></textarea>
                        </div>
                        <div class="formSubmitButtonErrorsWrap">
                            <input type="submit" class="buttonWrap button-minimal grey-minimal contactSubmitButton" id="contactSubmitButton" value="SUBMIT" data-formId="contactForm"/>
                            <a class="button-minimal grey-minimal" href="tel:+12 345 657 8963">CALL US</a>
                            <a class="button-minimal grey-minimal" href="sms:+12 345 657 8963">TEXT US</a>
                        </div>
                    </fieldset>
                </form>       
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






























