	<!-- Fix the header, why do I need clearfix for this to work? are there no objects of value here? object space, better css.. -->
	<div id="header_wrapper">
		<div id="header" class="clearfix">
			<!-- <div class="row">
				<div class="col col_13">
					<p>header</p>					
				</div>
			</div> -->
			<a href="/" title="pungle time!"><img src="/images/pungle_me_logo.png" width="199" height="58" /></a>
			<div class="header_social">
				<a class="fbButtonLink" href="http://www.facebook.com/pungleDOTorg" target="_blank" title="Connect with punglers on facebook.">Facebook</a>
				<a class="twButtonLink" href="http://twitter.com/JustinHammack" target="_blank" title="Follow our founder on Twitter.">Twitter</a>
			</div>
			<nav>
				<ul>
					<li class="navAnvil" ><a href="/anvil/" title="our signature shopping tool">The Anvil</a></li>
					<li><a href="/social-good/" title="Learn more about our social good campaign.">Social Good</a></li>
					<!-- <li><a href="http://52framework.com/documentation">Social Good</a></li> 
					<li><a href="http://52framework.com/about">About Us</a></li> -->
					<li><a href="/about-us/" title="Who are the people behind the scenes?">About Us</a></li>					
				</ul>
			</nav>
		</div>		
	</div>
	
	<div id="subheader_wrapper">
		<div id="subheader" class="clearfix">			
			<?php
				// setup the different page menu files
				$psogood = array("sogood.php","npos.php","progress.php");
				$pabout	= array("about.php","privacy.php","tos.php");
				$panvil	= array("anvil.php","anvilfaq.php","tutorial.php");
				
				// check what script page we're on
				$pbreak = Explode('/', $_SERVER["SCRIPT_NAME"]);
				$pfile = $pbreak[count($pbreak) - 1];				
				
				// conditional menu building
				// about us pages
				if (in_array($pfile, $pabout)) { ?>
					<a href="/about-us/" title="Back to About Us"><span class="ui-icon ui-icon-carat-1-e"></span> About Us</a>
					<!--<a href="press.php" title="media coverage and press information">Media & Press</a>-->
					<a href="/about-us/terms-of-service/" title="Terms of Service"><span class="ui-icon ui-icon-script"></span> Terms of Service</a>
					<a href="/about-us/privacy-policy/" title="Privacy Policy"><span class="ui-icon ui-icon-locked"></span> Privacy Policy</a>
				<?php }
				// social good pages
				else if (in_array($pfile, $psogood)) { ?>
					<a href="/social-good/" title="Back to Social Good"><span class="ui-icon ui-icon-carat-1-e"></span> Social Good</a>					
					<a href="/social-good/cause-portfolio/" title="See what Nonprofits we currently fund."><span class="ui-icon ui-icon-folder-open"></span> Cause Portfolio</a>
					<a href="/social-good/goals-progress/" title="Check out our goals and track our progress."><span class="ui-icon ui-icon-image"></span> Goals & Progress</a>
				<?php }
				// anvil pages
				else if (in_array($pfile, $panvil)) { ?>
					<a href="/anvil/" title="Back to The Anvil"><span class="ui-icon ui-icon-carat-1-e"></span> The Anvil</a>					
					<a href="/anvil/tutorial/" title="Learn how to use the anvil in 5 easy steps."><span class="ui-icon ui-icon-lightbulb"></span> 5-Step Tutorial</a>
					<a href="/anvil/faq/" title="Answers to some common questions."><span class="ui-icon ui-icon-help"></span> FAQ</a>
				<?php }
			?>
		</div>
	</div>