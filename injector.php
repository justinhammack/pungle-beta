<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
    <title>pungle - injector</title>
    <meta name="description" content="Robin hooding commerce.">
    <meta name="author" content="pungle.me">
<?php require("include/head.php"); ?>

    <link rel="canonical" href="http://pungle.me/inject/" />
    <style type="text/css">
      body { background: none; }
      h1 { color: #444; }
    </style>
</head>

<body>

  <h1>Loading..</h1>
	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
	<script>!window.jQuery && document.write('<script src="/core/libs/jquery.min.js" type="text/javascript"><\/script>')</script> 
  
	<!-- version this file to force reload -->
	<script src="/core/pungleJSON.js"></script>
	<script src="/core/pungle.js?v=5"></script>
	
	<script type="text/javascript">
	    $(document).ready(function(){
	        
	        var injectorID = $.url.param("id");
	        var causeID = parseInt($.url.param("c"), 10);
	        
	        var injectorRETURN = pungle.shopNow(injectorID, causeID);	        
	        
	        if (injectorRETURN.storeLINK !== null) {
	            window.setTimeout(function() {  
                  window.location = injectorRETURN.storeLINK;
              }, 2500);
			    }
			});
	</script>
	
</body>

</html>