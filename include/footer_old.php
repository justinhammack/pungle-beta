	<!-- start footer -->	
	<div style="clear:both"></div>
	
	<div id="footer">
		<div class="footer1 addthis_toolbox">
			<div class="custom_images">
				<a class="addthis_button_facebook"><img src="images/facebook_icon.png" width="32" height="32" alt="Share with Facebook" /></a>
				<a class="addthis_button_twitter" addthis:title="I'm a pungler! "><img src="images/twitter_icon.png" width="32" height="32" alt="Share with Twitter" /></a>
				<a class="addthis_button_more"><img src="images/plus_icon.png" width="32" height="32" alt="More..." /></a>
			</div>
		</div>		
		<div class="footer2">
			<a href="http://getsatisfaction.com/pungle" target="_blank"><img title="Customer Support? Yes please." alt="Badge_get_help" src="images/get_satisfaction.png" /></a>
			<div style="font-size: 12px; color: #4B4B4B;"><a href="#" class="termsofservice" title="Read this if you want the gory details.">Terms of Service</a> | &copy; 2010+ pungle | all rights reserved.</div><!-- <a href="http://pungle.uservoice.com" target="_blank">Submit Feedback</a>-->
		</div>
		<div class="footer3">
			<a href="#" class="who" rel="pungleinfomatics" title="Who is behind the scenes at pungle?"><b>Who.</b></a>
			<a href="#" class="what" rel="pungleinfomatics" title="Are you a real business or are you trying to steal my internet monies?"><b> What.</b></a>
			<a href="#" class="why" rel="pungleinfomatics" title="Ok, so you're real people at a real business, why are you doing it?"><b> Why.</b></a>
			<br />
			Friend or foe? <b><a href="#" class="contactus" title="I would send a carrier pigeon, but email will suffice.">Contact Us.</a></b>
		</div>
		
		<div style="clear:both"></div>

	</div>
	<!-- end footer -->
	
</div> <!-- end of main content -->

	<!-- temp local use <script src="local/jquery-1.4.2.min.js" type="text/javascript"></script><script src="local/jquery-ui-1.8.6.custom.min.js" type="text/javascript"></script> -->
	<!-- CDN VERSION FOR LIVE -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>

	<!-- jquery plugins -->
	<script src="pungle.js" type="text/javascript"></script>
	<script src="jquery.colorbox-min.js" type="text/javascript"></script>
	<script src="jquery.qtip-1.0.0-rc3.min.js" type="text/javascript"></script>

	<!-- add this -->
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=pungle"></script>
	
	<!-- google analytics -->
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-10898547-10']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	
	<!-- tweet this deal 
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script> -->
	
	<!-- get satisfaction tab -->
	<script type="text/javascript" charset="utf-8">
		var is_ssl = ("https:" == document.location.protocol);
		var asset_host = is_ssl ? "https://s3.amazonaws.com/getsatisfaction.com/" : "http://s3.amazonaws.com/getsatisfaction.com/";
		document.write(unescape("%3Cscript src='" + asset_host + "javascripts/feedback-v2.js' type='text/javascript'%3E%3C/script%3E"));
	</script>

	<!-- get satisfaction widget -->
	<script type="text/javascript" charset="utf-8">
		var feedback_widget_options = {};
		feedback_widget_options.display = "overlay";  
		feedback_widget_options.company = "pungle";
		feedback_widget_options.placement = "left";
		feedback_widget_options.color = "#222";
		feedback_widget_options.style = "idea";
		var feedback_widget = new GSFN.feedback_widget(feedback_widget_options);
	</script>

		<!-- on document ready state -->
	<script type="text/javascript">
		
		$(document).ready(function(){
			
			// initialize pungle
			$.pungleInit();
			
			// build site color boxes
			$(".pickacharity").colorbox({width:"950px", opacity: 0.35, inline:true, href:"#pick_a_charity"});
			$(".howitworks").colorbox({width:"1115px", opacity: 0.35, title: false, current: "infomatics {current} of {total}", inline:true, href:"#how_it_works"});
			$(".who").colorbox({width:"1115px", opacity: 0.35, title: false, current: "infomatics {current} of {total}", inline:true, href:"#who_"});
			$(".what").colorbox({width:"1115px", opacity: 0.35, title: false, current: "infomatics {current} of {total}", inline:true, href:"#what_"});
			$(".why").colorbox({width:"1115px", opacity: 0.35, title: false, current: "infomatics {current} of {total}", inline:true, href:"#why_"});
			$(".contactus").colorbox({width:"415px", opacity: 0.35, title: false, current: "infomatics {current} of {total}", inline:true, href:"#contact_us"});
			$(".termsofservice").colorbox({width:"950px", opacity: 0.35, inline:true, href:"#terms_of_service"});
			
			// style title w/tooltip
			$("#content [title]").qtip({
				position: {
					adjust: { screen: true },
					corner: {
						target: 'topMiddle',
						tooltip: 'bottomMiddle'
					}
				},
				show: { 
					delay: 0,
					solo: true,
					effect: {	length: 0 }
				},
				hide: { 
					effect: { length: 0 }
				},
				style: {
					'font-size': '12px',
					tip: 'bottomMiddle',
					name: 'dark'
				}
			});
			
			// select text for custom url
			$('#getUrl').click(function() {
				$(this).focus();
				$(this).select();
			});
	
		});
	</script>
	
</body>

</html>