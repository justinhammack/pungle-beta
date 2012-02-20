	<div id="header_wrapper">
		<div id="header" class="clearfix">
			
		    <?php
				// check what script page we're on
				$pbreak = Explode('/', $_SERVER["SCRIPT_NAME"]);
				$pfile = $pbreak[count($pbreak) - 1];
			?>
			
			<!-- <a id="headerImage" href="/" title="pungle time!">pungle<img src="/images/pungle_me_logo.png" width="199" height="58" /></a> -->
			<?php if ($pfile=="index.php") { ?> <a href="/" title="Give Back"><h1 class="headerBannerInterior">Give Back</h1></a> <?php }
			else { ?> <a class="headerBannerInterior" href="/" title="Give Back">pungle</a> <?php } ?>
			
			<!-- <div class="header_social">
				<a class="fbButtonLink" href="http://www.facebook.com/pungleDOTorg" target="_blank" title="Connect with punglers on facebook.">Facebook</a>
				<a class="twButtonLink" href="http://twitter.com/pungleme" target="_blank" title="Follow pungle on Twitter.">Twitter</a>
			</div> -->
			
			<?php if ($pfile!="index.php") { ?>
    			<!-- PIR frame on top bar 
    			<div id="mbp">            
    			    <a id="mbpRating" href="/financial/" title="Current donation efficiency, help us raise it.">35% PIR</a>
                </div>-->
            <?php } ?>
            
			<nav>
				<ul class="navigation">
					<li>
					    <a title="Browse available stores." href="/shop/">Stores</a>
			    </li>
			    <li>
	          <a <?php if ($pfile=="npos.php") { ?>class="subSelected"<?php } ?> href="/cause-portfolio/" title="See the difference Punglers have made.">Causes</a>
	        </li>
			    <li>
		        <a <?php if ($pfile=="sogood.php") { ?>class="subSelected"<?php } ?> href="/how-it-works/" title="Check out how it works.">How It Works</a>
		      </li>
				    <!-- <li class="parentNav">
					    <a href="/how-it-works/">Learn More</a>
					    <ul>
					       <li>
					            <a href="http://pungle.storenvy.com/" title="Pungle loot to show off your hero status!">Store</a>					    
				         </li> 
					        
				          <li>
					            <a <?php if ($pfile=="tutorial.php") { ?>class="subSelected"<?php } ?> href="/tutorial/" title="Learn how to use the shopping tool.">Shop Tutorial</a>
					        </li> -->
				          
					        <!-- <li>
					            <a <?php if ($pfile=="about.php") { ?>class="subSelected"<?php } ?> href="/about-us/" title="Who are the people behind the scenes?">About Pungle</a>
					        </li>
					        <li>
					            <a <?php if ($pfile=="team.php") { ?>class="subSelected"<?php } ?> href="/about-us/our-team/" title="Who are the people behind the scenes?">Our Team</a>
					        </li>					        
					        <li>
					            <a <?php if ($pfile=="contact.php") { ?>class="subSelected"<?php } ?> href="/about-us/contact/" title="Who are the people behind the scenes?">Contact</a>
					        </li>					        
					        <li>
					            <a <?php if ($pfile=="anvilfaq.php") { ?>class="subSelected"<?php } ?> href="/anvil/faq/" title="Answers to some common questions.">FAQ</a>
					        </li> 
					    </ul>
				    </li>
				    <li>
					    <a href="http://blog.pungle.me" title="Facts, Opinions, Comics, Satire." target="_blank">Blog</a>
				    </li>-->
					<!-- <li class="parentNav">
					    <a href="/social-good/">Learn More</a>
					    <ul>
					        <li>
					            <a <?php if ($pfile=="sogood.php") { ?>class="subSelected"<?php } ?> href="/social-good/" title="We're at a fork in the road, let's talk about options.">Social Good</a>
					        </li>					        
					        <li>
					            <a <?php if ($pfile=="progress.php") { ?>class="subSelected"<?php } ?> href="/social-good/goals-progress/" title="Check out our goals and track our progress.">Goals & Progress</a>
					        </li>
					    </ul>
				    </li> -->				    
				</ul>
			</nav>
			
		</div>		
	</div>	
	
	<div id="content_wrapper">