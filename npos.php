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
        	
        	<div id="charityWater" class="col col_16 align_center">
        		<img src="/images/1060x1.png" title="Ouch!" width="940" height="1" />
        	</div>
        	
        </div>
    
        <!-- charity discussion below -->        
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
        			The Adventure Project increases investments in positive social enterprises around the world. They believe we can end extreme poverty in our lifetime by reinventing how we give and provide solutions that spur economic opportunity, promote dignity, & save lives. <!-- We think they are pretty amazing! Why? Clear scope of cause, scalability, flexibility in their campaign and a positive vision for change. Plus, they are great people who are personally connected to their donators.--> Amazing.<br/>
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
        	
        </div>
        
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
                var pie = r.g.piechart(180, 170, 150, [20, 32, 25, 5, 18], {strokewidth: "4", colors: ["#3fb1f3", "#68dc72", "#ff849e", "#e3e948", "#cb92e9"], legend: ["%% charity: water", "%% Pencils of Promise", "%% The Adventure Project", "%% Nothing But Nets", "%% Project Darmang"], legendpos: "east", href: ["#scrollPOP", "#scrollAdventure", "#scrollCharityWater", "#scrollDarmang", "#scrollNBN"]});
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
        
        $('a[href=#scrollCharityWater]').click(function(){
			$('html, body').animate({
				scrollTop: $("#charityWater").offset().top
			}, 800);
		});
		
		$('a[href=#scrollPOP]').click(function(){
			$('html, body').animate({
				scrollTop: $("#POP").offset().top
			}, 800);
		});
		
		$('a[href=#scrollAdventure]').click(function(){
			$('html, body').animate({
				scrollTop: $("#adventure").offset().top
			}, 800);
		});
		
		$('a[href=#scrollNBN]').click(function(){
			$('html, body').animate({
				scrollTop: $("#NBN").offset().top
			}, 800);
		});
		
		$('a[href=#scrollDarmang]').click(function(){
			$('html, body').animate({
				scrollTop: $("#darmang").offset().top
			}, 800);
		});
    };
    
  </script>
  
</body>

</html>