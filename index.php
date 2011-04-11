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
	<meta name="author" content="pungle.me">
<?php require("include/head.php"); ?>
	
	<link rel="canonical" href="http://pungle.me" />
	
	<style type="text/css">
        #slider {
            width: 670px;
            margin: 0 auto;
            position: relative;
        }
        
        .scroll {
            height: 350px;
            width: 670px;
            overflow: auto;
            overflow-x: hidden;
            position: relative;
            clear: left;            
        }
        
        .scrollContainer div.panel {
            padding: 0;
            height: 350px;
            width: 670px;
        }
        
        #shade {            
            height: 50px;
        }       
        
        .scrollButtons {
            position: absolute;
            top: 159px;
            cursor: pointer;
        }
        
        .scrollButtons.left {
            left: -42px;
        }
        
        .scrollButtons.right {
            right: -42px;
        }
        
        .hide {
            display: none;
        }
        
        #image_map{
            width:670px;
            height:255px;
            background:url(/images/whatispungle_05.jpg) no-repeat;
            position:relative;            
        }
        
        #image_map a#iMapLink1, #image_map a#iMapLink2 {
            display:block;
            position:absolute;
            width:95px;
            height:38px;
            top:15px;
            right:96px;
            text-indent: -99999px;     
        }
        
        #image_map a#iMapLink2 { right:88px; top:93px; }
	</style>
	
</head>

<body>
<?php require("include/nav.php"); ?>

	<div id="content" class="clearfix">
		
		<div class="addthis_toolbox addthis_default_style smHanger">
			<a class="addthis_button_facebook_like" fb:like:layout="button_count" addthis:url="http://www.facebook.com/pungleDOTorg"></a>
			<a class="addthis_button_tweet" addthis:url="http://pungle.me" addthis:title="hey @JustinHammack, I just pungled a little."></a>
			<!-- <a class="addthis_counter addthis_pill_style" addthis:url="http://pungle.me"></a> -->
		</div>
	

        <!-- introducing pungle -->
		<div class="row">
			<div class="col col_6 align_center">
				<p><br/><br/><a href="/anvil/" title="Free to use, pungling for charity is easy!"><img src="/images/pungle_webapp.jpg" width="340" height="233" /></a></p>
			</div>
			<div class="col col_10">
				<p><br/><a href="#" class="readMoreImage" title="Learn more about pungle!"><img src="/images/jumpstart_charity.png" width="580" height="160"/></a></p>
				<p><b><!--100% of profits go to charity.-->Free to use. No donations or fundraising necessary!</b><br/>punglers help fund innovative, scalable charities by shopping responsibly through the anvil, indulging in alt-swag & reveling in delectable culture.<br/><br/>
				    <a class="goToAnvilButton right" href="/anvil/" title="100% free to use, pungling for charity is easy!">The Anvil</a><span class="readMoreButton right" title="Scrolling down the page is exhausting, let us help.">Read More</span>
				</p>
			</div>
		</div>
		
        
		<!-- splitsies content -->
		<div class="row" id="whatispungle">
            <div class="col col_16 align_center">
                <img src="/images/whatispungleme.png" width="940" height="40" title="i just pungled a little.." />
            </div>
        </div>        
        
        
        <!-- container for scroller-->
		<div class="row">
			<div class="col col_16">
                <div id="slider">                
                
                  <!-- element with overflow applied -->
                  <div class="scroll">
                    <!-- the element that will be scrolled during the effect -->
                    <div class="scrollContainer">
                      <!-- our individual panels -->
                      <div class="panel align_center" id="sogood">                            
                            <p><a href="/social-good/" title="Learn more!"><img src="/images/whatispungle_01.jpg" title="The social good movement, pungler style." width="670" height="249" /></a></p>
            				<p><b>Social Good:</b> Join other punglers contributing to a measurable impact on the world with every online purchase. Together we are fueling next-gen charities at no extra cost to you.</p>
                      </div>
                      <div class="panel align_center" id="zombieapoc">
                            <p><a href="/social-good/" title="Learn more!"><img src="/images/whatispungle_02.jpg" title="We are so screwed." width="670" height="249" /></a></p>
            				<p><b>Zombie Apocalypse:</b> Maybe.<!-- We're screwed unless we team up to jump start the next generation of charities. Who do you think will protect us from legions of undead? --> And that's why we're specifically targetting the next generation of charities. When it comes to zombies, an ounce of prevention is worth a pound of C-4.</p>
                      </div>
                      <div class="panel align_center" id="funding">
                            <p><a href="/anvil/" title="The Anvil beckons you."><img src="/images/whatispungle_03.jpg" title="Ready to jump straight to the Anvil? Eh?" width="670" height="249"/></a></p>				
				            <p><b>The Anvil:</b> Our charitable reserves are raised when punglers shop through the anvil, a simple online shopping tool. Ridiculously awesome swag & products are also available.</p>
                      </div>
                      <div class="panel align_center" id="results">
                            <p><a href="/social-good/goals-progress/" title="See our goals & progress!"><img src="/images/whatispungle_04.jpg" title="What exactly did pungle do with all the phat loots?" width="670" height="249"/></a></p>
    					    <p><b>Actual Results:</b> pungle.me donates profits to charities that have clear, attainable goals where we can make a real impact; tracking milestones, and progress unique to each charity's goals.</p>   
				      </div>
				      <div class="panel align_center" id="joinus">
                            <p>
                                <div id="image_map">
                                    <a href="http://www.facebook.com/pungleDOTorg" id="iMapLink1" title="This is how you can stay updated with awesomeness!" target="_blank">Facebook</a>
                                    <a href="/anvil/" id="iMapLink2" title="Get started with The Anvil">Anvil</a>                                
                                </div>
                            </p>
				            <!-- <p><img src="/images/whatispungle_05.jpg" title="Get the party started!" width="670" height="249"/></p> -->
    					    <p><b>Oath of Fealty:</b> <i>"I swear on my life that I will be loyal to pungle against all other temptations!"</i> Seriously though, pungling is easy. Like us on <a href="http://www.facebook.com/pungleDOTorg" title="This is how you can stay updated with awesomeness!" target="_blank">Facebook</a> to get updates then setup the <a href="/anvil/" title="Get started with The Anvil">Anvil</a>.<!-- or <a href="/social-good/" title="Not ready for commitment? Want to read a brick of text?">Learn More</a> about pungle.--></p>   
				      </div>
                    </div>
                  </div>                 
                  
                </div>
			</div>
		</div>
		
		
        <!-- splitsies content -->
		<div class="row">
            <div class="col col_16 align_center">
                <img src="/images/1060x1.png" title="Ouch!" width="940" height="1" />
            </div>
        </div>
        
        <!-- container for call to actions-->
		<div class="row">
			
		    <div class="col col_6 align_right">
				<p>
				    <a href="http://www.facebook.com/pungleDOTorg" target="_blank" title="Seriously, lets get you hooked up!"><img style="margin-top: 29px;" src="/images/fb_ad.jpg" width="340" height="287" /></a>
				</p>
			</div>
			
		    <div class="col col_10">
				<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/pungleDOTorg" width="580" show_faces="false" stream="true" header="false"></fb:like-box>
			</div>
			
		</div>        
	
	</div>

<?php require("include/footer.php"); ?>

	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js" type="text/javascript"></script>
	<script>!window.jQuery && document.write('<script src="/core/libs/jquery.min.js" type="text/javascript"><\/script>')</script>
    
	<!-- coda plugins (combine into 1) -->
	<script src="/core/libs/jquery.codaCombined.min.js" type="text/javascript"></script>
	
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
              .before('<img class="scrollButtons left" src="/images/left_arrow.png" />')
              .after('<img class="scrollButtons right" src="/images/right_arrow.png" />');
            
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
              duration: 650,
              
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