<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
    <title>Financial Details | pungle.me</title>
    <meta name="description" content="Financial details. Transparency on where donations come from and what you can do to increase them.">
    <meta name="author" content="pungle.me">
<?php require("include/head.php"); ?>

    <!-- !!MUST SET THIS IMPORTANT!! -->
    <link rel="canonical" href="http://pungle.me/financial/" />
    <link href="/core/libs/prettify.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="/core/libs/prettify.js"></script>
    
    <style type="text/css">
        ul, ol { margin-left: 0em; }
    </style>
    
</head>

<body>
<?php require("include/nav.php"); ?>

    
    <div id="content" class="clearfix">
        <div class="row">
            
            <div class="col col_16"><h1>Financial Details</h1></div>
            
        </div>
        
        <div class="row">
        	
        	<div class="col col_16 align_center">
        		<img src="/images/1060x1.png" title="Ouch!" width="940" height="1" />
        	</div>
        	
        </div>

        <div class="row">
            <div class="col col_10">
                
                
                
            </div>
            <div class="col col_6"><img src="/images/MBP_formula.png" width="340" heigh="100" alt="IR Formula = Donations / Shop Income" /></div>
        </div>
        
        <div class="row">
        	
        	<div class="col col_16 align_justify">
        	    <p><b>Maximum Buying Power (MBP)</b> is the percentage of <a href="/shop/" title="Shop Tool">Shop Tool</a> income donated. Think of it as donation efficiency.</p>
        		<p><b>100% MBP?</b> Raise the MBP when you shop at the <a href="http://pungle.storenvy.com/" title="Help keep the lights on, shop for sweet pungle loot!">Pungle KTLO Store</a> <i>'keep the lights on'</i>. 100% MBP is possible if all operating costs are covered through KTLO products. So why not buy a sweet piece of loot and show your support today? It's a win-win scenario!</p>
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_16">
<pre class="prettyprint">
<br/>    /**
    **  Donation Transparency :: It really is this simple..
    **/<br/>
        SHOP = ' income from Shop Tool '
        KTLO = ' income from Pungle KTLO "keep the lights on" Store '
        DONATIONS = ' total amount donated from SHOP income '
        EXPENSES = ' capped at 65% of gross income ' /* guarantees at least 35% MBP */<br/>
        if (EXPENSES > KTLO) then DONATIONS = SHOP + KTLO - EXPENSES
        else DONATIONS = SHOP /* 100% MBP donation efficiency!! woohoo! */<br/>
</pre>            
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_16 align_justify">
        		<br/>
        		<h3>DEFINITIONS</h3>        		
        		<p><b>SHOP</b> means the free to use web application found on this site. Users shop at 3rd party stores where pungle generates revenue through affiliate marketing and in turn donates the income to high impact causes.</p>        		
        		<p><b>KTLO</b> means the pungle <i>'keep the lights on'</i> store where purchases help offset operating costs. Up to 100% of Shop Tool income can be donated if all expenses are paid by KTLO products! =)</p>        		
        		<p><b>DONATIONS</b> means the total amount of donations made by pungle on behalf of its users.</p>        		
        		<p><b>EXPENSES</b> means operational expenses hard capped at 65% of total gross income. This guarantees a minimum of 35% MBP. If expenses exceed the hard cap, it comes out of our pockets. Operational expenses cover all costs of doing business.</p>        		
        		<p>
        		    <small>
                        * Pungle reserves the right to update the functions on this page at any time without notice.<br/>
                        ** MBP is as accurate as possible but should be seen as a 'best fit' estimation given the real-time data available.
                    </small>
                </p>
        	</div>        	
        </div>
        
        <!-- <div class="row">
            <div class="col col_2"><p>2</p></div>
            <div class="col col_2"><p>2</p></div>
            <div class="col col_2"><p>2</p></div>
            <div class="col col_2"><p>2</p></div>
            <div class="col col_2"><p>2</p></div>
            <div class="col col_2"><p>2</p></div>
            <div class="col col_4"><p>1</p></div>
	        </div> -->
    </div>

<?php require("include/footer.php"); ?>
    
    <script type="text/javascript">
	     window.onload = function(){
	        
	        prettyPrint();
	        
	    };	    
	</script>
</body>

</html>