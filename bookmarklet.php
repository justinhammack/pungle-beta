<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
    <title>pungle - bookmarklet</title>
    <meta name="description" content="this is your sweet bookmarklet tools">
    <meta name="author" content="pungle.me">
<?php require("include/head.php"); ?>

    <!-- !!MUST SET THIS IMPORTANT!! -->
    <link rel="canonical" href="http://pungle.me/bookmarklet/" />
    
    <style type="text/css">
        html, body {
            padding: 0;
            margin: 0;
            overflow: hidden;            
        }
    </style>
    
</head>

<body>
    
    <div id="content" class="clearfix">
        
        <div class="row">
            <div id="bookmarkletButtons" class="col col_16"></div>
        </div>
        
    </div>

    <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
	<script>!window.jQuery && document.write('<script src="/core/libs/jquery.min.js" type="text/javascript"><\/script>')</script> 
	
    <script src="/core/pungleJSON.js"></script>
	<script src="/core/pungle.js?v=3"></script>
	    
	<script type="text/javascript">
	    $(document).ready(function(){
	        
	        pungle.bookmarklet();
	        
	    });	    
	</script>
    
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
    
</body>

</html>
