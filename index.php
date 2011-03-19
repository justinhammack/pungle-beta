<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
	<title>pungle - social good & comedy gold</title>
	<meta name="description" content="pungle helps build a sustainable future for developing nations through the power of online retail .. also we mine comedy gold.">
	<meta name="author" content="pungle.org">
<?php require("include/head.php"); ?>
	
	<link rel="canonical" href="http://pungle.org/index.php" />
	
	<style type="text/css">
        #slider {
            width: 760px;
            margin: 0 auto;
            position: relative;
        }
        
        .scroll {
            height: 250px;
            width: 760px;
            overflow: auto;
            overflow-x: hidden;
            position: relative;
            clear: left;
            background: #FFFFFF url(images/content_pane-gradient.gif) repeat-x scroll left bottom;
        }
        
        .scrollContainer div.panel {
            padding: 20px;
            height: 210px;
            width: 720px;
        }
        
        #shade {
            background: #EDEDEC url(images/shade.jpg) no-repeat 0 0;
            height: 50px;
        }
        
        ul.navigation {
            list-style: none;
            margin: 0;
            margin-top: 5px;
            padding: 0;
            padding-bottom: 9px;
        }
        
        ul.navigation li {
            display: inline;
            margin-right: 10px;
            margin-left: 10px;
        }
        
        ul.navigation a {
            background-color: #fff2d8;
            padding: 4px 12px;            
            text-decoration: none;
            /* -webkit-text-stroke: 1px transparent;
            font: 26px/36px Arial, Verdana, Helvetica, sans-serif; 
            text-transform: lowercase; */
            color: #444;
            border: 1px solid #f0b02a;
            -moz-border-radius: 6px; -webkit-border-radius: 6px; border-radius: 6px;
        }
        
        ul.navigation a:hover {
            background-color: #ffe6b3;
        }
        
        ul.navigation a.selected {
            background-color: #fdfdfc;
        }
        
        ul.navigation a:focus {
            outline: none;
        }
        
        .scrollButtons {
            position: absolute;
            top: 65px;
            cursor: pointer;
        }
        
        .scrollButtons.left {
            left: -66px;
        }
        
        .scrollButtons.right {
            right: -66px;
        }
        
        .hide {
            display: none;
        }
	</style>
	
</head>

<body>
<?php require("include/nav.php"); ?>

	<div id="content" class="clearfix">
		
		<!-- interactive social media buttons 
		<div class="twHanger"><a href="http://twitter.com/share" class="twitter-share-button" data-url="http://pungle.org" data-text="Hey @JustinHammack, I just pungled a little." data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>
		<div class="fbHanger"><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="http://www.facebook.com/pungleDOTorg" layout="button_count" show_faces="false" width="90" font="arial"></fb:like></div> -->
		<div class="addthis_toolbox addthis_default_style smHanger">
			<a class="addthis_button_facebook_like" fb:like:layout="button_count" addthis:url="http://www.facebook.com/pungleDOTorg"></a>
			<a class="addthis_button_tweet" addthis:url="http://pungle.org" addthis:title="hey @JustinHammack, I just pungled a little."></a>
			<a class="addthis_counter addthis_pill_style" addthis:url="http://pungle.org"></a>
		</div>
		
		<!-- introducing pungle -->
		<div class="row">
			<div class="col col_5 align_center">
				<p><a href="anvil.php" title="The Anvil in action!"><img src="images/pungle_webapp.jpg" width="388" height="266" /></a></p>
			</div>
			<div class="col col_8">
				<p><a href="sogood.php" title="Learn how to get involved!"><img src="images/jumpstart_charity.png" width="640" height="160"/></a></p>
				<p><b>100% free. No donations, fundraising, or registration required.</b><br/>punglers help fund innovative charities by shopping though the anvil & reveling in our delectable culture. Interested? <a href="sogood.php" title="Learn how to get involved!">Become a pungler ></a></p>
			</div>
		</div>
		
		<!-- splitsies content -->
		<div class="row">
            <div class="col col_13 align_center">
                <img src="images/how_it_works.png" width="1060" height="40" title="i just pungled a little.." />
            </div>
        </div>
  	
		<!-- container for propaganda 
		<div class="row">
			<div class="col col_5 align_center">
				<p><a href="sogood.php" title="Learn more!"><img src="images/social_good_icon.jpg" title="The social good movement." width="304" height="121" /></a></p>
				<h2><a href="sogood.php" title="Learn more!">AN IDEA</a></h2>
				<p>pungle is helping shape the future of global social good by starting with the basics. <a href="sogood.php" title="Learn more!">Learn More ></a></p>
			</div>
			<div class="col col_4 align_center">
				<p><a href="anvil.php" title="The Anvil beckons you."><img src="images/anvil_icon.png" title="Social good starts with a tool." width="120" height="121"/></a></p>
				<h2><a href="anvil.php" title="The Anvil beckons you.">THE TOOL</a></h2>
				<p>Participation requires a tool; we built the anvil shopping interface. <a href="anvil.php" title="Check it out!">The Anvil ></a></p>
			</div>
			<div class="col col_4 align_center">
				<p><a href="progress.php" title="See our goals & progress!"><img src="images/icon_set.jpg" title="Here is our progress." width="304" height="120"/></a></p>
				<h2><a href="progress.php" title="See our goals & progress!">RESULTS</a></h2>
				<p>Wells are drilled, schools built, nets distributed, & cows go moo. <a href="progress.php" title="See our goals & progress!">See Goals ></a></p>
			</div>
		</div> -->
    
        <!-- container for scroller-->
		<div class="row">
			<div class="col col_13">
                <div id="slider">
                
                   <ul class="navigation align_center">
                    <li><a href="#zombieapoc">Zombie Apocalypse</a></li>
                    <li><a href="#sogood">Social Good</a></li>
                    <li><a href="#funding">Capital Investment</a></li>
                    <li><a href="#results">Measuring Results</a></li>                    
                  </ul>
                      
                  <!-- element with overflow applied -->
                  <div class="scroll">
                    <!-- the element that will be scrolled during the effect -->
                    <div class="scrollContainer">
                      <!-- our individual panels -->
                      <div class="panel align_center" id="zombieapoc">
                            <p><a href="sogood.php" title="Learn more!"><img src="images/social_good_icon.jpg" title="We are so screwed." width="304" height="121" /></a></p>
            				<p><b>Zombie Apocalypse:</b> You know it's inevitable. So just stop trying to fight it.</p>
                      </div>
                      <div class="panel align_center" id="sogood">                            
                            <p><a href="sogood.php" title="Learn more!"><img src="images/social_good_icon.jpg" title="The social good movement, pungler style." width="304" height="121" /></a></p>
            				<p><b>Social Good:</b> punglers are helping shape the future of global social good by funding & supporting innovative new charities that have a purity of cause and show promising, scalable future growth.</p>
                      </div>
                      <div class="panel align_center" id="funding">
                            <p><a href="anvil.php" title="The Anvil beckons you."><img src="images/anvil_icon.png" title="Are you always so mousey?" width="120" height="121"/></a></p>				
				            <p><b>The Anvil:</b> capital is raised when punglers shop through the anvil, a bookmarking tool for stores that replaces traditional advertising. Additional swag is available to supplement the campaign.</p>
                      </div>
                      <div class="panel align_center" id="results">
                            <p><a href="progress.php" title="See our goals & progress!"><img src="images/icon_set.jpg" title="What exactly did pungle do with all the phat loots?" width="304" height="120"/></a></p>
    					    <p><b>Results:</b> pungle then invests the funds into its portfolio, return on the investment is tracked independently through goals unique to each charity. Wells are drilled, schools built, nets distributed, & cows go moo.<br/><a href="sogood.php" title="You look like you'd make a fantastic pungler!">Get involved ></a></p>   
				      </div>                      
                    </div>
                  </div>                 
                  
                </div>
			</div>
		</div>
		
        <!-- splitsies content -->
		<div class="row">
            <div class="col col_13 align_center">
                <img src="images/1060x1.png" title="Ouch!" width="1060" height="1" />
            </div>
        </div>
        
        <!-- container for call to actions-->
		<div class="row">
			
		    <div class="col col_6 align_right">
				<a href="http://www.facebook.com/pungleDOTorg" target="_blank" title="Seriously, lets get you hooked up!"><img style="margin-top: 29px;" src="images/fb_ad.jpg" width="397" height="335" /></a>
			</div>
			
		    <div class="col col_7">
				<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/pungleDOTorg" width="556" show_faces="false" stream="true" header="false"></fb:like-box>
			</div>
			
		</div>        
	
	</div>

<?php require("include/footer.php"); ?>

	<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=pungle"></script>
	
	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js" type="text/javascript"></script>
	<script>!window.jQuery && document.write('<script src="core/libs/jquery.min.js" type="text/javascript"><\/script>')</script>
    
	<!-- coda plugins (combine into 1) -->
	<script src="core/libs/jquery.codaCombined.min.js" type="text/javascript"></script>
	
	<script type="text/javascript">
	    $(document).ready(function(){
            
	        // when the DOM is ready...
            
            var $panels = $('#slider .scrollContainer > div');
            var $container = $('#slider .scrollContainer');
            
            // if false, we'll float all the panels left and fix the width 
            // of the container
            var horizontal = true;
            
            // float the panels left if we're going horizontal
            if (horizontal) {
              $panels.css({
                'float' : 'left',
                'position' : 'relative' // IE fix to ensure overflow is hidden
              });
              
              // calculate a new width for the container (so it holds all panels)
              $container.css('width', $panels[0].offsetWidth * $panels.length);
            }
            
            // collect the scroll object, at the same time apply the hidden overflow
            // to remove the default scrollbars that will appear
            var $scroll = $('#slider .scroll').css('overflow', 'hidden');
            
            // apply our left + right buttons
            $scroll
              .before('<img class="scrollButtons left" src="images/left_arrow.png" />')
              .after('<img class="scrollButtons right" src="images/right_arrow.png" />');
            
            // handle nav selection
            function selectNav() {
              $(this)
                .parents('ul:first')
                  .find('a')
                    .removeClass('selected')
                  .end()
                .end()
                .addClass('selected');
            }
            
            $('#slider .navigation').find('a').click(selectNav);
            
            // go find the navigation link that has this target and select the nav
            function trigger(data) {
              var el = $('#slider .navigation').find('a[href$="' + data.id + '"]').get(0);
              selectNav.call(el);
            }
            
            if (window.location.hash) {
              trigger({ id : window.location.hash.substr(1) });
            } else {
              $('ul.navigation a:first').click();
            }
            
            // offset is used to move to *exactly* the right place, since I'm using
            // padding on my example, I need to subtract the amount of padding to
            // the offset.  Try removing this to get a good idea of the effect
            var offset = parseInt((horizontal ? 
              $container.css('paddingTop') : 
              $container.css('paddingLeft')) 
              || 0) * -1;
            
            
            var scrollOptions = {
              target: $scroll, // the element that has the overflow
              
              // can be a selector which will be relative to the target
              items: $panels,
              
              navigation: '.navigation a',
              
              // selectors are NOT relative to document, i.e. make sure they're unique
              prev: 'img.left', 
              next: 'img.right',
              
              // allow the scroll effect to run both directions
              axis: 'xy',
              
              onAfter: trigger, // our final callback
              
              offset: offset,
              
              // duration of the sliding effect
              duration: 500,
              
              // easing - can be used with the easing plugin: 
              // http://gsgd.co.uk/sandbox/jquery/easing/
              easing: 'swing'
            };
            
            // apply serialScroll to the slider - we chose this plugin because it 
            // supports// the indexed next and previous scroll along with hooking 
            // in to our navigation.
            $('#slider').serialScroll(scrollOptions);
            
            // now apply localScroll to hook any other arbitrary links to trigger 
            // the effect
            $.localScroll(scrollOptions);
            
            // finally, if the URL has a hash, move the slider in to position, 
            // setting the duration to 1 because I don't want it to scroll in the
            // very first page load.  We don't always need this, but it ensures
            // the positioning is absolutely spot on when the pages loads.
            scrollOptions.duration = 1;
            $.localScroll.hash(scrollOptions);
            
	    });
	</script> 
    
</body>

</html>