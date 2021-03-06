    </div> <!-- end content wrapper -->
    <div id="footer_wrapper">
    
    <div id="subfooter"></div>
    
    <div id="footer" class="clearfix">
        <div class="row">
        	<div class="col col_3">
          	<p class="align_center">
          		<a class="fbButtonBig" href="http://www.facebook.com/pungleDOTorg" target="_blank" title="Connect with punglers on Facebook.">Facebook</a>
          		<a class="twButtonBig" href="http://twitter.com/pungleME" target="_blank" title="Follow pungle on Twitter.">Twitter</a>          		
          		<a class="emButtonBig" href="mailto:contact@pungle.me" title="Email us.">Email</a>
          	</p>
        	</div>
        	<div class="col col_1">
        		<p></p>
        	</div>        	
        	<div class="col col_3">
          	<p>
          		<small>
          			<a href="/" title="There's no place like home."><span class="ui-icon ui-icon-home pungleWhiteIcon"></span><b> Home</b></a><br/>
          		    <a href="/shop/" title="View our store list."><span class="ui-icon ui-icon-cart pungleWhiteIcon"></span><b> Stores</b></a><br/>
          			<a href="http://blog.pungle.me" title="A piñata of awesome." target="_blank"><span class="ui-icon ui-icon-signal-diag pungleWhiteIcon"></span><b> Blog</b></a>          		    
          		</small>
          	</p>
        	</div>
        	<div class="col col_3">
          	<p>
          		<small>
            		<b>Learn More</b><br/>
          			<a href="/how-it-works/" title="Find out how you are helping give back."><span class="ui-icon ui-icon-lightbulb pungleWhiteIcon"></span> How It Works</a><br/>
            		<!-- <a href="/tutorial/" title="Learn how to use the anvil in 5 easy steps."><span class="ui-icon ui-icon-video pungleWhiteIcon"></span> Shop Tutorial</a><br/> -->
            		<a href="/cause-portfolio/" title="See the status of our causes."><span class="ui-icon ui-icon-folder-open pungleWhiteIcon"></span> View Progress</a><br/>
          		</small>
          	</p>
        	</div>
        	<div class="col col_3">
          	<p>
          		<small>
          		    <b>Information</b><br/>
            		<a href="/about-us/contact/" title="The dreaded contact page!"><span class="ui-icon ui-icon-comment pungleWhiteIcon"></span> Contact</a><br/>
          			<a href="/faq/" title="Answers to some common questions."><span class="ui-icon ui-icon-help pungleWhiteIcon"></span> FAQ</a><br/>
          		  <!--<a href="/financial/" title="Get the gory details on our financial policy."><span class="ui-icon ui-icon-image pungleWhiteIcon"></span> Financial</a><br/>-->
          		</small>
          	</p>
        	</div>
        	<div class="col col_3">
          	<p>
          		<small>
            		<b>Company</b><br/>
            		<a href="/about-us/" title="You're the investigative type, aren't you?"><span class="ui-icon ui-icon-suitcase pungleWhiteIcon"></span> About Pungle</a><br/>
            		<a href="/about-us/our-team/" title="The people behind the scenes."><span class="ui-icon ui-icon-person pungleWhiteIcon"></span> Our Team</a><br/>
          		</small>
          	</p>
        	</div>
        </div>  
        <div class="row">
        	<div class="col col_16 align_center">
        		<small>
        		    © 2010 - 2011 <a href="/" title="pungle time!">pungle</a>, all rights reserved.
        		    <a href="/about-us/terms-of-service/" title="Terms of Service"><span class="ui-icon ui-icon-script pungleWhiteIcon"></span> Terms of Service </a>
        		    <a href="/about-us/privacy-policy/" title="Privacy Policy"><span class="ui-icon ui-icon-locked pungleWhiteIcon"></span> Privacy Policy </a>        		            		    
    		    </small>
        	</div>
        </div>
    </div>
    </div>


    <!-- exteranl scripts concatenated and minified via ant build script
    <script src="/core/plugins.js?v=1"></script> -->
    
    <!-- pungle scripts to load on all pages concatenated and minified via ant build script 
    <script src="/core/scripts.js?v=1"></script> -->
    
    <!--[if lt IE 7 ]>
        <script src="/core/libs/dd_belatedpng.js"></script>
        <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
    <![endif]-->

    <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet change the UA-XXXXX-X to be your site's ID -->
    <script>
        var _gaq = [['_setAccount', 'UA-10898547-10'], ['_trackPageview']];
        (function(d, t) {
            var g = d.createElement(t),
            s = d.getElementsByTagName(t)[0];
            g.async = true;
            g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g, s);
        })(document, 'script');
    </script>
    
    <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
  	<script>!window.jQuery && document.write('<script src="/core/libs/jquery.min.js" type="text/javascript"><\/script>')</script>
    <script src="/core/libs/jquery.browser.min.js"></script>
    
    <script type="text/javascript">
  	    $(document).ready(function(){

          if($.browser.name == 'chrome') {
            $("#extInstall").attr('href', 'http://pungle.me/extensions/chrome1.0.7.crx');
            $("#extInstall").attr('onclick', "$.ajax({ type: 'POST', url: '/include/pushvote.php', data: 'c=5' });");
          } else if ($.browser.name == 'firefox') {
            $("#extInstall").attr('href', 'http://pungle.me/extensions/firefox0.5.34.xpi');
            $("#extInstall").attr('onclick', "$.ajax({ type: 'POST', url: '/include/pushvote.php', data: 'c=5' });");
          } else {
            $('#extInstall').click(function() {
              alert('Sorry, we only support Chrome & Firefox.');
            });
          }
        
  	    });
  	</script>