<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
	<title>pungle - the anvil</title>
	<meta name="description" content="Tangible social good through online shopping at no cost to our visitors; progress you can see.">
	<meta name="author" content="pungle.me">
<?php require("/include/head.php"); ?>
	
	<link rel="canonical" href="http://pungle.me/anvil/" />
	
</head>

<body>
<?php require("/include/nav.php"); ?>

	<div id="content" class="clearfix">
		
		<!-- page description -->
		<div class="row">
      <div class="col col_13">
      	<!-- AddThis Button BEGIN -->
				<div style="width: 148px;" class="addthis_toolbox addthis_default_style addthis_32x32_style right">
					<a class="addthis_button_preferred_1"></a>
					<a class="addthis_button_preferred_2"></a>
					<a class="addthis_button_preferred_3"></a>					
					<a class="addthis_button_compact"></a>
				</div>
      	<h2>The Anvil</h2>      	
      </div>
    </div>
    
		<div class="row">
			<div class="col col_13 align_center">
				<img src="/images/the_anvil.png" title="hi" width="1060" height="40" />
			</div>
		</div>
		
		<!-- container for overview to hold store buttons -->
		<div class="row">
			<div id="overviewContainer" class="col col_12">
				<ul id="ulOverview"></ul>				
			</div>
			<div class="col col_1">
				<img style="display: block;" src="/images/micro_pungle.png" title="O.o" width="52" height="84" />
			</div>
		</div>
		
		<!-- container for all stores -->		
		<div class="row">
			<div class="col col_8">
				
				<!-- <span id="getUrl" style="display: inline-block;">big fat long link needs to fit over here</span> -->
				
				<div id="allStoresAccordion">
					
					<h3><a href="#">all stores</a></h3>
					<ul id="allStores"></ul>
					
				</div>
				
				<p>
					<button id="buttonClearStores" title="Clear all stores from overview.">Clear Stores</button>
					<button id="buttonRestoreDefaults" title="Restore default store list to overview.">Restore Defaults</button>
				</p>
				
			</div>
			<div class="col col_5">
				<p class="align_justify">
					<span class="pungleRedIcon ui-icon ui-icon-heart" title="Social good is enabled."></span> Social Good 
					<span class="pungleBlueIcon ui-icon ui-icon-tag" title="Deal details would go here."></span> Deal Link<br/>
					<small><!-- TL;DR Click Amazon --><strong><a href="tutorial.php" title="View our 5-step picture guide">Go to 5-Step Tutorial ></a></strong> The anvil is a customizable shopping interface; your starting point for epic shopping adventures.  There are two pieces to this pie, an overview area for store buttons and an 'all stores' container with a list of, well, all our stores.  The overview saves and holds your favorite online stores for easy access.  To choose stores you want added to the overview, find them in the all stores container and click the plus sign.  Likewise, to remove a store, click the minus sign.  The 'clear stores' button will remove all stores in your overview and 'restore defaults' will reset your overview to the original stores.  When you're ready for an adventure, click a store button or deal icon and away you go.  Stores do not have to be added to your overview to visit them, you can shop directly from the all stores container.</small>
				</p>
			</div>
		</div>		
		
	</div>

<?php require("/include/footer.php"); ?>
	
	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js" type="text/javascript"></script>
	<script>!window.jQuery && document.write('<script src="/core/libs/jquery.min.js" type="text/javascript"><\/script>')</script>
  
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>
	<script>!$.ui && document.write('<script src="/core/libs/jquery-ui-1.8.9.min.js" type="text/javascript"><\/script>')</script>
	
	<!-- add this scripts -->
	<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=pungle"></script>

	<!-- version this file to force reload -->
	<!-- 2/24/11 set v=2 -->
	<script src="/core/pungle.js?v=2"></script>
	<!-- <script src="core/pungle-min.js?v=2"></script> -->

	<script type="text/javascript">	$(document).ready(function(){	pungle.init(); }); </script>
</body>

</html>