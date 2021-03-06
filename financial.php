<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
    <title>pungle - financial transparency</title>
    <meta name="description" content="Financial details. Transparency on where donations come from and what you can do to increase them.">
    <meta name="author" content="pungle.me">
<?php require("include/head.php"); ?>

    <!-- !!MUST SET THIS IMPORTANT!! -->
    <link rel="canonical" href="http://pungle.me/financial/" />
    <link href="/core/libs/prettify.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="/core/libs/prettify.js"></script>
    
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
    
        google.load("visualization", "1", {packages:['corechart','gauge']});
        
        var visualization;
        
        function drawVisualization() {
            
            // To see the data that this visualization uses, browse to
            // http://spreadsheets.google.com/ccc?key=pCQbetd-CptGXxxQIG7VFIQ  
            var query = new google.visualization.Query('http://spreadsheets.google.com/spreadsheet/tq?key=0AknpySUykwdpdDJpZFFTSXFSRTczVDJTUmNMSlNCcVE&range=I1:P40');
            
            // http://spreadsheets.google.com/tq?key=pCQbetd-CptGXxxQIG7VFIQ&range=B1:D11&pub=1
            
            // Send the query with a callback function.
            query.send(handleQueryResponse);
            
        }
        
        function handleQueryResponse(response) {
            if (response.isError()) {
                alert('Error in query: ' + response.getMessage() + ' ' + response.getDetailedMessage());
                return;                
            }
            
            var data = response.getDataTable();
            
            visualization = new google.visualization.LineChart(document.getElementById('chart_div'));
            
            visualization.draw(data, {
                width: 940,
                height: 580,
                colors:["#a024ff", "#2f91ff", "#bdcacc", "#79da38", "#ffd824", "#ff0f53", "#404040"],
                title: "Donation Log",
                hAxis: { title: "Date" },
                vAxis: { title: "Amount" }
            });
        }
        
        function drawPIRVisualization() {
            // Create and populate the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Label');
            data.addColumn('number', 'Value');
            data.addRows(1);
            data.setValue(0, 0, 'PIR');
            data.setValue(0, 1, 35);
            
            var options = {
            redFrom: 30,
            redTo: 40,
            redColor: '#FFAE3D',
            yellowFrom: 40,
            yellowTo: 65,
            yellowColor: '#F5FF3D',
            greenFrom: 65,
            greenTo: 100,
            greenColor: '#84FF3D',
            width: 150,
            height: 150,
            minorTicks: 5   
            };
            
            // Create and draw the visualization.
            var PIRVisualization = new google.visualization.Gauge(document.getElementById('PIRVisual'));
            
            PIRVisualization.draw(data, options);
        }
        
        google.setOnLoadCallback(drawVisualization);
        google.setOnLoadCallback(drawPIRVisualization);
        
    </script>
    
    <style type="text/css">
        ul, ol { margin-left: 0em; }
        #chart_div { margin: 0 auto; }
        #PIRVisual { margin: 0 35px; }
    </style>
    
</head>

<body>
<?php require("include/nav.php"); ?>

    <div id="subheader" class="clearfix">
        <div class="row">
            <div class="col col_16"><h1 style="display: inline-block"><b>Financial</b> Transparency</h1></div>
        </div>
    </div>
    
    <div id="content" class="clearfix">
        
        <div class="row">
        	
        	<div class="col col_16">
        		<br/><h3>Donation Efficiency</h3>
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_16 align_justify">
        	    <p><b>Pungler Impact Rating (PIR)</b> is the percentage of revenue generated by the <a href="/shop/" title="Shop Tool">Shop Tool</a> that is donated to your cause.</p>
        		<p><b>100% PIR</b> - To reach our goal we'll need to offset operating costs through alternative income. You can help raise the PIR by shopping for <a href="http://pungle.storenvy.com/" title="Help keep the lights on, shop for sweet pungle loot!" target="_blank">Pungle Products</a>. Why not show your support and help <i>keep the lights on</i>? It's a win-win scenario!</p>
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_16">
        		<br/><h3>Financial Details</h3>
        	</div>
        	
        </div>
        
        <div class="row">
            <div class="col col_7 align_center"><br/><img src="/images/MBP_formula.png" width="340" heigh="100" alt="IR Formula = Donations / Shop Income" /></div>
            <div class="col col_4 align_center">
                
                <p>
                    <br/>
                    <div id="mbp" style="margin: 0 auto;">
                    <div id="mbpRating">35% PIR</div>
                    </div>
                </p>
                
            </div>
            <div class="col col_5 align_center">
                <div id="PIRVisual"></div>
            </div>
        </div>
        
        <div class="row">
        	
        	<div class="col col_16">
        		<div id="chart_div"></div>
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_16">
        		<h3>How to Calculate Donations</h3>
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_16">
<p>
<pre class="prettyprint">
<br/>    /**
    **  Donation Transparency :: Yup, it really is this simple.
    **/<br/>
        /* First the income & expenses are expressed as variables. */
        SHOP = ' income from Shop Tool '
        PROD = ' income from Pungle Products '
        EXPENSES = ' capped at 65% of gross income ' /* guarantees at least 35% PIR */<br/>        
        /* How we calculate the donation amount: */
        if (EXPENSES > PROD) then DONATIONS = SHOP + PROD - EXPENSES
        else DONATIONS = SHOP<br/>
        /* 100% PIR donation efficiency!! woohoo! */<br/>
</pre>
</p>
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_16">
        		<br/><h3>Definitions Expanded</h3>
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_16 align_justify">
        		<p><b>DONATIONS</b> means the total amount of donations made by pungle on behalf of its users.</p>
        	    <p><b>SHOP</b> means the Shop Tool, a free to use web application/service offered on this site. Users shop at 3rd party stores where pungle generates revenue through marketing and in turn donates the income to high impact causes.</p>        		
        		<p><b>PROD</b> means Pungle Products and refers to the pungle brand items we sell to help offset operating costs and <i>'keep the lights on'</i>. The goal is to allow up to 100% of Shop Tool income to be donated if all expenses are paid by Pungle Products! =)</p>        		
        		<p><b>EXPENSES</b> means operational expenses hard capped at 65% of total gross income. This guarantees a minimum of 35% PIR. If expenses exceed the hard cap, it comes out of our pockets. Operational expenses cover all costs of doing business. (utilities, servers, development, etc.)</p>        		
        		<p>
        		    <small>
                        <br/>
                        * Pungle reserves the right to update the functions on this page at any time.<br/>
                        ** PIR is as accurate as possible but should be seen as a 'best fit' estimation based on the data available.
                    </small>
                </p>
        	</div>        	
        </div>
        
    </div>

<?php require("include/footer.php"); ?>
    
    <script type="text/javascript">
	     window.onload = function(){
	        
	        prettyPrint();
	        
	    };	    
	</script>
</body>

</html>
