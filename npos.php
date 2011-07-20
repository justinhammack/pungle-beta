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
    <script src="/core/libs/g.pie-min.js" type="text/javascript" charset="utf-8"></script>
    
    <!-- stylize the graph here -->
	<style type="text/css">
		#npoGraph {				
        	margin: 0 auto;
        	width: 580px;
        	height: 340px;
		}
    </style>
    
</head>

<body>
<?php require("include/nav.php"); ?>

    <div id="subheader" class="clearfix">
        <div class="row">
            <div class="col col_16"><h1 style="display: inline-block"><b>Cause</b> Progress</h1></div>
        </div>
    </div>
    
    <div id="content" class="clearfix">
        
        <!-- build graph of distribution -->
      	<div class="row">
      		<div class="col col_16">
      		    <i>Pungle takes the hard work out of finding & supporting great causes!</i>
      		</div>
      	    <div class="col col_10">
  					<div id="npoGraph"></div>
      		</div> 
  				<div class="col col_6">
  					<p><br/><h3>Portfolio Distribution</h3></p>
      			<p>Interactive visualization showing how pungle currently allocates funding to nonprofits through our social good campaign.<br/><br/>
      				Diagram represents the actual statistics gathered by our Shopping Tool. Ratios are subject to change to redirect funding as necessary to meet milestones and/or respond to critical events.
      			</p>
      		</div>
    		</div>
    		
    		<div class="row">
        	
        	<div class="col col_16 align_center">
        		<img src="/images/1060x1.png" title="Ouch!" width="940" height="1" />
        	</div>
        	
        </div>
        
        <!-- empowerment -->
        <div id="EMP" class="row">
            <div class="col col_5 align_center">
                <img src="/images/ci_empowerment256x256.png" width="256" height="256" alt="empowerment icon" />
            </div>
            <div class="col col_11 justify">
                <h3>Empowerment</h3>
                <p>  
                    <b>Goal: </b>To create social enterprises that strengthen individuals and communities by providing solutions that spur economic opportunity, promote dignity, & save lives.
                </p>
                <p>                    
                    <b>Campaign: </b>~$60/person, creates opportunity to end poverty for an individual by providing agricultural tools. Rate of economic stimulation projected at 15($N).
                </p>
                <p>
                    <b>NPO: <a href="http://theadventureproject.org/" target="_blank">The Aventure Project</a></b>
                </p>
            </div>
        </div>
        
        <!-- potable water -->
        <div id="POT" class="row">
            <div class="col col_5 align_center">
                <img src="/images/ci_water256x256.png" width="256" height="256" alt="potable water icon" />
            </div>
            <div class="col col_11 justify">
                <h3>Potable Water</h3>
                <p>  
                    <b>Goal: </b>To provide clean water as a basic human right to the ~1 BILLION people who don't have access to it. To be used for drinking, agriculture and sanitation.
                </p>
                <p>                    
                    <b>Campaign: </b>$20/person or $5,000/village, trains technicians, build wells & creates sustainable water infastructure.
                </p>
                <p>
                    <b>NPO: <a href="http://www.charitywater.org/" target="_blank">charity: water</a></b>
                </p>
            </div>
        </div>
        
        <!-- technology -->
        <div id="TEC" class="row">
            <div class="col col_5 align_center">
                <img src="/images/ci_technology256x256.png" width="256" height="256" alt="technology icon" />
            </div>
            <div class="col col_11 justify">
                <h3>Technology</h3>
                <p>                    
                    <b>Goal: </b>To support development & distribution of innovative, life-changing technologies.
                </p>
                <p>  
                    <b>Campaign: </b>$30/unit, provides solar powered light and electricity for remote areas.
                </p>
                <p>
                    <b>NPO: <a href="http://kopernik.info/" target="_blank">Kopernik</a></b>
                </p>
            </div>
        </div>
        
        <!-- nature -->
        <div id="NAT" class="row">
            <div class="col col_5 align_center">
                <img src="/images/ci_nature256x256.png" width="256" height="256" alt="nature icon" />
            </div>
            <div class="col col_11 justify">
                <h3>Nature</h3>
                <p>                    
                    <b>Goal: </b>To preserve the plants, animals and natural ecosystems that represent the diversity of life on Earth. To leave a sustainable world for future generations.
                </p>
                <p>  
                    <b>Campaign: </b>$1/tree to restore the endangered Antlantic Forest of Brazil.
                </p>
                <p>
                    <b>NPO: <a href="http://www.plantabillion.org/" target="_blank">Plant a Billion Trees</a></b>
                </p>
            </div>
        </div>
        
        <!-- education -->
        <div id="EDU" class="row">
            <div class="col col_5 align_center">
                <img src="/images/ci_education256x256.png" width="256" height="256" alt="education icon" />
            </div>
            <div class="col col_11 justify">
                <h3>Education</h3>
                <p>                    
                    <b>Goal: </b>To create the best possible opportunities for our students to succeed by providing the necessary tools to teachers and classrooms in need.
                </p>
                <p>  
                    <b>Campaign: </b>~$100-$500/classroom, multiple projects handled simultaneously.
                </p>
                <p>
                    <b>NPO: <a href="http://www.donorschoose.org/" target="_blank">Donors Choose</a></b>
                </p>
            </div>
        </div>
        
        <!-- vaccinations -->
        <div id="VAC" class="row">
            <div class="col col_5 align_center">
                <img src="/images/ci_vaccinations256x256.png" width="256" height="256" alt="vaccination icon" />
            </div>
            <div class="col col_11 justify">
                <h3>Vaccinations</h3>
                <p>                    
                    <b>Goal: </b>To stop the spread of life threatening infectous diseases through prevention or cure administered by immunization.
                </p>
                <p>  
                    <b>Campaign: </b>$1/person for vaccinations against meningitis, measles, polio and other deadly epidemics.
                </p>
                <p>
                    <b>NPO: <a href="http://www.doctorswithoutborders.org/" target="_blank">Doctors Without Borders</a></b>
                </p>
            </div>
        </div>
        
        <!-- clean energy -->
        <div id="CLE" class="row">
            <div class="col col_5 align_center">
                <img src="/images/ci_carbondioxide256x256.png" width="256" height="256" alt="carbon emissions icon" />
            </div>
            <div class="col col_11 justify">
                <h3>Clean Energy</h3>
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
        
        <!-- charity discussion below         
        <div class="row">
        	
        	<div class="col col_10 align_center">
        		<p><img src="/images/charitywater.jpg" title="charity: water" width="580" height="387" /></p>
        	</div>
        	
        	<div class="col col_6">
        		<p><h3>charity: water</h3></p>
        		<iframe src="http://player.vimeo.com/video/2942875?title=0&amp;byline=0&amp;portrait=0" width="340" height="191" frameborder="0"></iframe>
        		<p>
        			Right now, almost one BILLION people on the planet don’t have access to clean, safe drinking water. That’s one in eight of us. charity: water is a non-profit organization bringing clean, safe drinking water to people in developing nations. They use 100% of pungle's donations to directly fund sustainable water solutions in areas of greatest need.<br/>
        			<p><a href="http://www.charitywater.org/whywater/" title="Visit charity: water" target="_blank">charity: water ></a></p>
    			</p>
        	</div>
        	
        </div>
        
        <div id="adventure" class="row">
        	
        	<div class="col col_16 align_center">
        		<img src="/images/1060x1.png" title="Ouch!" width="940" height="1" />
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_6">
        		<p><h3>The Adventure Project</h3></p>
        		<iframe src="http://player.vimeo.com/video/21305603?title=0&amp;byline=0&amp;portrait=0" width="340" height="191" frameborder="0"></iframe>
        		<p>
        			The Adventure Project increases investments in positive social enterprises around the world. They believe we can end extreme poverty in our lifetime by reinventing how we give and provide solutions that spur economic opportunity, promote dignity, & save lives. Amazing.<br/>
        			<p class="align_right"><a href="http://theadventureproject.org" title="Visit The Advneture Project" target="_blank">The Adventure Project ></a></p>
    			</p>
        	</div>
        	
        	<div class="col col_10 align_center">
        		<p><img src="/images/adventure_project.jpg" title="The Adventure Project" width="580" height="387" /></p>
        	</div>
        	
        </div>
        
        <div id="POP" class="row">
        	
        	<div class="col col_16 align_center">
        		<img src="/images/1060x1.png" title="Ouch!" width="940" height="1" />
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_10 align_center">
        		<p><img src="/images/pencilsofpromise.jpg" title="Pencils of Promise" width="580" height="387" /></p>
        	</div>
        	
        	<div class="col col_6">
        		<h3>Pencils of Promise</h3>
        		<br/>
        		<iframe src="http://player.vimeo.com/video/9190756?title=0&amp;byline=0&amp;portrait=0" width="340" height="191" frameborder="0"></iframe>
        		<p>
        			Pencils of Promise is a global movement of passionate individuals committed to supporting a world with greater educational opportunity for all. There are more than 75 million children without access to education, and we intend to help change this by supporting Pencils of Promise.<br/>
        			<p><a href="http://www.pencilsofpromise.org/our-projects" title="Visit Pencils of Promise" target="_blank">Pencils of Promise ></a></p>
        		</p>
        	</div>
        	
        </div>
        
        <div id="NBN" class="row">
        	
        	<div class="col col_16 align_center">
        		<img src="/images/1060x1.png" title="Ouch!" width="940" height="1" />
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_6">
        		<p><h3>Nothing But Nets</h3></p>
        		<p>
        			Nothing But Nets is a global, grassroots campaign to raise awareness and funding to combat malaria, one of the largest killers of children in Africa. pungle donates to Nothing But Nets because they have a proven track record of efficiently delivering mosquito nets to people who need them.<br />
        			<p class="align_right"><a href="http://www.nothingbutnets.net/nets-save-lives/net-distributions/" title="Visit Nothing But Nets" target="_blank">Nothing But Nets ></a></p>
    			</p>
        	</div>
        	
        	<div class="col col_10 align_center">
        		<p><img src="/images/nothingbutnets.jpg" title="Nothing But Nets" width="580" height="387" /></p>
        	</div>
        	
        </div>
        
        <div id="darmang" class="row">
        	
        	<div class="col col_16 align_center">
        		<img src="/images/1060x1.png" title="Ouch!" width="940" height="1" />
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_10 align_center">
        		<p><img src="/images/projectdarmang.jpg" title="Project Darmang" width="580" height="387" /></p>
        	</div>
        	
        	<div class="col col_6">
        		<p><h3>Project Darmang</h3></p>
        		<p>
        			Project Darmang is a local charity focused on clean water solutions specifically in Darmang. Working with a small local charity allows us to participate and volunteer our own time beyond the scope of pungle's donations. It gives us an intimate understanding of charities and how we can best fund sustainable solutions to people in need. Additionally, it's a great platform to allow local punglers an opportunity to get involved.<br/>
        			<p><a href="http://projectdarmang.blogspot.com/" title="Project Darmang" target="_blank">Project Darmang ></a></p>
        		</p>
        	</div>
        	
        </div>-->
        
    </div>

<?php require("include/footer.php"); ?>

	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js" type="text/javascript"></script>
	<script>!window.jQuery && document.write('<script src="/core/libs/jquery.min.js" type="text/javascript"><\/script>')</script>
	
    <script type="text/javascript">
		
    window.onload = function () {
    	 var r = Raphael("npoGraph");
                r.g.txtattr.font = "13px Arial, Verdana, Helvetica, sans-serif";
                
                /* colors 3fb1f3 68dc72 3cece2 e3e948 ff849e cb92e9 ffa250 eb6f4e */
                var pie = r.g.piechart(180, 170, 150, [15, 15, 15, 15, 15, 15, 10], {strokewidth: "4", colors: ["#a024ff", "#2f91ff", "#bdcacc", "#79da38", "#ffd824", "#ff0f53", "#404040"], legend: ["%% Empowerment", "%% Potable Water", "%% Technology", "%% Nature", "%% Education", "%% Vaccinations", "%% Clean Energy"], legendpos: "east", href: ["#scrollEMP", "#scrollPOT", "#scrollTEC", "#scrollNAT", "#scrollEDU", "#scrollVAC", "#scrollCLE"]});
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
        
        $('a[href=#scrollEMP]').click(function(){
			$('html, body').animate({
				scrollTop: $("#EMP").offset().top
			}, 800);
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
		
		$('a[href=#scrollVAC]').click(function(){
			$('html, body').animate({
				scrollTop: $("#VAC").offset().top
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