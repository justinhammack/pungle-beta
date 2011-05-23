<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
	<title>pungle - the anvil</title>
	<meta name="description" content="Tangible social good through online shopping at no cost to our visitors; progress you can see.">
	<meta name="author" content="pungle.me">
<?php require("include/head.php"); ?>
	
	<link rel="canonical" href="http://pungle.me/anvil/" />

    <style type="text/css">
        table { width: 100%; border-collapse: collapse; margin: 0 0 1em; font-size: 10px; line-height: 13px; }
        thead th { background: #f0b02a; color: #fff; font-size:12px; line-height: 14px; }
        tbody th { text-align: left; font-size:14px; line-height: 26px; }
        table th, table td { border: 1px solid #ddd; padding: 2px 5px; }
        
        .odd, .r1 { background: #fff; }
        .even, .r2 { background: #eee; }
        .r3 { background: #ebebeb; }
        .search { font-weight:  bold; }
        
        input:-moz-placeholder {
            color: #EEE;
        }
        
        .ui-widget, .ui-button-text { font-size: 12px; }        
        
    </style>
    
</head>

<body>
<?php require("include/nav.php"); ?>

	<div id="content" class="clearfix">
		
	<!-- page description 
	<div class="row">
      <div class="col col_16">
      		<div style="width: 148px;" class="addthis_toolbox addthis_default_style addthis_32x32_style right">
				<a class="addthis_button_preferred_1"></a>
				<a class="addthis_button_preferred_2"></a>
				<a class="addthis_button_preferred_3"></a>					
				<a class="addthis_button_compact"></a>
			</div>
      	<h2>The Anvil</h2>      	
      </div>
    </div> -->
    
	<div class="row">
		<div class="col col_16">
			<form>
			    
			    <input type="text" placeholder="Search.." id="storeSearch">
			    <select id="dropList">
			        
			        <option value="" selected="selected">ALL</option>
			        <option value="">Accessories</option>
			        <option value="">Art & Photo</option>
			        <option value="">Automotive</option>
			        <option value="">Books</option>
			        <option value="">Clothing</option>
			        <option value="">Computer & Office</option>
			        <option value="">Electronics</option>
			        <option value="">Family & Kids</option>
			        <option value="">Food & Drink</option>
			        <option value="">Gifts & Flowers</option>
			        <option value="">Health & Beauty</option>
			        <option value="">Home & Garden</option>
			        <option value="">Hosting & Domains</option>
		            <option value="">Music & Movies</option>
	                <option value="">Pet Supplies</option>
                    <option value="">Super Stores</option>
                    <option value="">Sports & Fitness</option>
                    <option value="">Toys & Hobbies</option>
                    <option value="">Travel & Hotels</option>
                    <option value="">Video Games</option>
			        
		        </select>
		        
		        <span id="storeCheckboxs">
		            <input type="checkbox" id="tagAffl" value="AFFL" /><label for="tagAffl">=]</label><input type="checkbox" id="tagFav" value="FAV" /><label for="tagFav"><3</label>
		        </span>
		        
	        </form>
	    </div>
	</div>
	
	
	

	
	
	
	<div class="row">
		<div class="col col_16">
		    
	        <div style="height: 300px; overflow:auto; overflow-y:scroll;">
	        
		    <table>
    			<thead>
    				<tr>
    					<th width="20%">STORE</th>
    					<th width="70%">DESCRIPTION</th>
    					<th width="5%" title="High impact shopping!">=]</th>
    					<th width="5%" title="Favorite a store!"><3</th>
    				</tr>
    			</thead>
    			<tbody>
    				<tr id="noresults">
		                <td colspan="4">No Results</td>		                
	                </tr>
    			    <tr>
    					<th>4 Wheel Parts</th>
    					<td>Serving the needs off-road enthusiasts for over 40 years as the nations largest distributor of 4x4 parts and accessories for trucks, Jeeps, and SUV's.</td>
    					<td>AFFL</td>
    					<td>FAV</td>
    				</tr>
    				<tr>
    					<th>Advance Auto Parts</th>
    					<td>Your source for quality auto parts, advice and accessories. Shop online for home delivery or pick up at a location near you.</td>
    					<td>AFFL</td>
    					<td>FAV</td>
    				</tr>
    				<tr>
    					<th>Alternative Apparel</th>
    					<td>Premier casual lifestyle apparel brand, delivering the best quality and value in fashion basics.</td>
    					<td>AFFL</td>
    					<td>FAV</td>
    				</tr>
    				<tr>
    					<th>Amazon</th>
    					<td>The earth's biggest selection of books, magazines, music, DVDs, videos, electronics, computers, software, apparel & just about anything else.</td>
    					<td>AFFL</td>
    					<td>FAV</td>
    				</tr>
    				<tr>
    					<th>BTC Elements</th>
    					<td>Fresh, inspiring fashion designs that are both earth friendly and ethically sourced.</td>
    					<td>AFFL</td>
    					<td>FAV</td>
    				</tr>
    				<tr>
    					<th>Busted Tees</th>
    					<td>Funny t-shirts on American Apparel, hip t-shirt designs and retro vintage styles.</td>
    					<td>AFFL</td>
    					<td>FAV</td>
    				</tr>
    			</tbody>
			</table>
			
			
		</div>
			
		</div>
	</div>
		
		<!-- container for overview to hold store buttons 
		<div class="row">
			<div id="overviewContainer" class="col col_16">
				<ul id="ulOverview"></ul>				
			</div>			
		</div> -->
		
		<!-- container for all stores 
		<div class="row">
			<div class="col col_10">
				
				<div id="allStoresAccordion">
					
					<h3><a href="#">More Stores</a></h3>
					<ul id="allStores"></ul>
					
				</div>
				
				<p>
					<button id="buttonClearStores" title="Clear all stores from overview.">Clear Stores</button>
					<button id="buttonRestoreDefaults" title="Restore default store list to overview.">Restore Defaults</button>
				</p>
				
			</div>
			<div class="col col_6">
				<p class="align_justify">
					<span class="pungleRedIcon ui-icon ui-icon-heart" title="Social good is enabled."></span> Social Good 
					<span class="pungleBlueIcon ui-icon ui-icon-tag" title="Deal details would go here."></span> Deal Link<br/>					
				</p>
			</div>
		</div> -->
		
	</div>
    
<?php require("include/footer.php"); ?>
	
	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js" type="text/javascript"></script>
	<script>!window.jQuery && document.write('<script src="/core/libs/jquery.min.js" type="text/javascript"><\/script>')</script>
  
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>
	<script>!$.ui && document.write('<script src="/core/libs/jquery-ui-1.8.9.min.js" type="text/javascript"><\/script>')</script>
	
	<!-- add this scripts 
	<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=pungle"></script> -->

	<!-- version this file to force reload -->
	<!-- 3/27/11 set v=3 
	<script src="/core/pungle.js?v=3"></script> -->
	<!-- <script src="core/pungle-min.js?v=2"></script> -->
    
	<script src="/core/libs/jquery.ui.selectmenu.js"></script>
	<script src="/core/jquery.quicksearch.js"></script>
	
	<script type="text/javascript">
	    $(document).ready(function(){
	        qsStores = $('input#storeSearch').quicksearch('table tbody tr', {
	            noResults: '#noresults',
				stripeRows: ['odd', 'even']
	        });
	        
	        $('select#dropList,input#tagFav,input#tagAffl').bind('change', function() {
	            qsStores.sorted();
            });
            
            $('select#dropList').selectmenu();
            $( "#storeCheckboxs" ).buttonset();            
            
	        /* pungle.init(); */	        
	    });
	</script>
	
	<!-- hello bar! 
	<script type="text/javascript" src="//www.hellobar.com/hellobar.js"></script>
    <script type="text/javascript">
        new HelloBar(13923,15304);
    </script> -->


</body>

</html>