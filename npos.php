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
    <meta name="author" content="pungle.org">
<?php require("include/head.php"); ?>

		<!-- need to load the javascript at the top, since we load the graph in-line -->
		<script src="core/libs/raphael-min.js" type="text/javascript" charset="utf-8"></script> 
    <script src="core/libs/g.raphael-min.js" type="text/javascript" charset="utf-8"></script> 
    <script src="core/libs/g.pie-min.js" type="text/javascript" charset="utf-8"></script>
    
    <!-- stylize the graph here -->
		<style type="text/css">
			#npoGraph {				
    		margin: 0 auto;
    		width: 600px;
    		height: 340px;
			}
    </style>
    
</head>

<body>
<?php require("include/nav.php"); ?>

    
    <div id="content" class="clearfix">
        

      
        <div class="row">        
        	<div class="col col_13">
        		<h2>Cause Portfolio</h2>
        	</div>
        </div>
        
        <div class="row">
        	
        	<div class="col col_13 align_center">
        		<img src="images/1060x1.png" title="Ouch!" />
        	</div>
        	
        </div>
    	
        <!-- build graph of distribution -->
      	<div class="row">
      		<div class="col col_8">
  					<div id="npoGraph"></div>
      		</div> 
  				<div class="col col_5">
  					<p><br/><h3>Portfolio distribution</h3></p>
      			<p>Interactive visualization showing how pungle currently allocates funding to nonprofits through our social good campaign.<br/><br/>
      				Distribution ratios are subject to change depending on current campaign goals and progress; allowing pungle to redirect funding as necessary to meet milestones and/or respond to critical events.
      			</p>
      		</div>
    		</div>
    		
    		<div class="row">
        	
        	<div class="col col_13 align_center">
        		<img src="images/1060x1.png" title="Ouch!" />
        	</div>
        	
        </div>
    
        <!-- charity discussion below -->        
        <div class="row">
        	
        	<div class="col col_8 align_center">
        		<p><img src="images/charitywater.jpg" title="charity: water" /></p>
        	</div>
        	
        	<div class="col col_5">
        		<p><h3>charity: water</h3></p>
        		<iframe src="http://player.vimeo.com/video/2942875?title=0&amp;byline=0&amp;portrait=0" width="388" height="219" frameborder="0"></iframe>
        		<p>
        			Right now, almost one BILLION people on the planet don’t have access to clean, safe drinking water. That’s one in eight of us. charity: water is a non-profit organization bringing clean, safe drinking water to people in developing nations. They use 100% of pungle's donations to directly fund sustainable water solutions in areas of greatest need.<br/>
        			<p><a href="http://www.charitywater.org/whywater/" title="Visit charity: water" target="_blank">charity: water ></a></p>
    			</p>
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_13 align_center">
        		<img src="images/1060x1.png" title="Ouch!" />
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_5">
        		<p><h3>Oxfam America</h3></p>
        		<p>
        			More than 70 percent of poor people rely on agriculture for their income. But for the world’s estimated 400 million small-scale farmers, farming can also be a tremendously precarious way of life. From helping farmers survive changes in weather to ensuring that they receive a fair price for their crops, Oxfam helps make sure family farmers around the world can earn a decent living.<br/>
        			<p class="align_right"><a href="http://www.oxfamamerica.org/issues/agriculture" title="Visit Oxfam America" target="_blank">Oxfam America ></a></p>
    			</p>
        	</div>
        	
        	<div class="col col_8 align_center">
        		<p><img src="images/oxfam.jpg" title="Oxfam America" /></p>
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_13 align_center">
        		<img src="images/1060x1.png" title="Ouch!" />
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_8 align_center">
        		<p><img src="images/pencilsofpromise.jpg" title="Pencils of Promise" /></p>
        	</div>
        	
        	<div class="col col_5">
        		<h3>Pencils of Promise</h3>
        		<br/>
        		<iframe src="http://player.vimeo.com/video/9190756?title=0&amp;byline=0&amp;portrait=0" width="388" height="219" frameborder="0"></iframe>
        		<p>
        			Pencils of Promise is a global movement of passionate individuals committed to supporting a world with greater educational opportunity for all. There are more than 75 million children without access to education, and we intend to help change this by supporting Pencils of Promise.<br/>
        			<p><a href="http://www.pencilsofpromise.org/our-projects" title="Visit Pencils of Promise" target="_blank">Pencils of Promise ></a></p>
        		</p>
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_13 align_center">
        		<img src="images/1060x1.png" title="Ouch!" />
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_5">
        		<p><h3>Nothing But Nets</h3></p>
        		<p>
        			Nothing But Nets is a global, grassroots campaign to raise awareness and funding to combat malaria, one of the largest killers of children in Africa. pungle donates to Nothing But Nets because they have a proven track record of efficiently delivering mosquito nets to people who need them.<br />
        			<p class="align_right"><a href="http://www.nothingbutnets.net/nets-save-lives/net-distributions/" title="Visit Nothing But Nets" target="_blank">Nothing But Nets ></a></p>
    			</p>
        	</div>
        	
        	<div class="col col_8 align_center">
        		<p><img src="images/nothingbutnets.png" title="Nothing But Nets" /></p>
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_13 align_center">
        		<img src="images/1060x1.png" title="Ouch!" />
        	</div>
        	
        </div>
        
        <div class="row">
        	
        	<div class="col col_8 align_center">
        		<p><img src="images/projectdarmang.jpg" title="Project Darmang" /></p>
        	</div>
        	
        	<div class="col col_5">
        		<p><h3>Project Darmang</h3></p>
        		<p>
        			Project Darmang is a local charity focused on clean water solutions specifically in Darmang. Working with a small local charity allows us to participate and volunteer our own time beyond the scope of pungle's donations. It gives us an intimate understanding of charities and how we can best fund sustainable solutions to people in need. Additionally, it's a great platform to allow local punglers an opportunity to get involved.<br/>
        			<p><a href="http://projectdarmang.blogspot.com/" title="Project Darmang" target="_blank">Project Darmang ></a></p>
        		</p>
        	</div>
        	
        </div>
        
    </div>

<?php require("include/footer.php"); ?>
    
    <script type="text/javascript">
		
    window.onload = function () {
    	 var r = Raphael("npoGraph");
                r.g.txtattr.font = "13px Arial, Verdana, Helvetica, sans-serif";
                
                /* colors 3fb1f3 68dc72 3cece2 e3e948 ff849e cb92e9 ffa250 eb6f4e */
                var pie = r.g.piechart(220, 170, 150, [25, 30, 15, 5, 25], {strokewidth: "4", colors: ["#3fb1f3", "#68dc72", "#ff849e", "#e3e948", "#cb92e9"], legend: ["%% charity: water", "%% Pencils of Promise", "%% Oxfam America", "%% Nothing But Nets", "%% Project Darmang"], legendpos: "east"});
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
    };
    
  </script>
  
</body>

</html>