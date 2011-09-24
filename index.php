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
	            <h1 id="pungleCount">6,709 people agree.</h1>
	            <br/>
	            <h3>The pungle.me app is the easiest way to support a good cause for free when you shop online.</h3>
	            <br/>
	            <a id="extInstall" class="ctabutton" href="#">Install Now</a>
	            <br/>
	            <p>
	               2 clicks and you're done installing the pungle.me app, takes less than 5 seconds. Give it a whirl!
	            </p>
	            <p>Have questions? We have <a href="#scrollAnswers">answers</a>.</p>
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
		  <div class="col col_16" id="gotAnswers">
		    <br/>
		    <h3>Answers</h3>
		    <p>First time here? You're probably wondering...</p>
		    <p><strong>All I have to do is install the app?</strong> Yep, we take care of the rest.</p>
		    <p><strong>What does the app do?</strong> The app generates referral revenue (at no cost to you) any time you shop at <a href="/shop/">stores we support</a>. That referral revenue is donated to the cause you choose. Learn <a href="/how-it-works/">how it works</a>.</p>
		    <p><strong>What’s in it for me?</strong> The pungle app makes it ridiculously easy for you to give back to a good <a href="/cause-portfolio/">cause</a>. It’s free and there’s no hassle, just install the app and we take care of the rest.</p>
		    <p><strong>Ok, I’ve installed the app, how do I know it’s working?</strong> Look for the high-five icon <img src="/images/icon.png" alt="pungle icon"> in the address bar (Chrome) or lower right corner (Firefox) when you are at a <a href="/shop/">supported store</a>.</p>
		    <p><strong>How do I change my cause?</strong> Click the high-five icon <img src="/images/icon.png" alt="pungle icon"> and you can choose a different cause.</p>
		    <p><strong>How much is donated?</strong> The amount donated is on the <a href="/shop/">store list</a> page (it’s typically a % of your purchase).</p>
		    <br/><br/>
		  </div>
		</div>
		
	</div>
	
</div>

<?php require("include/footer.php"); ?>


	
	<script type="text/javascript">
	    function addCommas(nStr) {
      	nStr += '';
      	x = nStr.split('.');
      	x1 = x[0];
      	x2 = x.length > 1 ? '.' + x[1] : '';
      	var rgx = /(\d+)(\d{3})/;
      	while (rgx.test(x1)) {
      		x1 = x1.replace(rgx, '$1' + ',' + '$2');
      	}
      	return x1 + x2;
      }
      
	    $(document).ready(function(){
        var pCauses = [];
        var pCount = 0;
        
        $.ajax({ url: '/core/pungleCAUSES.json', dataType: 'json', async: false, success: function(data) { pCauses = data.slice(); } });
        
        $.each(pCauses, function(index){
            pCauses[index] -= 2750;
            pCount += pCauses[index];
        });
        
        $('#pungleCount').html(addCommas(pCount) + ' People Agree.');
        
        $('a[href=#scrollAnswers]').click(function(){
				  $('html, body').animate({
				    scrollTop: $("#gotAnswers").offset().top
				  }, 800);
			  });
	    });
	</script>


</body>

</html>
