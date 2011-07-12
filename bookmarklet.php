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
        
        body { background: transparent; }
        
        #content {
            width: 474px;
            padding: 0 8px;
            margin-top: 10px;
        }
        
        .row {
            width: 474px;
            margin: 0;            
        }
       
        .dribbble { margin: 4px; line-height: 16px; float: left; }
        
        #bookmarkletUtility {
            margin: 4px;
            margin-bottom: 8px;            
        }
        
        #quickSearch { 
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            background: #FFF url('/images/magnifying_glass.gif') 96% center no-repeat;
            /* -webkit-box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.2); */
            padding: 6px 6px 4px;            
            color: #444;            
            display: inline-block;
            width: 292px; 
            height: 22px; 
            line-height: 22px; 
            margin-right: 5px;            
        }
        
        #addRemoveStores {
            background: url('/images/addremovestores148x36.png') 0 0;
            display: inline-block;
            vertical-align: middle;
            margin-left: 5px;
		    width: 148px;
		    height: 36px;		    
		    text-indent: -99999px;
        }
        
        #addRemoveStores:hover {
            background: url('/images/addremovestores148x36.png') 148px 0;            
        }
        
        #headerbook {
        	background: transparent url('/images/bookmarklet_hdr_bg.gif') repeat-x;
            width: 100%;
        	height: 53px;
        	line-height: 53px;        	
        	margin: 0;
        	position: relative;
        }
        
        .headerBannerInterior {
            margin: 6px 10px;
        }
        
        #headerbook #mbp #mbpRating { 
            position: static;
            padding: 3px 0 3px 0;
            margin: 0 6px 0 4px; 
            height: 23px; 
            width: 80px; 
            font-size: 14px; 
            line-height: 23px;
        }
        
        #storeBtnFrame {
            background: #e3e3e3;
            display: inline-block;
            border: 1px solid #bbb;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            -moz-box-shadow: inset 0 0 1px 1px #f6f6f6;
            -webkit-box-shadow: inset 0 0 1px 1px #f6f6f6;
            box-shadow: inset 0 0 1px 1px #f6f6f6;
            color: #333;
            font-family: "helvetica neue", helvetica, arial, sans-serif;
            font-size: 18px;
            font-weight: bold;
            line-height: 58px;
            padding: 8px 0 9px;        
            text-shadow: 0 1px 0 #fff;
            margin: 6px 3px;
            margin-right: 8px;
        }
        #storeBtn {
            display: block;
            background: #ff4ec2;
            background: -moz-linear-gradient(top, #ff4ec2 0%, #ed3cb0 100%);
            background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ff4ec2), to(#ed3cb0));
            border: 1px solid #d0359b;            
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            /* -moz-box-shadow: inset 0 1px 0 0 #96ca6d;
            -webkit-box-shadow: inset 0 1px 0 0 #96ca6d;
            box-shadow: inset 0 1px 0 0 #96ca6d; */
            color: #fff;
            font-family: "helvetica neue", helvetica, arial, sans-serif;
            font-size: 14px;
            font-weight: bold;
            line-height: 23px;
            padding: 3px 8px;
            margin: 0 4px 0 4px;
            text-align: center;
            text-shadow: 0 -1px 0 #8f216a;            
            height: 23px;
        }
        
        #storeBtn:hover {
            background: #ff59c5;
            background: -moz-linear-gradient(top, #ff59c5 0%, #f73eb6 100%);
            background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ff59c5), to(#f73eb6));            
            cursor: pointer;
        }
    
        #storeBtn:active {
            border: 1px solid #db37a2;
            -moz-box-shadow: inset 0 0 8px 4px #e339a7, 0 1px 0 0 #eee;
            -webkit-box-shadow: inset 0 0 8px 4px #e339a7, 0 1px 0 0 #eee;
            box-shadow: inset 0 0 8px 4px #e339a7, 0 1px 0 0 #eee;
        }
        
        #headerbook #mbp { height: 31px; width: 90px; float: right; margin: 6px 3px; padding: 4px 0 4px 0; }
        #headerbook #storeBtnFrame { height: 31px; float: right; padding: 4px 0 4px 0; }
        
        .smallButton { font-size: 10px; }
    </style>
    
</head>

<body>
    
    <div id="headerbook">
        
        <a href="http://pungle.me" title="Time to save the world in the name of social good!" target="_blank" ><h1 class="headerBannerInterior">Social Good</h1></a>
        
        <div id="storeBtnFrame">            
    	    
            <a id="storeBtn" href="http://pungle.storenvy.com" title="Shop at the pungle store to raise the pIR!" target="_blank">
                <img style="float: left; margin-right: 4px; vertical-align: middle;" src="/images/highfive24x24.png" width="24" height="24" />PUNGLE STORE
            </a>
            
        </div>
        
        <div id="mbp">            
    	    
            <a id="mbpRating" href="/financial/" title="Current donation efficiency, help us raise it." target="_blank">35% pIR</a>
            
        </div>
        
    </div>
    
    <div id="content" class="clearfix">
        
        <div class="row">
            <div id="bookmarkletUtility" class="clearfix">
                <input type="text" id="quickSearch"><a id="addRemoveStores" href="http://pungle.me/shop/" title="Return to pungle to add/remove stores." target="_blank">Add/Remove Stores</a>
            </div>
            <div id="bookmarkletButtons"></div>
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
