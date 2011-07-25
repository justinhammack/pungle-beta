<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
	<title>pungle - shop tool</title>
	<meta name="description" content="Tangible social good through online shopping at no cost to our visitors; progress you can see.">
	<meta name="author" content="pungle.me">
<?php require("include/head.php"); ?>
	
	<link rel="canonical" href="http://pungle.me/shop/" />

    <style type="text/css">
        table { width: 100%; border-collapse: collapse; margin: 0 0 1em; font-size: 10px; line-height: 13px; }
        thead th { background: #FABE00; color: #444; font-size:12px; line-height: 14px; }
        tbody th { text-align: left; font-size:15px; line-height: 26px; }
        tbody th a, tbody th a:visited { color: #444; }
        tbody th a:hover { color: #E6B000 }
        table th, table td { border: 1px solid #ddd; padding: 2px 5px; }
        
        .odd, .r1 { background: #FFF; }
        .even, .r2 { background: #EFEFEF; }
        .r3 { background: #ebebeb; }
        .odd:hover, .even:hover { background: #FFF3CC; }
        .search { font-weight:  bold; }
        
        input:-moz-placeholder {
            color: #EEE;
        }
        
        #storeSearch { width: 245px; height: 20px; line-height: 20px; margin-right: 5px; }
        
        .ui-widget, .ui-button-text { font-size: 12px; }     
        
        .ui-widget { margin-right: 5px; }
        
        .afflImage, .afflNoImage, .favNoImage, .favImage {
		    display: block;
		    text-align:center;
		    width: 24px;
		    height: 24px;
		    margin: 0 auto;
		    text-indent: -99999px;
	    }
	    .afflImage {background: url('/images/kittycorn48x24.png') 0 0;}
	    .afflNoImage {background: url('/images/kittycorn48x24.png') 24px 0;}
	    .favImage { cursor: pointer; background: url('/images/star48x24.png') 0 0;}
	    .favNoImage { cursor: pointer; background: url('/images/star48x24.png') 24px 0;}
	    
	    .ui-selectmenu { margin-right: 5px; }
	    
	    #KTLOStore {
	        background: url('/images/PU_shoppungle.png') 0 0;
	        display: block;
	        height: 80px;
	        width: 137px;
	        position: absolute;
	        top: -80px;
	        right: 30px;
	        text-indent: -999999px;
	    }
	    
	    #pungleBookmarklet.dribbble, #pungleBookmarklet.dribbble:hover, #pungleBookmarklet.dribbble:visited, #pungleBookmarklet.dribbble:active {color: #716028;}
	    
	    .tagFavIcon, .tagAfflIcon { text-indent: -999999px; }
	    .tagFavIcon { background-image: url('/images/star16x16g.png'); background-position: center; background-repeat: no-repeat; }
	    .tagAfflIcon { background-image: url('/images/highfive16x16g.png'); background-position: center; background-repeat: no-repeat; }
	    .tagFavIcon.ui-state-active { background-image: url('/images/star16x16.png'); background-position: center; background-repeat: no-repeat; }
	    .tagAfflIcon.ui-state-active { background-image: url('/images/highfive16x16.png'); background-position: center; background-repeat: no-repeat; }
	    
	    #dragit { 
	        display: none;
	        background: transparent url('/images/bookmarklet_drag206x109.png') center center no-repeat;
	        width: 206px;
	        height: 109px;
	        position: absolute;
	        right: 5px;
	        bottom: 15px;
	        z-index: 8000;
        }
        
        #pungleBookmarklet { position: relative; z-index: 9000; }
        #pungleBookmarklet.dribbble:hover #dragit { display: block; }
        
    </style>
    
</head>

<body>
<?php require("include/nav.php"); ?>

    <div id="subheader" class="clearfix">
        <div class="row" style="overflow: visible;">
            <div class="col col_6"><h1 style="display: inline-block"><b>Shop</b> Tool</h1></div>
            <div class="col col_10" style="padding-top: 8px; overflow: visible;">
                <img style="align: middle;" src="/images/PU_bookmarklet_text.png" width="187" height="30" alt="After setting up your stores, drag the button to your bookmarks.">
                <a id="pungleBookmarklet" class="dribbble" style="display: inline-block; margin-left: 0px;" title="Shop bookmarklet, drag to your bookmark bar!"  href="#" >+ Pungle
                    <span id="dragit"></span>
                </a>                
            </div>
        </div>
    </div>
    
	<div id="content" class="clearfix">
		
	<a id="KTLOStore" href="http://pungle.storenvy.com/" target="_blank" title="Help us keep the lights on; buy pungle products!">Pungle Products</a>
	<!-- <div class="row">
      <div class="col col_16">      		
      	<a id="pungleBookmarklet" class="right" href="">bookmarklet</a>
		<h2>The Anvil</h2>
      </div>
    </div> 
    
    <div class="row">
		<div class="col col_16 align_center">
			<img src="/images/the_anvil.png" title="hi" width="940" height="40" />
		</div>
	</div> -->
    
	<!-- container for overview to hold store buttons -->
	<div class="row">
		<div id="overviewContainer" class="col col_16">
			<ul id="ulOverview"></ul>				
		</div>			
	</div>
    
	<div class="row">
		<div class="col col_16">
			
		    <!-- <a id="pungleBookmarklet" href="javascript:(function(e,a,g,h,f,c,b,d){if(!(f=e.jQuery)||g>f.fn.jquery||h(f)){c=a.createElement(&quot;script&quot;);c.type=&quot;text/javascript&quot;;c.src=&quot;http://ajax.googleapis.com/ajax/libs/jquery/&quot;+g+&quot;/jquery.min.js&quot;;c.onload=c.onreadystatechange=function(){if(!b&&(!(d=this.readyState)||d==&quot;loaded&quot;||d==&quot;complete&quot;)){h((f=e.jQuery).noConflict(1),b=1);f(c).remove()}};a.documentElement.childNodes[0].appendChild(c)}})(window,document,&quot;1.3.2&quot;,function($,L){
		        pungleBKMRKLTSavedStores = 'hi fag';
		        var jsCodePungleBKMRKLT = document.createElement('script');  
                jsCodePungleBKMRKLT.setAttribute('src', 'http://localhost/core/pungleBKMRKLT.js');
                document.body.appendChild(jsCodePungleBKMRKLT);
		    });">Bookmarklet</a> -->
		    
		    <input type="text" placeholder="Search.." id="storeSearch">
		    
		    <select id="dropList">
		        
		        <option value="" selected="selected">All Categories</option>
		        <option value="c1|">Accessories</option>
		        <option value="c20|">Art & Photo</option>
		        <option value="c2|">Automotive</option>
		        <option value="c3|">Books</option>
		        <option value="c4|">Clothing</option>
		        <option value="c5|">Computer & Office</option>
		        <option value="c6|">Electronics</option>
		        <option value="c7|">Family & Kids</option>
		        <option value="c19|">Food & Drink</option>
		        <option value="c9|">Gifts & Flowers</option>
		        <option value="c10|">Health & Beauty</option>
		        <option value="c11|">Home & Garden</option>
		        <option value="c12|">Hosting & Domains</option>
	            <option value="c13|">Music & Movies</option>
                <option value="c15|">Pet Supplies</option>
                <option value="c16|">Super Stores</option>
                <option value="c17|">Sports & Fitness</option>
                <option value="c8|">Toys & Hobbies</option>
                <option value="c18|">Travel & Hotels</option>
                <option value="c14|">Video Games</option>
		        
	        </select><span id="storeCheckbox">
	            <input type="checkbox" id="tagAffl" value="AFFL" /><label class="tagAfflIcon" for="tagAffl" title="Show only high impact stores." >=]</label><input type="checkbox" id="tagFav" value="FVS" /><label class="tagFavIcon" for="tagFav" title="Show only your favorite stores." ><3</label>
	        </span>
	        
	        <button id="buttonClearStores" title="Clear all favorite stores from overview.">Clear Favorites</button>
	        <button id="buttonRestoreDefaults" title="Restore default favorite stores to overview.">Restore Defaults</button>
		    
	    </div>
	</div>
	
	<div class="row">
		<div class="col col_16">
		    
	        <div style="height: 300px; overflow:auto; overflow-y:scroll;">
	        
		    <table>
    			<thead>
    				<tr>
    					<th width="25%">STORE</th>
    					<th width="65%">DESCRIPTION</th>
    					<th width="5%" title="High impact shopping!">=]</th>
    					<th width="5%" title="Favorite a store!"><3</th>
    				</tr>
    			</thead>
    			<tbody id="allStores">
    				<tr id="noresults">
		                <td colspan="4">No Results.. <a href="http://localhost/about-us/contact/" title="Suggest a store!">Suggest a store?</a></td>
	                </tr>    			    
    			</tbody>
			</table>			
			
		    </div>
			
		</div>
	</div>
	
	
	<div class="row">
        <div class="col col_10 align_right">
            <h3>Want to watch the tutorial?</h3>
        </div>
        <div class="col col_6">
            <a class="dribbble" href="/tutorial/" title="Check out the tutorial">Tutorial ></a>
        </div>
    </div>
    
	</div>
    
<?php require("include/footer.php"); ?>
	
	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
	<script>!window.jQuery && document.write('<script src="/core/libs/jquery.min.js" type="text/javascript"><\/script>')</script> 
  
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js" type="text/javascript"></script>
	<script>!$.ui && document.write('<script src="/core/libs/jquery-ui-1.8.9.min.js" type="text/javascript"><\/script>')</script>
	
	<!-- add this scripts 
	<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=pungle"></script> -->

	<!-- version this file to force reload -->
	<!-- 3/27/11 set v=3 -->
	<script src="/core/pungleJSON.js"></script>
	<script src="/core/pungle.js?v=4"></script>
	    
	<script src="/core/libs/jquery.ui.selectmenu.js"></script>
	<script src="/core/jquery.quicksearch.js"></script>
	
	<script type="text/javascript">
	    $(document).ready(function(){
	        
	        pungle.init();	        
	        
	    });	    
	</script>
	
	<!-- hello bar! 
	<script type="text/javascript" src="//www.hellobar.com/hellobar.js"></script>
    <script type="text/javascript">
        new HelloBar(13923,15304);
    </script> -->


</body>

</html>