<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
	<title>Social Good! | pungle.me</title>
	<meta name="description" content="Social good that's free, easy, and makes a difference when shopping online.">
	<meta name="author" content="pungle.me">
<?php require("include/head.php"); ?>
	
	<link rel="canonical" href="http://pungle.me" />
	
	<style type="text/css">
	    .indexMission { font-size: 14px; line-height: 22px;}
	    
	    html { background: #003B74 url('/images/PU_frontpage_bg.png') top left scroll repeat-x; }
	    
	    body {
            padding: 0;
            margin: 0;
            
            width: 100%;
            display: table;
        }
        
        #content_wrapper {            
            background: none;
        }
        
        #content_wrapper2 {
          display: block;    
          background: none;
          background-color: #ccebff;
          padding: 0;
          width: 100%;
        }
        
        #content {
          background: none;
          -webkit-box-shadow: none;
	        -moz-box-shadow: none;
	        box-shadow: none;
	        padding-bottom: 0px;
        }
        
	    #subfooter {display: none;}

	</style>
	
</head>

<body>
<?php require("include/nav.php"); ?>
    
	<div id="content" class="clearfix">
		
		<!-- text header -->
	    <div class="row">
	        
	        <div class="col col_8 align_left">
	            <br/>
	            <h1>6,709 people agree.</h1>
	            <h3>pungle is the easiest way to support causes when you shop online. free.</h3>
	            <br/>
	            <a id="extInstall" class="ctabutton" href="#">Install App</a>
	            <br/>
	        </div>	 
	        
	        <div class="col col_8 align_right">
	            <img src="images/thumbsUpCat385x485.png" />
	        </div>
	        
	    </div>
	</div>
</div> <!-- ends content wrapper hidden in header -->

<div id="content_wrapper2">
  <div id="content" class="clearfix">
    
		<div class="row">
		  <div class="col col_16">
		    <h3>Top Causes</h3>
		    <p>Install the app and select a <b>cause</b>.</p>
		  </div>
		</div>
		
		<div class="row">
		  <div class="col col_3">
		    <p><img src="/images/ca_edu_ico64x64.png" /></p>
		    <p><b>Education</b><br/>
		      Get students the tools they need to learn.
		    </p>
		  </div>
		  <div class="col col_3">
		    <p><img src="/images/ca_tech_ico64x64.png" /></p>
		    <p><b>Technology</b><br/>
		      Development of life-changing technology.
		    </p>
		  </div>
		  <div class="col col_3">
		    <p><img src="/images/ca_water_ico64x64.png" /></p>
		    <p><b>Potable Water</b><br/>
		      Build sustainable fresh water sources.
		    </p>
		  </div>
		  <div class="col col_3">
		    <p><img src="/images/ca_nature_ico64x64.png" /></p>
		    <p><b>Nature</b><br/>
		      Increase forest size & natural landscapes.
		    </p>
		  </div>
		  <div class="col col_3">
		    <p><img src="/images/ca_energy_ico64x64.png" /></p>
		    <p><b>Clean Energy</b><br/>
		      Offset your carbon footprint.
		    </p>
		  </div>
		  <div class="col col_1">
		    <br/>		    
		  </div>
		</div>
		
		<div class="row">
		  <div class="col col_16">
		    <h3>Answers</h3>
		    <p>First time here? You're probably wondering...</p>
		    <p><strong>All I have to do is install the app?</strong> Yep, we take care of the rest.</p>
		    <p><strong>What does the app do?</strong> The app generates referral revenue (at no cost to you) any time you shop at <a href="/shop/">stores we support</a>. That referral revenue is donated to the cause you choose. Learn <a href="/how-it-works/">how it works</a>.</p>
		    <p><strong>What’s in it for me?</strong> The pungle app makes it ridiculously easy for you to give back to a good <a href="/cause-portfolio/">cause</a>. It’s free and there’s no hassle, just install the app and we take care of the rest.</p>
		    <p><strong>Ok, I’ve installed the app, how do I know it’s working?</strong> Look for the high-five icon <img src="/images/icon.png" alt="pungle icon"> in the address bar (Chrome) or lower right corner (Firefox) when you are at a <a href="/shop/">supported store</a>.</p>
		    <p><strong>How much is donated?</strong> The amount donated is on the <a href="/shop/">store list</a> page (it’s typically a % of your purchase).</p>
		  </div>
		</div>
		
	</div>
	
</div>

<?php require("include/footer.php"); ?>

	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js" type="text/javascript"></script>
	<script>!window.jQuery && document.write('<script src="/core/libs/jquery.min.js" type="text/javascript"><\/script>')</script>
  <script src="core/libs/jquery.browser.min.js"></script>
	
	<script type="text/javascript">
	    $(document).ready(function(){
        
        if($.browser.name == 'chrome') {
          $("#extInstall").attr('href', 'http://pungle.me/extensions/chrome1.0.5.crx');
        } else if ($.browser.name == 'firefox') {
          $("#extInstall").attr('href', 'http://pungle.me/extensions/firefox0.5.24.xpi');
        } else {
          $('#extInstall').click(function() {
            alert('Sorry, we only support Chrome & Firefox.');
          });
        }
        
        
        $('.readMoreButton, .readMoreImage').click(function(){
				  $('html, body').animate({
				    scrollTop: $("#whatispungle").offset().top
				  }, 800);
			  });
			  
	    });
	</script>


</body>

</html>
