	<!-- Fix the header, why do I need clearfix for this to work? are there no objects of value here? object space, better css.. -->
	<div id="header_wrapper">
		<div id="header" class="clearfix">
			
			<!-- <a id="headerImage" href="/" title="pungle time!">pungle<img src="/images/pungle_me_logo.png" width="199" height="58" /></a> -->
			<a class="headerBanner" href="/" title="pungle time!">pungle</a>
			<div class="header_social">
				<a class="fbButtonLink" href="http://www.facebook.com/pungleDOTorg" target="_blank" title="Connect with punglers on facebook.">Facebook</a>
				<a class="twButtonLink" href="http://twitter.com/JustinHammack" target="_blank" title="Follow our founder on Twitter.">Twitter</a>
			</div>
			
			<?php
				// check what script page we're on
				$pbreak = Explode('/', $_SERVER["SCRIPT_NAME"]);
				$pfile = $pbreak[count($pbreak) - 1];
			?>
			
			<nav>
				<ul class="navigation">
					<li class="parentNav">
					    <a class="navAnvil" href="/anvil/">Go Pungle</a>
					    <ul>
					        <li>
					            <a <?php if ($pfile=="anvil.php") { ?>class="subSelected"<?php } ?> href="/anvil/" title="Our signature shopping tool.">The Anvil</a>
					        </li>
					        <li>
					            <a href="http://pungle.storenvy.com/" title="Shop at the pungle store for sweet loot!">Goods / Loot</a>
					        </li>
					        <li>
					            <a <?php if ($pfile=="tutorial.php") { ?>class="subSelected"<?php } ?> href="/anvil/tutorial/" title="Learn how to use the anvil in 5 easy steps.">5-Step Tutorial</a>
					        </li>					        
					    </ul>
				    </li>					
					<li class="parentNav">
					    <a href="/social-good/">Our Vision</a>
					    <ul>
					        <li>
					            <a <?php if ($pfile=="sogood.php") { ?>class="subSelected"<?php } ?> href="/social-good/" title="Learn more about our social good campaign.">Social Good</a>
					        </li>
					        <li>
					            <a <?php if ($pfile=="npos.php") { ?>class="subSelected"<?php } ?> href="/social-good/cause-portfolio/" title="See what Nonprofits we currently fund.">Cause Portfolio</a>
					        </li>
					        <li>
					            <a <?php if ($pfile=="progress.php") { ?>class="subSelected"<?php } ?> href="/social-good/goals-progress/" title="Check out our goals and track our progress.">Goals & Progress</a>
					        </li>
					    </ul>
				    </li>
				    <li class="parentNav">
					    <a href="/about-us/">About Us</a>
					    <ul>
					        <li>
					            <a <?php if ($pfile=="about.php") { ?>class="subSelected"<?php } ?> href="/about-us/" title="Who are the people behind the scenes?">Vigilantes</a>
					        </li>
					        <li>
					            <a <?php if ($pfile=="anvilfaq.php") { ?>class="subSelected"<?php } ?> href="/anvil/faq/" title="Answers to some common questions.">FAQ</a>
					        </li>					        
					    </ul>
				    </li>
				    <li>
					    <a href="http://blog.pungle.me" title="A piñata of awesome content!">Blog</a>					    
				    </li>
				</ul>
			</nav>
			
		</div>		
	</div>	
	