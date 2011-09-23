<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
    <title>pungle - nonprofits we work with</title>
    <meta name="description" content="pungle hand picks only the most progressive, transparent and effective nonprofits.">
    <meta name="author" content="pungle.me">
<?php require("include/head.php"); ?>

    <link rel="canonical" href="http://pungle.me/cause-portfolio/" />
    
	<!-- need to load the javascript at the top, since we load the graph in-line -->
	<script src="/core/libs/raphael-min.js" type="text/javascript" charset="utf-8"></script> 
    <script src="/core/libs/g.raphael-min.js" type="text/javascript" charset="utf-8"></script> 
    <!-- modified g.pie.js to sort options relative to order -->
    <script src="/core/libs/g.pie-min.js" type="text/javascript" charset="utf-8"></script>
    
    <!-- google api, should probably replace the raphael script -->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        
        // move entirely to a JS file
        
        // google.load("visualization", "1", {packages:['corechart']});
        
        google.load('visualization', '1');
        
        function drawVisualization() {
            
            // To see the data that this visualization uses, browse to
            // http://spreadsheets.google.com/ccc?key=pCQbetd-CptGXxxQIG7VFIQ  
            // var query = new google.visualization.Query('http://spreadsheets.google.com/spreadsheet/tq?key=0AknpySUykwdpdDJpZFFTSXFSRTczVDJTUmNMSlNCcVE&range=R1:Y2');
            // var EMPquery = new google.visualization.Query('http://spreadsheets.google.com/spreadsheet/tq?key=0AknpySUykwdpdDJpZFFTSXFSRTczVDJTUmNMSlNCcVE&range=R1:Y2');
            
            // Send the query with a callback function.
            // query.send(handleColumnChartResponse);
            // EMPquery.send(handleSend('','cookie'));
            
            /* var query = new google.visualization.ChartWrapper({
                chartType: 'ColumnChart',
                dataSourceUrl: 'http://spreadsheets.google.com/spreadsheet/tq?key=0AknpySUykwdpdDJpZFFTSXFSRTczVDJTUmNMSlNCcVE&range=Y1:AF2',
                options: {  
                    width: 940,
                    height: 580,
                    colors:["#a024ff", "#2f91ff", "#bdcacc", "#79da38", "#ffd824", "#ff0f53", "#404040"],
                    title: "Impact to Date",                
                    vAxis: { title: "Impact" }
                },
                containerId: 'chart_div'
            }); */
            
            /* var EMPquery = new google.visualization.ChartWrapper({
                chartType: 'AreaChart',
                dataSourceUrl: 'http://spreadsheets.google.com/spreadsheet/tq?key=0AknpySUykwdpdDJpZFFTSXFSRTczVDJTUmNMSlNCcVE&range=I1:I40,R1:R40',
                options: {  
                    width: 640,
                    height: 180,
                    legend: 'in',
                    colors: ["#a024ff"],
                    vAxis: { minValue: 0, maxValue: 4 },
                    hAxis: { title: "Date" }
                },
                containerId: 'chart_EMP'
            }); */
            
            var POTquery = new google.visualization.ChartWrapper({
                chartType: 'AreaChart',
                dataSourceUrl: 'http://spreadsheets.google.com/spreadsheet/tq?key=0AknpySUykwdpdDJpZFFTSXFSRTczVDJTUmNMSlNCcVE&range=I1:I40,S1:S40',
                options: {  
                    width: 640,
                    height: 180,
                    legend: 'in',
                    colors: ["#2f91ff"],
                    hAxis: { title: "Date" }
                },
                containerId: 'chart_POT'
            });
            
            var TECquery = new google.visualization.ChartWrapper({
                chartType: 'AreaChart',
                dataSourceUrl: 'http://spreadsheets.google.com/spreadsheet/tq?key=0AknpySUykwdpdDJpZFFTSXFSRTczVDJTUmNMSlNCcVE&range=I1:I40,T1:T40',
                options: {  
                    width: 640,
                    height: 180,
                    legend: 'in',
                    colors: ["#ff0f53"],
                    hAxis: { title: "Date" }
                },
                containerId: 'chart_TEC'
            });
            
            var NATquery = new google.visualization.ChartWrapper({
                chartType: 'AreaChart',
                dataSourceUrl: 'http://spreadsheets.google.com/spreadsheet/tq?key=0AknpySUykwdpdDJpZFFTSXFSRTczVDJTUmNMSlNCcVE&range=I1:I40,U1:U40',
                options: {  
                    width: 640,
                    height: 180,
                    legend: 'in',
                    colors: ["#79da38"],
                    hAxis: { title: "Date" }
                },
                containerId: 'chart_NAT'
            });
            
            var EDUquery = new google.visualization.ChartWrapper({
                chartType: 'AreaChart',
                dataSourceUrl: 'http://spreadsheets.google.com/spreadsheet/tq?key=0AknpySUykwdpdDJpZFFTSXFSRTczVDJTUmNMSlNCcVE&range=I1:I40,V1:V40',
                options: {  
                    width: 640,
                    height: 180,
                    legend: 'in',
                    colors: ["#a024ff"],
                    hAxis: { title: "Date" }
                },
                containerId: 'chart_EDU'
            });
            
            /* var VACquery = new google.visualization.ChartWrapper({
                chartType: 'AreaChart',
                dataSourceUrl: 'http://spreadsheets.google.com/spreadsheet/tq?key=0AknpySUykwdpdDJpZFFTSXFSRTczVDJTUmNMSlNCcVE&range=I1:I40,W1:W40',
                options: {  
                    width: 640,
                    height: 180,
                    legend: 'in',
                    colors: ["#ff0f53"],
                    hAxis: { title: "Date" }
                },
                containerId: 'chart_VAC'
            }); */
            
            var CLEquery = new google.visualization.ChartWrapper({
                chartType: 'AreaChart',
                dataSourceUrl: 'http://spreadsheets.google.com/spreadsheet/tq?key=0AknpySUykwdpdDJpZFFTSXFSRTczVDJTUmNMSlNCcVE&range=I1:I40,X1:X40',
                options: {  
                    width: 640,
                    height: 180,
                    legend: 'in',
                    colors: ["#404040"],
                    hAxis: { title: "Date" }
                },
                containerId: 'chart_CLE'
            });
            
            // query.draw();
            // EMPquery.draw();
            POTquery.draw();
            TECquery.draw();
            NATquery.draw();
            EDUquery.draw();
            // VACquery.draw();
            CLEquery.draw();
        }
        
        google.setOnLoadCallback(drawVisualization);
        
        function addCommas(nStr) {
        	nStr += '';
        	x = nStr.split('.');
        	x1 = x[0];
        	x2 = x.length > 1 ? '.' + x[1] : '';
        	var rgx = /(\d+)(\d{3})/;
        	while (rgx.test(x1)) {
        		x1 = x1.replace(rgx, '$1' + ',' + '$2');
        	}
        	return x1 + x2;
        }
    </script>
    
    
    <!-- stylize the graph here -->
	<style type="text/css">
		#npoGraph {				
        	margin: 0 auto;
        	width: 580px;
        	height: 340px;
		}
		
		#pungleCount { text-transform: none; letter-spacing:2px; }
		.causeInfo { font-size: 14px; }
		
    </style>
    
</head>

<body>
<?php require("include/nav.php"); ?>

    <div id="subheader" class="clearfix">
        <div class="row">
            <div class="col col_16">
              <a id="extInstall" class="ctabutton2 right" href="#">Install Now</a>
              <h1 style="display: inline-block"><b>Cause</b> Progress</h1>
            </div>
        </div>
    </div>
    
    <div id="content" class="clearfix">
        
        <!-- build graph of distribution -->
      	<div class="row">
            <div class="col col_16 align_center">
                <!-- <h2 id="pungleCount">&nbsp;</h2> -->
                <br/><i>With the pungle.me app installed, you are supporting one of these causes for free every time you shop at a <a href="/shop/">participating store</a>.</i>
            </div>
            <div class="col col_10">
                <div id="npoGraph"></div>
            </div> 
            <div class="col col_6">
                <p><br/><h3>Portfolio Distribution</h3></p>
                <p><br/>
                    Interactive visualization showing how pungle currently allocates funding to causes.<br/><br/>
                    Chart represents actual user statistics in real time. Ratios are subject to change.
                </p>
            </div>
        </div>
    	
    	<div class="row">
        	
        	<div class="col col_16">
        		<div id="chart_div"></div>
        	</div>
        	
        </div>

        <div class="row">
            <div class="col col_16">
                <p><img src="/images/940x15.png" width="940" height="15" /></p>
                <br/>
            </div>
        </div>
        
        <!-- empowerment 
        <div id="EMP" class="row">
            <div class="col col_5 align_center">
                <h3>Empowerment</h3>
                <br/>
                <img src="/images/ci_empowerment256x256.png" width="256" height="256" alt="empowerment icon" />
            </div>
            <div class="col col_11 justify causeInfo">
                <br/>
                <div id="chart_EMP"></div>
                <p>  
                    <b>Goal: </b>To create social enterprises that strengthen individuals and communities by providing solutions that spur economic opportunity, promote dignity, & save lives.
                </p>
                <p>                    
                    <b>Campaign: </b>Affordable irrigation pumps that turn subsistent farmers into profitable entrepreneurs. Rate of economic stimulation projected at $15(N donations) in profits & wages.
                </p>
                <p>
                    <b>NPO: <a href="http://theadventureproject.org/" target="_blank">The Adventure Project</a></b>
                </p>
            </div>
        </div> 
        
        <div class="row">
            <div class="col col_16">
                <p><img src="/images/940x15.png" width="940" height="15" /></p>
                <br/>
            </div>
        </div> -->
        
        <!-- potable water -->
        <div id="POT" class="row">
            <div class="col col_5 align_center">
                <h3>Potable Water</h3><br/>
                <img src="/images/ci_water256x256.png" width="256" height="256" alt="potable water icon" />
            </div>
            <div class="col col_11 justify causeInfo">
                <br/>
                <div id="chart_POT"></div>
                <p>  
                    <b>Goal: </b>To provide clean water as a basic human right to the ~1 BILLION people who don't have access to it. To be used for drinking, agriculture and sanitation.
                </p>
                <p>                    
                    <b>Campaign: </b>$20/person or $5,000/village, trains technicians, build wells & creates sustainable water infrastructure for health, food and gender equality.
                </p>
                <p>
                    <b>NPO: <a href="http://www.charitywater.org/" target="_blank">charity: water</a></b>
                </p>
            </div>
        </div>
        
        <div class="row">
            <div class="col col_16">
                <p><img src="/images/940x15.png" width="940" height="15" /></p>
                <br/>
            </div>
        </div>
        
        <!-- technology -->
        <div id="TEC" class="row">
            <div class="col col_5 align_center">
                <h3>Technology</h3><br/>
                <img src="/images/ci_technology256x256.png" width="256" height="256" alt="technology icon" />
            </div>
            <div class="col col_11 justify causeInfo">
                <br/>
                <div id="chart_TEC"></div>
                <p>                    
                    <b>Goal: </b>To support development & distribution of innovative, life-changing technologies.
                </p>
                <p>  
                    <b>Campaign: </b>Affordable irrigation pumps that turn subsistent farmers into profitable entrepreneurs. Rate of economic stimulation projected at $15 per N donations in profits & wages.
                </p>
                <p>
                    <b>NPO: <a href="http://theadventureproject.org/" target="_blank">The Adventure Project</a></b>
                </p>
            </div>
        </div>
        
        <div class="row">
            <div class="col col_16">
                <p><img src="/images/940x15.png" width="940" height="15" /></p>
                <br/>
            </div>
        </div>
        
        <!-- nature -->
        <div id="NAT" class="row">
            <div class="col col_5 align_center">
                <h3>Nature</h3><br/>
                <img src="/images/ci_nature256x256.png" width="256" height="256" alt="nature icon" />
            </div>
            <div class="col col_11 justify causeInfo">
                <br/>
                <div id="chart_NAT"></div>
                <p>                    
                    <b>Goal: </b>To preserve the plants, animals and natural ecosystems that represent the diversity of life on Earth. To leave a sustainable world for future generations.
                </p>
                <p>  
                    <b>Campaign: </b>$1/tree to restore the endangered Atlantic Forest of Brazil.
                </p>
                <p>
                    <b>NPO: <a href="http://www.plantabillion.org/" target="_blank">Plant a Billion Trees</a></b>
                </p>
            </div>
        </div>
        
        <div class="row">
            <div class="col col_16">
                <p><img src="/images/940x15.png" width="940" height="15" /></p>
                <br/>
            </div>
        </div>
        
        <!-- education -->
        <div id="EDU" class="row">
            <div class="col col_5 align_center">
                <h3>Education</h3><br/>
                <img src="/images/ci_education256x256.png" width="256" height="256" alt="education icon" />
            </div>
            <div class="col col_11 justify causeInfo">
                <br/>
                <div id="chart_EDU"></div>
                <p>                    
                    <b>Goal: </b>To create the best possible opportunities for our students to succeed by providing the necessary tools to teachers and classrooms in need.
                </p>
                <p>  
                    <b>Campaign: </b>~$100-$400/classroom, multiple projects handled simultaneously.
                </p>
                <p>
                    <b>NPO: <a href="http://www.donorschoose.org/" target="_blank">Donors Choose</a></b>
                </p>
            </div>
        </div>
        
        <div class="row">
            <div class="col col_16">
                <p><img src="/images/940x15.png" width="940" height="15" /></p>
                <br/>
            </div>
        </div>
        
        <!-- vaccinations 
        <div id="VAC" class="row">
            <div class="col col_5 align_center">
                <h3>Vaccinations</h3><br/>
                <img src="/images/ci_vaccinations256x256.png" width="256" height="256" alt="vaccination icon" />
            </div>
            <div class="col col_11 justify causeInfo">
                <br/>
                <div id="chart_VAC"></div>
                <p>                    
                    <b>Goal: </b>To stop the spread of life threatening infectious diseases through prevention or cure administered by immunization.
                </p>
                <p>  
                    <b>Campaign: </b>$1/person for vaccinations against meningitis, measles, polio and other deadly epidemics.
                </p>
                <p>
                    <b>NPO: <a href="http://www.doctorswithoutborders.org/" target="_blank">Doctors Without Borders</a></b>
                </p>
            </div>
        </div>
        
        <div class="row">
            <div class="col col_16">
                <p><img src="/images/940x15.png" width="940" height="15" /></p>
                <br/>
            </div>
        </div> -->
        
        <!-- clean energy -->
        <div id="CLE" class="row">
            <div class="col col_5 align_center">
                <h3>Clean Energy</h3><br/>
                <img src="/images/ci_carbondioxide256x256.png" width="256" height="256" alt="carbon emissions icon" />
            </div>
            <div class="col col_11 justify causeInfo">
                <br/>
                <div id="chart_CLE"></div>
                <p>                    
                    <b>Goal: </b>To offset carbon emissions that can not be reduced further. This offsets 100% of your carbon emissions while using Pungle.
                </p>
                <p>  
                    <b>Campaign: </b>$1 offsets 220.5 lbs CO2. 
                </p>
                <p>
                    <b>NPO: <a href="http://www.carbonfund.org" target="_blank">Carbon Fund</a></b>
                </p>
            </div>
        </div>
        
    </div>

<?php require("include/footer.php"); ?>

    <script type="text/javascript">
		
    window.onload = function () {
    	
        var pCauses = [];
        var pCount = 0;
        
        $.ajax({ url: '/core/pungleCAUSES.json', dataType: 'json', async: false, success: function(data) { pCauses = data.slice(); } });
        
        /* var googCount = 0;
        $.ajax({ 
            url: 'https://spreadsheets.google.com/feeds/cells/0AknpySUykwdpdDJpZFFTSXFSRTczVDJTUmNMSlNCcVE/1/public/values?alt=json&range=AG2',
            dataType: 'json',
            async: false,
            success: function(data) {
                googCount = data.feed.entry[0].content.$t;
            }
        }); */
        
        $.each(pCauses, function(index){
            pCauses[index] -= 2750;
            pCount += pCauses[index];
        });
        
        // $('#pungleCount').html(addCommas(pCount) + ' &nbsp;pungles');
        
        var r = Raphael("npoGraph");
        
    	  r.g.txtattr.font = "13px Arial, Verdana, Helvetica, sans-serif";
        
        var pie = r.g.piechart(180, 170, 150, [pCauses[0], pCauses[1], pCauses[2], pCauses[3], pCauses[4]], {strokewidth: "4", colors: ["#2f91ff", "#FF0F53", "#79da38", "#a024ff", "#404040"], legend: ["%% Potable Water", "%% Technology", "%% Nature", "%% Education", "%% Clean Energy"], legendpos: "east", href: ["#scrollPOT", "#scrollTEC", "#scrollNAT", "#scrollEDU", "#scrollCLE"]});
        pie.hover(function () {
            this.sector.stop();
            this.sector.scale(1.1, 1.1, this.cx, this.cy);
            if (this.label) {
                this.label[0].stop();
                this.label[0].scale(1.5);
                this.label[1].attr({"font-weight": 800});
            }
        }, function () {
            this.sector.animate({scale: [1, 1, this.cx, this.cy]}, 500, "bounce");
            if (this.label) {
                this.label[0].animate({scale: 1}, 500, "bounce");
                this.label[1].attr({"font-weight": 400});
            }
        });
        
		$('a[href=#scrollPOT]').click(function(){
			$('html, body').animate({
				scrollTop: $("#POT").offset().top
			}, 800);
		});
		
		$('a[href=#scrollTEC]').click(function(){
			$('html, body').animate({
				scrollTop: $("#TEC").offset().top
			}, 800);
		});
		
		$('a[href=#scrollCLE]').click(function(){
			$('html, body').animate({
				scrollTop: $("#CLE").offset().top
			}, 800);
		});
		
		$('a[href=#scrollNAT]').click(function(){
			$('html, body').animate({
				scrollTop: $("#NAT").offset().top
			}, 800);
		});
		
		$('a[href=#scrollEDU]').click(function(){
			$('html, body').animate({
				scrollTop: $("#EDU").offset().top
			}, 800);
		});
		
		$('a[href=#scrollCAR]').click(function(){
			$('html, body').animate({
				scrollTop: $("#CAR").offset().top
			}, 800);
		});
    };
    
  </script>
  
</body>

</html>
