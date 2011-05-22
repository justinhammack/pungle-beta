<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
	<title>Save the world! | pungle.me</title>
	<meta name="description" content="The apocalypse is imminent.. it's time to save the world! Join pungle.me to maximize your impact.">
	<meta name="author" content="pungle.me">
<?php require("include/head.php"); ?>
	
	<link rel="canonical" href="http://pungle.me" />
	
	<style type="text/css">
	    .indexMission { font-size: 14px; line-height: 22px;}
	</style>
	
</head>

<body>
<?php require("include/nav.php"); ?>
    
	<div id="content" class="clearfix">
		
		<!-- text header -->
	    <div class="row" style="padding-top: 30px;">
	        <div class="col col_6">
	            <br/>	            
	        </div>
	        <div class="col col_10 align_right indexMission">
	            Maximize your buying power. Pungle turns ordinary purchases into high<br/> impact donations to non-profits at no cost to you. <strong><i>Join today. Save the world.</i></strong>
	        </div>
		</div>
		
	    <!-- introducing pungle -->
		<div class="row">
			<div class="col col_6">
				<p><a href="#" class="readMoreImage" title="Learn more about pungle!"><img src="/images/recruits-wanted.jpg" alt="Recruits wanted!" width="340" height="361"/></a></p>
				<!-- <p><br/>Shop at pungle to transform ordinary purchases into pure awesome. Build a better world, mock the incompetent & feel good about yourself! -->
				    <!--Pungling is responsible shopping; where your puchases help make the world a better place.--><!--100% of profits go to charity.--><!-- Free to use. -->
				    <!-- Free to use. Most major stores supported.</b><br/><br/> -->
				    <!-- <span class="readMoreButton left" title="Scrolling down the page is exhausting, let us help.">Read More</span><a class="goToAnvilButton left" href="/anvil/" title="100% free to use, pungling for charity is easy!">The Anvil</a>-->
				<!-- </p> -->
			</div>
			<div class="col col_10 align_center">
				<p><a href="#" title="Save the world!"><img src="/images/save-the-world.jpg" alt="Save the World" width="580" height="361" /></a></p>
			</div>
		</div>
		
		
		<!-- social media hangar 
		<div class="addthis_toolbox addthis_default_style smHanger">
			<a class="addthis_button_facebook_like" fb:like:layout="button_count" addthis:url="http://www.facebook.com/pungleDOTorg"></a>
			<a class="addthis_button_tweet" addthis:url="http://pungle.me" addthis:title="hey @JustinHammack, I just pungled a little."></a>			
		</div> -->
		
        
		<!-- splitsies content 
		<div class="row" id="whatispungle">
            <div class="col col_16 align_center">
                <img src="/images/whatispungleme.png" width="940" height="40" title="i just pungled a little.." />
            </div>
        </div>-->
	
	</div>

<?php require("include/footer.php"); ?>

	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js" type="text/javascript"></script>
	<script>!window.jQuery && document.write('<script src="/core/libs/jquery.min.js" type="text/javascript"><\/script>')</script>

	
	<script type="text/javascript">
	    $(document).ready(function(){
            
            $('.readMoreButton, .readMoreImage').click(function(){
				$('html, body').animate({
					scrollTop: $("#whatispungle").offset().top
				}, 800);
			});
			
	    });
	</script> 
    
	<!-- put this here because it can stall out like a fighter jet going vertical -->
	<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=pungle"></script>

</body>

</html>