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
</head>

<body>
<?php require("include/nav.php"); ?>

    <div id="subheader" class="clearfix">
        <div class="row">
            <div class="col col_16"><h1 style="display: inline-block"><b>Store</b> Loader</h1></div>
        </div>
    </div>
    
    <div style="padding: 175px 0 225px;" id="content" class="clearfix">
        
        <div class="row">
            <div class="col col_16">
                
                <center>
			        <div id="pungleSteps">
			            
			        </div>
		        </center>
		        
		        <div id="progressBar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all" style="height: 40px;">
		            
		            <div id="progressBarValue" class="ui-progressbar-value ui-widget-header ui-corner-left ui-corner-right" style="width: 0%; "></div>
		            
	            </div>
                
            </div>
        </div>
        
    </div>

<?php require("include/footer.php"); ?>

	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
	<script>!window.jQuery && document.write('<script src="/core/libs/jquery.min.js" type="text/javascript"><\/script>')</script> 
  
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js" type="text/javascript"></script>
	<script>!$.ui && document.write('<script src="/core/libs/jquery-ui-1.8.9.min.js" type="text/javascript"><\/script>')</script>
	
	<!-- version this file to force reload -->
	<script src="/core/pungleJSON.js"></script>
	<script src="/core/pungle.js?v=3"></script>
	
	<script type="text/javascript">
	    $(document).ready(function(){
	        
	        var injectorID = parseInt($.url.param("id"), 10);
	        var injectorRETURN = pungle.shopNow(injectorID);	        
	        
	        if (injectorRETURN.storeLINK !== null) {
	            $("#progressBarValue").animate({ width: "100%" }, injectorRETURN.storeTIMER, function (){
				    window.location = injectorRETURN.storeLINK;
			    });
			}
			
	    });	    
	</script>
	
</body>

</html>