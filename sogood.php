<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
    <title>pungle - social good program</title>
    <meta name="description" content="How pungle can help shape the social good movement through it's online shopping interface.">
    <meta name="author" content="pungle.me">
<?php require("include/head.php"); ?>
     
    <link rel="canonical" href="http://pungle.me/social-good/" />
    
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
        
    	<div class="row">
            <div class="col col_16">
            	<h2>Social Good</h2>
            	<br/>
            	<img src="/images/PUcautionarytale940x700.jpg" alt="social fail" title="Cautionary tale!" width="940" height="700" />	
            </div>
        </div>
        
        <div class="row">
        	
        	<div class="col col_16 align_center">
        		<img src="/images/1060x1.png" title="Ouch!" width="940" height="1" />
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
                            <p><a href="#zombieapoc" title="Learn more!"><img src="/images/whatispungle_01.jpg" title="The social good movement, pungler style." width="670" height="249" /></a></p>
            				<p><b>Social Good:</b> Join other punglers in contributing to a measurable impact on the world with every online purchase. Together we are fueling next-gen charities at no extra cost to you.</p>
                      </div>
                      <div class="panel align_center" id="zombieapoc">
                            <p><a href="#funding" title="Learn more!"><img src="/images/whatispungle_02.jpg" title="We are so screwed." width="670" height="249" /></a></p>
            				<p><b>Zombie Apocalypse:</b> Maybe.<!-- We're screwed unless we team up to jump start the next generation of charities. Who do you think will protect us from legions of undead? --> And that's why we're specifically targetting the next generation of charities. When it comes to zombies, an ounce of prevention is worth a pound of C-4.</p>
                      </div>
                      <div class="panel align_center" id="funding">
                            <p><a href="#results" title="The Anvil beckons you."><img src="/images/whatispungle_03.jpg" title="Ready to jump straight to the Anvil? Eh?" width="670" height="249"/></a></p>				
				            <p><b>The Anvil:</b> Our charitable reserves are raised when punglers shop through the anvil, a simple online shopping tool with stores you're familiar with. Pungler loot/swag is also available.</p>
                      </div>
                      <div class="panel align_center" id="results">
                            <p><a href="#joinus" title="See our goals & progress!"><img src="/images/whatispungle_04.jpg" title="What exactly did pungle do with all the phat loots?" width="670" height="249"/></a></p>
    					    <p><b>Actual Results:</b> Pungle donates profits to charities that have clear, attainable goals where we can make a real impact; tracking milestones, and progress unique to each charity's goals.</p>   
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
		
    	<!-- social good program explained -->
    	<div class="row">
            <div class="col col_6 align_center">
            	<p><a href="/social-good/cause-portfolio/" title="Check out the awesome nonprofits we work with!"><img src="/images/social_good_icon.jpg" width="304" height="121" /></a></p>
            </div>
        	<div class="col col_10">
            	
            	<p><img src="/images/an_idea.png" title="An Idea" width="296" height="54" /></p>
            	<p><strong>Inspired by a global social good movement, pungle is taking action. </strong></p>
            	<p class="align_justify"><!--As the Internet evolves, it's reach increases and the world shrinks.  Today we can see what's happening, in real time, nearly anywhere on the planet.  As we rejoice in our technological revolution, we are at a crossroads where we can no longer stand in the shadow of blissful ignorance. -->Through technology pungle provides the opportunity to make a difference globally. Right now there are people without access to some very basic human needs: clean water, education, large scale disease prevention, agriculture and fundamental human rights. We accomplish this by working with next generation nonprofits that deliver tangible results.<br/><br/><a href="/social-good/cause-portfolio/" title="Check out the awesome nonprofits we work with!">Check out the Nonprofits ></a></p></p>
            	
        	</div>
        </div>
		
        <div class="row">
            <div class="col col_6 align_center">
            	<p><a href="/anvil/" title="The Anvil beckons you."><img src="/images/anvil_icon_lrg.png" width="199" height="200" /></a></p>
            </div>
        	<div class="col col_10">
            	
            	<p><img src="/images/the_tool.png" title="The Tool" width="337" height="54" /></p>
            	<p><strong>Enabling change requires a tool, so we built the anvil shopping interface.</strong></p>
            	<p class="align_justify"><!-- Like an anvil, the beauty is in it's simplicity. -->Pungle leverages its network of online retailers to convert advertising dollars into social good when shopping through the Anvil. Stores currently enabled for our social good program are marked with a heart. Don't even worry about it, we'll manage the relationships, you just sit back and shop. <!-- We have the chance to power one of the greatest social good movements in history through the colossus that is online retail.  How? Use the anvil, it's that simple. A small change in how you shop online can help power a massive shift in social good. where you start your online shopping adventures enables great change globally. So, where to start?-->  Remember to bookmark the anvil or make it your homepage. <!--, then just shop through pungle and we'll take care of the rest.< or even put a shortcut on your desktop if you're into that sort of thing. The anvil exists, but without someone striking down upon it with a hammer, nothing happens.--><br/><br/><a href="/anvil/" title="The Anvil beckons you.">Let's head over to The Anvil ></a></p></p>
            	
        	</div>
        </div>
        
        <div class="row">
            <div class="col col_6 align_center">
            	<p><a href="/social-good/goals-progress/" title="How are we going to get there? Find out."><img src="/images/icon_set_lrg.jpg" width="306" height="303" /></a></p>
            </div>
        	<div class="col col_10">
            	
            	<p><img src="/images/results.png" title="Results" width="296" height="54" /></p>
            	<p><strong>Wells are drilled, schools built, education funded, & nets distributed.</strong></p>
            	<p class="align_justify">Fundamental human rights include a secure livelihood, basic social services, safety, a voice, and equality. For clean water, wells are just the start. Water projects lead to sanitation training, installed latrines and simple hand-washing stations. By building schools, a dedication to lasting education remains a part of our campaign. Concerning global health, malaria is a big problem with a simple solution, bed nets.  The nets can reduce transmission of malaria by as much as 90%.  As for agricultural development, small-scale farmers around the world receive supplies and support for developing sustainable farming methods.  We want to see actual results and not just a dollar amount being thrown at a problem. <!-- Rather than just throwing money at charities, we're going to hold them accountable for results!--><br/><br/><a href="/social-good/goals-progress/" title="How are we going to get there? Find out.">See our goals, progress and results ></a></p>
            	
        	</div>
        </div>
        
    </div>

<?php require("include/footer.php"); ?>
    
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
    
</body>

</html>