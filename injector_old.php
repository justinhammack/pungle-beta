<!DOCTYPE html>

<html>

<head>
	
	<title>pungle.me - injecting social good into online shopping!</title>
	
	<meta name="description" content="pungle.me is the only bookmark you need for shopping, giving you a birds eye view of the hottest sales at all your favorite stores. Keeping you in the know. Together, punglers are changing the world." />
	<meta name="keywords" content="pungle, online shopping, sales, specials, store bookmarking, shop online, deals, amazon, buy.com, walmart, endless, macy's, itunes, best buy, overstock, newegg" />
	<meta charset="UTF-8" />
	<meta name="ROBOTS" content="ALL">

	<!-- CDN ref CSS -->
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/redmond/jquery-ui.css" rel="stylesheet" type="text/css"/>

	<link rel="stylesheet" type="text/css" href="pungle.css" />

	<link rel="icon" type="image/png" href="images/pungle_favicon32pix.png" />
	
</head>

<body>

<div id="storeLoadingHorizon">
	<div id="storeLoadingContainer">
		<center>
			<div class="punglesteps" style="font-size: 32px"><i>pungle is injecting social good..<br /><span style="color: #0B78BD;">Cystic Fibrosis Foundation</span> --> <span style="color: #FF7800;">Allen Edmonds</span></i></div>
		</center>
		<div id="progressBar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all" style="height: 40px;"><div id="progressBarValue" class="ui-progressbar-value ui-widget-header ui-corner-left ui-corner-right" style="width: 0%; "></div></div>
	</div>
</div>

	<!-- CDN VERSION FOR LIVE -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script> -->

	<!-- jquery plugins -->
	<script src="pungle.js" type="text/javascript"></script>
	
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
	
	<!-- on document ready state -->
	<script type="text/javascript">
		
		$(document).ready(function(){
			// initialize pungle
			// $.pungleInit();
			var injectorNpo = $.url.param("Npo");
			var injectorStore = $.url.param("Store");
			var injectorDeal = $.url.param("Deal");
			var injectorStoreLink = [];
			
			$.ajax({ url: 'pungle.json', dataType: 'json', async: false, success: function(data) {
				// redirectLink = data.store[injectorStore].link;
			}});
			
			// alert(redirectLink);
			
			$("#progressBarValue").animate({ width: "100%" }, 2500, function (){
				// window.location = "http://google.com";
			});
	
		});

	</script>
	
</body>

</html>