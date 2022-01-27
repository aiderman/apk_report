<!DOCTYPE html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Declare page as mobile friendly --> 
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
<!-- Declare page as iDevice WebApp friendly -->
<meta name="apple-mobile-web-app-capable" content="yes"/>
<!-- iDevice WebApp Splash Screen, Regular Icon, iPhone, iPad, iPod Retina Icons -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url('assets/') ?>images/splash/splash-icon.png"> 
<!-- iPhone 3, 3Gs -->
<link rel="apple-touch-startup-image" href="<?= base_url('assets/') ?>images/splash/splash-screen.png" 			media="screen and (max-device-width: 320px)" /> 
<!-- iPhone 4 -->
<link rel="apple-touch-startup-image" href="<?= base_url('assets/') ?>images/splash/splash-screen@2x.png" 		media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<!-- iPhone 5 -->
<link rel="apple-touch-startup-image" sizes="640x1096" href="<?= base_url('assets/') ?>images/splash/splash-screen@3x.png" />

<!-- Page Title -->
<title>Epsilon Elements | Mobile Framework Starter</title>

<!-- Stylesheet Load -->
<link href="<?= base_url('assets/') ?>styles/style.css"				rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/') ?>styles/framework-style.css" 	rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/') ?>styles/framework.css" 			rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/') ?>styles/bxslider.css"			rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/') ?>styles/swipebox.css"			rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/') ?>styles/icons.css"				rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/') ?>styles/retina.css" 				rel="stylesheet" type="text/css" media="only screen and (-webkit-min-device-pixel-ratio: 2)" />


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

	<a href="#" class="content-tab tab-one">Type</a>
    <a href="#" class="content-tab tab-two">jQuery</a>
    <a href="#" class="content-tab tab-three">Other</a>
    
    <div class="decoration"></div>
    
    <div class="clear"></div>
    
    <div id="tab-one">
        <div class="container no-bottom">
            <div class="heading">
                <div class="heading-left">
                    <em>a few type features</em>
                    <h3>TYPOGRAPHY FEATURES</h3>
                </div>
                <div class="heading-right">
                    <span class="icon icon-pencil"></span>
                </div>
            </div>
        </div>
        
        <div class="decoration"></div>
        
        <!--Text Columns-->
        
        <div class="container no-bottom">
            <h4>1/1</h4>
            <p>
                Lorem ipsum dolor sit, consectetur adipiscing. Aliquam pellentesque, purus quis pellentesque fermentum, justo arcu posuere justo.  
                Lorem ipsum dolor sit, consectetur adipiscing.  
            </p> 
        </div>
    
        <div class="column">
            <div class="one-half">
                <h4>1/2</h4>
                <p class="no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing. Aliquam pellentesque, purus quis pellentesque fermentum. 
                </p> 
            </div>
            <div class="one-half">
                <h4>2/2</h4>
                <p class="no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing. Aliquam pellentesque, purus quis pellentesque fermentum. 
                </p> 
            </div>
        </div>
    
        <div class="column">
            <div class="one-third">  
                <h4>1/3</h4>
                <p class="no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing. Aliquam pellentesque, purus quis pellentesque. 
                </p>
            </div>
            <div class="one-third">
                <h4>2/3</h4>
                <p class="no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing. Aliquam pellentesque, purus quis pellentesque. 
                </p> 
            </div>
            <div class="one-third">
                <h4>3/3</h4>
                <p class="no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing. Aliquam pellentesque, purus quis pellentesque. 
                </p>
            </div>
        </div>
        
        <div class="decoration"></div>
    
    
        <div class="container">
            <img class="center-icon half-bottom" src="<?=base_url('assets/') ?>images/icons-large/icon1@2x.png" alt="img">
            <h3 class="center-text uppercase">A large centered icon!</h3>
            <p class="center-text no-bottom">
                Lorem ipsum dolor sit amet, consectetur adipiscing. <br>
                Aliquam pellentesque, purus quis pellentesque fermentum, justo arcu posuere justo. <br> 
            </p> 
        </div> 
        
        <div class="decoration"></div>
    
        <div class="column">
            <div class="one-half">
                <img class="center-icon" src="<?=base_url('assets/') ?>images/icons-large/icon2@2x.png" alt="img">
                <h3 class="center-text uppercase">Big Icons?</h3>
                <p class="center-text no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing. <br>
                    Aliquam pellentesque, purus quis pellentesque fermentum, justo arcu posuere justo. <br> 
                </p> 
            </div>
            <div class="one-half">
                <img class="center-icon" src="<?=base_url('assets/') ?>images/icons-large/icon1@2x.png" alt="img">
                <h3 class="center-text uppercase">Centerd up!</h3>
                <p class="center-text no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing. <br>
                    Aliquam pellentesque, purus quis pellentesque fermentum, justo arcu posuere justo. <br> 
                </p> 
            </div>
        </div>
        
    
        
        <!--<div class="container no-bottom">
            <img class="column-icon" src="<?=base_url('assets/') ?>images/icons-large/icon1@2x.png" width="85" alt="img">
            <h3>A large icon</h3>
            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. </p> 
        </div> -->
        
        <div class="decoration"></div>
        
        <div class="column">
            <div class="one-third">
                <img class="center-icon" src="<?=base_url('assets/') ?>images/icons-large/icon2@2x.png" alt="img">
                <h3 class="uppercase center-text">One Thirds</h3>
                <p class="center-text no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing. 
                    Aliquam pellentesque, purus quis pellentesque fermentum, justo arcu posuere justo. <br> 
                </p> 
            </div>
            <div class="one-third">
                <img class="center-icon" src="<?=base_url('assets/') ?>images/icons-large/icon3@2x.png" alt="img">
                <h3 class="uppercase center-text">Two Thirds</h3>
                <p class="center-text no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing. 
                    Aliquam pellentesque, purus quis pellentesque fermentum, justo arcu posuere justo. <br> 
                </p>  
            </div>
            <div class="one-third">
                <img class="center-icon" src="<?=base_url('assets/') ?>images/icons-large/icon4@2x.png" alt="img">
                <h3 class="uppercase center-text">Three Thirds</h3>
                <p class="center-text no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing.
                    Aliquam pellentesque, purus quis pellentesque fermentum, justo arcu posuere justo. <br> 
                </p> 
            </div>
        </div>
        
        <div class="decoration"></div>
        
        <!--Text Columns With Icons-->
    
        <div class="column">
            <h4 class="uppercase">Full width text!</h4>
            <p class="no-bottom">
                <span class="icon icon-user1"></span>
                Lorem ipsum dolor sit, consectetur adipiscing. Aliquam pellentesque, purus quis pellentesque fermentum, justo arcu posuere justo.  
                Lorem ipsum dolor sit, consectetur adipiscing.
            </p> 
        </div>
        
        <div class="column">
            <div class="one-half">
                <h4>1/2</h4>
                <p class="no-bottom">
                    <span class="icon icon-user1"></span>Lorem ipsum dolor sit, consectetur adipiscing. Aliquam pellentesque, purus quis pellentesque. 
                </p> 
            </div>
            <div class="one-half">
                <h4>2/2</h4>
                <p class="no-bottom">
                    <span class="icon icon-user1"></span>Lorem ipsum dolor sit, consectetur adipiscing. Aliquam pellentesque, purus quis pellentesque.  
                </p> 
            </div>
        </div>
        
        <div class="column">
            <div class="one-third">  
                <h4>1/3</h4>
                <p class="no-bottom">
                    <span class="icon icon-user1"></span>Lorem Ipsum is simply dum text of the print. 
                </p>
            </div>
            <div class="one-third">
                <h4>2/3</h4>
                <p class="no-bottom">
                    <span class="icon icon-user1"></span>Lorem Ipsum is simply dum text of the print. 
                 </p> 
            </div>
            <div class="one-third">
                <h4>3/3</h4>
                <p class="no-bottom">
                    <span class="icon icon-user1"></span>Lorem Ipsum is simply dum text of the print. 
                </p>
            </div>
        </div>
        
        <div class="decoration"></div>
     
        <!--Headings And Text Left Right Center--> 
        
        <div class="container no-bottom">
            <h4 class="uppercase left-text">Left Heading</h4>
            <p class="left-text">Lorem Ipsum is simply dummy text. </p>
            
            <h4 class="uppercase center-text">Center Heading</h4>
            <p class="center-text">Lorem Ipsum is simply dummy text. </p>
            
            <h4 class="uppercase right-text">Right Heading</h4>
            <p class="right-text">Lorem Ipsum is simply dummy text. </p>
        </div>
        
        <div class="decoration"></div>
        
        <div class="column">
            <div class="one-half-responsive">
                <h4 class="uppercase">Show me the headings!</h4>
                <p>All types of headings, made beautiful, perfectly selected! Headings have a very simple class that if added turn the to uppercase! No need to type all caps, no need to edit a long line! Just add or remove a class!</p>
            </div>
            <div class="one-half-responsive">
                <h5 class="center-text">This is a heading example</h5>
                <h4 class="center-text">This is a heading example</h4>
                <h3 class="center-text">This is a heading example</h3>
                <h2 class="center-text">This is a heading example</h2>
                <h1 class="center-text">This is a heading example</h1>
            </div>
        </div>
    
        <div class="decoration"></div>
       
        <!--DropCaps-->
    
        <div class="column">
            <div class="one-half-responsive">
                <h4 class="uppercase">Dropcaps!</h4>
                <p>Maybe you have a taste for oldschool typography! In that case you really need dropcaps! It's just amazing!</p>
            </div>
            <div class="one-half-responsive">
                <strong class="dropcaps">D</strong>
                ropcaps is amazing, especially when you love typopgraphy like I do! Typography is very important, and needs to be clean and perfectly sized! 
            </div>
        </div>
        
        <div class="decoration"></div>
        
        <!--Highlights-->
        
        <div class="container no-bottom">
            <h4 class="uppercase">Highlights!</h4>
            <p>There are some parts of text where bold just won't cut it! Having text highlights makes it so much easier to emphesize a point of view!</p>
        </div>
        <div class="column-responsive no-bottom">
            <div class="one-half-responsive">
                <p>
                    <span class="highlight bg-gray">Highlighted text</span>is simply awesome!
                </p>
                
                <p>
                    <span class="highlight bg-orange">Highlighted text</span>is simply awesome!
                </p>
            </div>
            <div class="one-half-responsive">
                <p>
                    <span class="highlight bg-yellow">Highlighted text</span>is simply awesome!
                </p>
                
                <p>
                    <span class="highlight bg-green">Highlighted text</span>is simply awesome!
                </p>
            </div>
        </div>
    
        <div class="decoration"></div>
    
        <div class="column no-bottom">
            <div class="one-half-responsive">
                <h4 class="uppercase">Want code?</h4>
                <p>We have this too! Of course! It's suppose to be the most complete template out there!</p>        
            </div>
            <div class="one-half-responsive">
                <div class="code">
                    <span class="wline"> &lt;p class="test1" &gt;Simple code! &lt;/p&gt;</span>
                    <span class="gline"> &lt;p class="test2" &gt;Simple code! &lt;/p&gt;</span>
                </div>        
            </div>  
        </div>
    
        <div class="decoration"></div>
    
        <!--Quotes-->
        
        <div class="column">
            <div class="one-half-responsive">
                <h4 class="uppercase">Quotes</h4>
                <p>Maybe you have some testimonials you would like to share! So we've styled some quote styles for you! Quotes can use icons or can simply be used as text! And they are extremly simple to use!</p>        
            </div>
            <div class="one-half-responsive">
                <blockquote class="quote">
                    <em>
                        "Lorem ipsum dolor sit amet, consec tetur adisc ipiscing elit."
                    </em>
                    <strong>- John Doe, CEO</strong>
                </blockquote>	
                <blockquote class="quote-icon">
                    <em>
                        <span class="icon icon-user1"></span>
                        "Lorem ipsum dolor sit amet, consec tetur adisc ipiscing elit."
                    </em>
                    <strong>- John Doe, CEO</strong>
                </blockquote>	        
            </div>
        </div>
    
        <!--Simple Lists-->
    
        <div class="container no-bottom">
            <h4 class="uppercase">Lists and Icon Lists?</h4>
            <p>lists are probably the most important element in any page! So we piled 40 of the best icons just for you!</p>
            <div class="decoration"></div>
    
            <div class="column-responsive no-bottom">
                <div class="one-half-responsive">
                    <div class="column no-bottom">
                        <div class="one-half">
                            <ul class="icon-lists">
                                <li class="list-address">Addressbook.</li>
                                <li class="list-block">Block icon list.</li>
                                <li class="list-bookmark">Bookmark list.</li>
                                <li class="list-bubble">Bubble list.</li>
                                <li class="list-briefcase">Briefcase list.</li>
                                <li class="list-buy">Buy icon list.</li>
                                <li class="list-calendar">Calendar list.</li>
                                <li class="list-clipboard">Clipboard list.</li>
                                <li class="list-delete">Delete icon list.</li>
                                <li class="list-clock">Clock icon list.</li>
                                <li class="list-diagram">Diagram list.</li>
                                <li class="list-document">Document list.</li>
                                <li class="list-down">Down icon list.</li>
                                <li class="list-flag">Flag icon list.</li>
                                <li class="list-folder">Folder icon list.</li>
                                <li class="list-gear">Gear icon list.</li>
                                <li class="list-globe">Globe icon list.</li>
                                <li class="list-heart">Heart icon list.</li>
                                <li class="list-help">Help icon list.</li>
                                <li class="list-home">Home icon list.</li>
                            </ul>            
                        </div>
                        <div class="one-half">
                            <ul class="icon-lists">
                                <li class="list-label">Label icon list.</li>
                                <li class="list-left">Left icon list.</li>
                                <li class="list-letter">Letter icon list.</li>
                                <li class="list-monitor">Monitor list.</li>
                                <li class="list-pencil">Pencil icon list.</li>
                                <li class="list-plus">Plus icon list.</li>
                                <li class="list-present">Present list.</li>
                                <li class="list-print">Print icon list.</li>
                                <li class="list-right">Right icon list.</li>
                                <li class="list-save">Save icon list.</li>
                                <li class="list-shield">Sheild icon list.</li>
                                <li class="list-statistics">Statistics list.</li>
                                <li class="list-stop">Stop icon list.</li>
                                <li class="list-tick">Tick icon list.</li>
                                <li class="list-trash">Trash icon list.</li>
                                <li class="list-up">Up icon list.</li>
                                <li class="list-user">User icon list.</li>
                                <li class="list-walet">Wallet icon list.</li>
                                <li class="list-warning">Warning list.</li>
                                <li class="list-key">Key icon list.</li>
                            </ul>           
                        </div>
                    </div>  
                </div>
                <div class="one-half-responsive">
                    <div class="column no-bottom">
                        <div class="one-half">
                            <ul class="regular-list">
                              <li>List Element 1</li>
                              <li>List Element 2</li>
                              <li>List Element 3</li>
                              <li>List Element 4</li>
                              <li>List Element 5</li>
                              <li>List Element 6</li>
                              <li>List Element 7</li>
                              <li>List Element 8</li>
                              <li>List Element 9</li>
                              <li>List Element 10</li>
                              <li>List Element 11</li>
                              <li>List Element 12</li>
                              <li>List Element 13</li>
                              <li>List Element 14</li>
                              <li>List Element 15</li>
                              <li>List Element 16</li>
                              <li>List Element 17</li>
                              <li>List Element 18</li>
                              <li>List Element 19</li>
                              <li>List Element 20</li>                      
                            </ul>   
                        </div>
                        <div class="one-half">
                            <ol class="number-list">
                              <li>List Element 1</li>
                              <li>List Element 2</li>
                              <li>List Element 3</li>
                              <li>List Element 4</li>
                              <li>List Element 5</li>
                              <li>List Element 6</li>
                              <li>List Element 7</li>
                              <li>List Element 8</li>
                              <li>List Element 9</li>
                              <li>List Element 10</li>
                              <li>List Element 11</li>
                              <li>List Element 12</li>
                              <li>List Element 13</li>
                              <li>List Element 14</li>
                              <li>List Element 15</li>
                              <li>List Element 16</li>
                              <li>List Element 17</li>
                              <li>List Element 18</li>
                              <li>List Element 19</li>
                              <li>List Element 20</li>
                            </ol>
                        </div>   
                    </div>  
                </div>
            </div>
        </div>    
        
        <div class="decoration"></div>
       
    
        <!--The Tables-->   
          
        <div class="container no-bottom">
           <h4 class="uppercase">How about a table?</h4>
           <p>And it's pure CSS3! That means you just fill in the data, and the table expands to fit the size you need!</p>
           <table cellspacing='0' class="table">
                <tr>
                    <th>TABLE</th>
                    <th class="table-title">PLUS</th>
                    <th class="table-title">PRO</th>
                </tr>
                    
                <tr>
                    <td class="table-sub-title">PACK ONE</td>
                    <td>Yes</td>
                    <td>Yes</td>
                </tr>
                
                <tr class='even'>
                    <td class="table-sub-title">PACK TWO</td>
                    <td>No</td>
                    <td>Yes</td>
                </tr>
                
                <tr>
                    <td class="table-sub-title">PACK THREE</td>
                    <td>No</td>
                    <td>No</td>
                </tr>
                
                <tr class='even'>
                    <td class="table-sub-title">VALUE</td>
                    <td class="price">$9.<sup class="small-price">99</sup></td>
                    <td class="price">$109.<sup class="small-price">99</sup></td>
                </tr>       
            </table>
        </div> 
    
        <div class="decoration"></div> 
        
        <!--Speach Bubbles-->
        
        <div class="container no-bottom">
            <h3>Speach bubbles?</h3>
            <p>A nice way of showing off a conversation maybe?</p>
        
            <em class="speach-left-title">John Doe says:</em>
            <p class="speach-left">This is just an awesome bubble!</p>
            
            <div class="clear"></div>
            
            <em class="speach-right-title">Jane Doe replied:</em>
            <p class="speach-right">Yeap! It's awesome isn't it and it's not that hard to use! And they act like bubbles, only expanding to 75% of width!</p>
            
            <div class="clear"></div>  
                 
            <em class="speach-left-title">John Doe says:</em>
            <p class="speach-left">Awesome stuff!</p>
            
        </div>
        
        <div class="decoration"></div>
        
        <div class="column no-bottom">
            <div class="one-half-responsive">
                <h4 class="uppercase">Want code?</h4>
                <p>We have this too! Of course! It's suppose to be the most complete template out there!</p>        
            </div>
            <div class="one-half-responsive">
                <div class="code">
                    <span class="wline"> &lt;p class="test1" &gt;Simple code! &lt;/p&gt;</span>
                    <span class="gline"> &lt;p class="test2" &gt;Simple code! &lt;/p&gt;</span>
                </div>        
            </div>  
        </div>
    
        <div class="decoration"></div>
    
        <!--Quotes-->
        
        <div class="column">
            <div class="one-half-responsive">
                <h4 class="uppercase">Quotes</h4>
                <p>Maybe you have some testimonials you would like to share! So we've styled some quote styles for you! Quotes can use icons or can simply be used as text! And they are extremly simple to use!</p>        
            </div>
            <div class="one-half-responsive">
                <blockquote class="quote">
                    <em>
                        "Lorem ipsum dolor sit amet, consec tetur adisc ipiscing elit."
                    </em>
                    <strong>- John Doe, CEO</strong>
                </blockquote>	
                <blockquote class="quote-icon">
                    <em>
                        <span class="icon icon-user1"></span>
                        "Lorem ipsum dolor sit amet, consec tetur adisc ipiscing elit."
                    </em>
                    <strong>- John Doe, CEO</strong>
                </blockquote>	        
            </div>
        </div>
    </div>
    <div id="tab-two">
    
        <div class="container no-bottom">
            <div class="heading">
                <div class="heading-left">
                    <em>a few type features</em>
                    <h3>jQUERY FEATURES</h3>
                </div>
                <div class="heading-right">
                    <span class="icon icon-pencil"></span>
                </div>
            </div>
        </div>
        
        <div class="decoration"></div>

        <div class="container no-bottom">
        	<h4 class="heading-icon">Checkboxes and Radios</h4>
            <p>It's important to have more than one style of checkbox, and radio! So we included a couple of sets!</p>
            <div class="column">
                <div class="one-half">
                    <a href="#" class="checker checkbox-v1">Check</a>
                    <a href="#" class="checker checkbox-v2">Check</a> 
                    <a href="#" class="checker checkbox-v3">Check</a>         
                </div>
                <div class="one-half">
                    <a href="#" class="checker radio-v1">Check</a>
                    <a href="#" class="checker radio-v2">Check</a> 
                    <a href="#" class="checker checkbox-v4">Check</a>       
                </div>
            </div>
        </div>
        <div class="decoration"></div>

    	<!--Tabs-->
    	
        <div class="container">
        	<h4 class="heading-icon">Tabs!</h4>
            <p>Tabs are just awesome! So much information in such little space, makes the page compact, clean, and fast loading!</p>
            <ul id="tab" class="tab">
                <li class="active"><a class="tab-but" href="#one">But 1</a></li>
                <li><a class="tab-but" href="#two">But 2</a></li>
                <li><a class="tab-but" href="#three">But 3</a></li>
            </ul>
            <div id="one" class="tab-content">
                <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, 
                    or randomised words which don't look.
                </p>
            </div>
            <div id="two" class="tab-content">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer. 
                </p>
            </div>
        
            <div id="three" class="tab-content">
                <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, 
                    or randomised words which don't look even slightly.
                </p>
            </div>
            <div class="clear"></div>
        </div>
        
        <div class="decoration"></div>

    	<!--Notifications-->
        
        <div class="container no-bottom">
        	<h4 class="heading-icon">Big notifications!</h4>
            <p>We all find use for these! Maybe something changed, you want your users to know that some part of your page changed! These are a simple way of doing so!</p>
            <div class="notification-box red-box">
                    <h4>ALL IS GOOD! I'M IN LOVE!</h4>
                    <a href="#" class="close-notification">x</a>
                <div class="clear"></div>
                <p>
                    Now now, relax. This is just a notification demo! No need 
                    to worry. It's not the real thing! This is just a simple 
                    notification not the apocalypse!  
                </p>  
            </div>    
            
            <div class="notification-box blue-box">
                    <h4>ALL IS GOOD! I'M IN LOVE!</h4>
                    <a href="#" class="close-notification">x</a>
                <div class="clear"></div>
                <p>
                    Now now, relax. This is just a notification demo! No need 
                    to worry. It's not the real thing! This is just a simple 
                    notification not the apocalypse!  
                </p>  
            </div>
            
            <div class="notification-box yellow-box">
                    <h4>ALL IS GOOD! I'M IN LOVE!</h4>
                    <a href="#" class="close-notification">x</a>
                <div class="clear"></div>
                <p>
                    Now now, relax. This is just a notification demo! No need 
                    to worry. It's not the real thing! This is just a simple 
                    notification not the apocalypse!  
                </p>  
            </div>   
           
            <div class="notification-box green-box">
                    <h4>ALL IS GOOD! I'M IN LOVE!</h4>
                    <a href="#" class="close-notification">x</a>
                <div class="clear"></div>
                <p>
                    Now now, relax. This is just a notification demo! No need 
                    to worry. It's not the real thing! This is just a simple 
                    notification not the apocalypse!  
                </p>  
            </div>  
       	</div>
        
        <div class="decoration"></div>

    	<!--Toggles-->
        
        <div class="container no-bottom">
            <h4 class="heading-icon">Toggles!!</h4>
            <p>Maybe you like their design, or the functionality drives you nuts, these are important and they are coded in such fashion you can use as many as you wish on the same page!</p>
        </div>
        
        <div class="container no-bottom">
            <div class="toggle-container-v3"> 
                <div class="toggle-v3">
                    <a href="#" class="show-toggle-v3">Content Is Shown!</a>
                    <a href="#" class="hide-toggle-v3">Content Is Hidden!</a>
                    <div class="clear"></div>
                    <div class="toggle-content-v3">
                        <div class="toggle-decoration-v3"></div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                             when an unknown printer took a galley of type and scrambled it to make a type 
                             specimen book. It has survived not only five centuries, but also the leap 
                             into electronic typesetting, remaining essentially unchanged. It was 
                             popularised in the 1960s with the release of Letraset sheets containing 
                             Lorem Ipsum passages, and more recently with desktop publishing software
                             like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div> 
                </div> 
            </div>
        </div>



        <div class="container no-bottom">
            <div class="toggle-container-v4"> 
                <div class="toggle-v4">
                    <a href="#" class="show-toggle-v4">Content Is Shown!</a>
                    <a href="#" class="hide-toggle-v4">Content Is Hidden!</a>
                    <div class="clear"></div>
                    <div class="toggle-content-v4">
                        <div class="toggle-decoration-v4"></div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                             when an unknown printer took a galley of type and scrambled it to make a type 
                             specimen book. It has survived not only five centuries, but also the leap 
                             into electronic typesetting, remaining essentially unchanged. It was 
                             popularised in the 1960s with the release of Letraset sheets containing 
                             Lorem Ipsum passages, and more recently with desktop publishing software
                             like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div> 
                </div> 
            </div>
        </div>

        <div class="container no-bottom">
            <div class="toggle-container-v5"> 
                <div class="toggle-v5">
                    <a href="#" class="show-toggle-v5">Content Is Shown!</a>
                    <a href="#" class="hide-toggle-v5">Content Is Hidden!</a>
                    <div class="clear"></div>
                    <div class="toggle-content-v5">
                        <div class="toggle-decoration-v5"></div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                             when an unknown printer took a galley of type and scrambled it to make a type 
                             specimen book. It has survived not only five centuries, but also the leap 
                             into electronic typesetting, remaining essentially unchanged. It was 
                             popularised in the 1960s with the release of Letraset sheets containing 
                             Lorem Ipsum passages, and more recently with desktop publishing software
                             like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div> 
                </div> 
            </div>
        </div>

        <div class="container no-bottom">
            <div class="toggle-container-v2"> 
                <div class="toggle-v2">
                    <a href="#" class="show-toggle-v2">Content Is Shown!</a>
                    <a href="#" class="hide-toggle-v2">Content Is Hidden!</a>
                    <div class="clear"></div>
                    <div class="toggle-content-v2">
                        <div class="toggle-decoration-v2"></div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                             when an unknown printer took a galley of type and scrambled it to make a type 
                             specimen book. It has survived not only five centuries, but also the leap 
                             into electronic typesetting, remaining essentially unchanged. It was 
                             popularised in the 1960s with the release of Letraset sheets containing 
                             Lorem Ipsum passages, and more recently with desktop publishing software
                             like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div> 
                </div> 
            </div>
        </div>
            
        <div class="container no-bottom">
            <div class="toggle-container-v1"> 
                <div class="toggle-v1">
                    <a href="#" class="show-toggle-v1">Content Is Shown!</a>
                    <a href="#" class="hide-toggle-v1">Content Is Hidden!</a>
                    <div class="clear"></div>
                    <div class="toggle-content-v1">
                        <div class="toggle-decoration-v1"></div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                             when an unknown printer took a galley of type and scrambled it to make a type 
                             specimen book. It has survived not only five centuries, but also the leap 
                             into electronic typesetting, remaining essentially unchanged. It was 
                             popularised in the 1960s with the release of Letraset sheets containing 
                             Lorem Ipsum passages, and more recently with desktop publishing software
                             like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div> 
                </div> 
            </div>
        </div>
        
        <div class="decoration"></div>
        
        <!--Dropdown-->
        
        <div class="container no-bottom">
        <h4 class="heading-icon">Dropdown menu's?</h4>
        <p> Most mobile templates only give you one drop down menu, you can use as many as you want with ours</p>
        
        	<div class="dropdown-menu">
            	<a href="#" class="dropdown-deploy"><em class="left-dropdown bg-light"></em>DEPLOY MENU</a>
                <a href="#" class="dropdown-hidden"><em class="left-dropdown bg-light"></em>HIDE MENU</a>
                <a href="#" class="dropdown-item bg-light">Dropdown item one</a>
                <a href="#" class="dropdown-item bg-light">Dropdown item two</a>
                <a href="#" class="dropdown-item bg-light">Dropdown item three</a>
                <div class="dropdown-bottom-border"></div>
            </div>     
        </div>
        
        <div class="decoration"></div>
        
        <!--Sliding box-->
        
        <div class="container no-bottom">
            <h4 class="heading-icon">Cute Slider?</h4>
            <p>Try this for a great anti bot method! Interaction required!</p>
                <div class="sliding-door">
                    <div class="sliding-door-top">
                        <a href="#">
                            <em class="bg-light"></em>
                            Tap for our phone number!
                        </a>
                    </div>    
                    <div class="sliding-door-bottom">
                        <a href="tel:+12 345 7890">
                            <em class="bg-light"></em>
                            <strong>Call us:</strong> 
                            +1 555 354 7890
                        </a>
                    </div>
                </div>
    		<div class="sliding-door-clear"></div>
    	</div>
        
        <div class="container no-bottom">
                <div class="sliding-door">
                    <div class="sliding-door-top">
                        <a href="#">
                            <em class="bg-light"></em>
                            Tap for our mail address!
                        </a>
                    </div>    
                    <div class="sliding-door-bottom">
                        <a href="mailto:+12 345 7890">
                            <em class="bg-light"></em>
                            <strong>Mail us:</strong> 
                            mail@domain.com
                        </a>
                    </div>
                </div>
        	<div class="sliding-door-clear"></div>
        </div>
    
    </div>
    <div id="tab-three">

        <div class="container no-bottom">
            <div class="heading">
                <div class="heading-left">
                    <em>a few type features</em>
                    <h3>OTHER FEATURES</h3>
                </div>
                <div class="heading-right">
                    <span class="icon icon-pencil"></span>
                </div>
            </div>
        </div>
        
        <div class="decoration"></div>

        <div class="container no-bottom">
            <h4 class="heading-icon">User agent detector!</h4>
            <p>Detect what user agent is browsing your device! Maybe you have an app that's developed for multiple platforms. This system detects what platform is browsing your page and shows only that button!</p>
           
            <div class="column iphone-detected no-detected-background">
                <p class="uppercase">
                    <span><img src="<?=base_url('assets/') ?>images/detector/iphone.png" class="replace-2x" width="26" alt="img"></span>
                    Availalble for your Apple iPhone on the Apple Appstore! <a href="#">Get it now! Tap here!</a>
                </p> 
            </div>
            
            <div class="column ipad-detected no-detected-background">
                <p class="uppercase">
                    <span><img src="<?=base_url('assets/') ?>images/detector/ipad.png" class="replace-2x" width="26" alt="img"></span>
                     Availalble for your Apple iPad on the Apple Appstore! <a href="#">Get it now! Tap here!</a>
                </p> 
            </div>
            
            <div class="column android-detected no-detected-background">
                <p class="uppercase">
                    <span><img src="<?=base_url('assets/') ?>images/detector/droid.png" class="replace-2x" width="26" alt="img"></span>
                     Availalble for your Android Device on the GooglePlay store! <a href="#">Get it now! Tap!</a>  
                </p> 
            </div>
        </div>    
        <div class="decoration"></div>
                
        <!--CSS3 Buttons-->
                
        <div class="decoration"></div>
              
        <div class="container">
            <h4 class="heading-icon">CSS3 Minimal Buttons</h4>
            <p class="no-bottom">Pure CSS3 buttons made to expand to the width of the screen regardless how much text is entered!</p>
            <a href="#" class="no-bottom demo-button button-minimal yellow-minimal">Button</a>
            <a href="#" class="no-bottom demo-button button-minimal grey-minimal">Button</a>
            <a href="#" class="no-bottom demo-button button-minimal red-minimal">Button</a>
            <a href="#" class="no-bottom demo-button button-minimal blue-minimal">Button</a>
            <a href="#" class="no-bottom demo-button button-minimal green-minimal">Button</a>
            <a href="#" class="no-bottom demo-button button-minimal black-minimal">Button</a>
            <a href="#" class="no-bottom demo-button button-minimal purple-minimal">Button</a>
            <a href="#" class="no-bottom demo-button button-minimal gblue-minimal">Button</a>
        </div>
        
        <div class="decoration"></div>
        
        <div class="container">
        	<h4 class="heading-icon">All above buttons fullscren!</h4>
            <p class="no-bottom">Yes, you can use fullscreen buttons as well!</p>
            <a href="#" class="no-bottom demo-button button-minimal grey-minimal fullscreen-button no-bottom">Minimal Fullscreen Button</a>
        	<a href="#" class="no-bottom demo-button button grey fullscreen-button">Regular Fullscreen Button</a>
        </div>
        
        <div class="decoration"></div>

        <!--Charts-->
    
        <div class="container no-bottom">
            <h4 class="heading-icon">Vertical Charts?</h4>
            <p>Charts are important, but everyone hates those complicated 500 lines of code charts! We have a solution! Simple CSS3 ones!</p>
            <div class="decoration"></div>
                <span class="stat-vertical-background">
                    <span class="percent-vertical red-minimal vp30"></span>
                    <span class="vertical-stat-number">a</span>
                </span>
                <span class="stat-vertical-background">
                    <span class="percent-vertical red-minimal  vp40"></span>
                    <span class="vertical-stat-number">b</span>
                </span>
                <span class="stat-vertical-background">
                    <span class="percent-vertical red-minimal  vp50"></span>
                    <span class="vertical-stat-number">c</span>
                </span>
                <span class="stat-vertical-background">
                    <span class="percent-vertical yellow-minimal  vp60"></span>
                    <span class="vertical-stat-number">d</span>
                </span>
                <span class="stat-vertical-background">
                    <span class="percent-vertical yellow-minimal  vp70"></span>
                    <span class="vertical-stat-number">e</span>
                </span>
                <span class="stat-vertical-background">
                    <span class="percent-vertical green-minimal  vp80"></span>
                    <span class="vertical-stat-number">f</span>
                </span>
                <span class="stat-vertical-background">
                    <span class="percent-vertical green-minimal  vp90"></span>
                    <span class="vertical-stat-number">g</span>
                </span>
                <span class="stat-vertical-background">
                    <span class="percent-vertical green-minimal  vp100"></span>
                    <span class="vertical-stat-number">h</span>
                </span>
            <div class="clear"></div>
        </div>
        
        <div class="decoration"></div>
        
        <div class="container no-bottom">
            <h4 class="heading-icon">Horizontal Charts?</h4>
            <p>Charts are important, but everyone hates those complicated 500 lines of code charts! We have a solution! Simple CSS3 ones!</p>
            <div class="decoration"></div>
    
            <div class="stat">
                <p class="stat-left">Monday</p>
                <p class="stat-right">123 Visits <strong class="increase">15% Increase</strong></p>
                <div class="clear"></div>
                <span class="stat-background">
                    <span class="stat-cleaner"></span>
                    <span class="percent green-minimal  p10"></span>
                </span>
            </div>
            <div class="stat">
                <p class="stat-left">Tuesday</p>
                <p class="stat-right">234 Visits<strong class="increase">45% Increase</strong></p>
                <div class="clear"></div>
                <span class="stat-background">
                    <span class="stat-cleaner"></span>
                    <span class="percent green-minimal  p40"></span>
                </span>
            </div>
            <div class="stat">
                <p class="stat-left">Wednesday</p>
                <p class="stat-right">453 Visits<strong class="increase">55% Increase</strong></p>
                <div class="clear"></div>
                <span class="stat-background">
                    <span class="stat-cleaner"></span>
                    <span class="percent green-minimal  p50"></span>
                </span>
            </div>
            <div class="stat">
                <p class="stat-left">Thursday</p>
                <p class="stat-right">300 Visits <strong class="decrease">15% Decrease</strong></p>
                <div class="clear"></div>
                <span class="stat-background">
                    <span class="stat-cleaner"></span>
                    <span class="percent red-minimal  p40"></span>
                </span>
            </div>
            <div class="stat">
                <p class="stat-left">Friday</p>
                <p class="stat-right">123 Visits<strong class="decrease">20% Decrease</strong></p>
                <div class="clear"></div>
                <span class="stat-background">
                    <span class="stat-cleaner"></span>
                    <span class="percent red-minimal  p20"></span>
                </span>
            </div>
        </div>
        <div class="decoration"></div>

    
        <!--Tables-->
        <div class="container no-bottom">
           <h4 class="heading-icon">How about a table?</h4>
           <p>And it's pure CSS3! That means you just fill in the data, and the table expands to fit the size you need!</p>
           <table cellspacing='0' class="table">
                <tr>
                    <th>TABLE</th>
                    <th class="table-title">PLUS</th>
                    <th class="table-title">PRO</th>
                </tr>
                    
                <tr>
                    <td class="table-sub-title">PACK ONE</td>
                    <td>Yes</td>
                    <td>Yes</td>
                </tr>
                
                <tr class='even'>
                    <td class="table-sub-title">PACK TWO</td>
                    <td>No</td>
                    <td>Yes</td>
                </tr>
                
                <tr>
                    <td class="table-sub-title">PACK THREE</td>
                    <td>No</td>
                    <td>No</td>
                </tr>
                
                <tr class='even'>
                    <td class="table-sub-title">VALUE</td>
                    <td class="price">$9.<sup class="small-price">99</sup></td>
                    <td class="price">$109.<sup class="small-price">99</sup></td>
                </tr>       
            </table>
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






























