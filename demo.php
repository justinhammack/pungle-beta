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
			    
			    <input type="text" id="search">			
			    
			    <select id="dropList">
			        
			        <option value="" selected="selected">All</option>
			        <option value="gmail">Gmail</option>
			        
		        </select>
		        
		        <input type="checkbox" id="tagFav" value="FAV" /> Favorites<br />
                <input type="checkbox" id="tagAffl" value="AFFL" /> Affiliate
		        
	        </form> <br/>
		    <table id="table_example">
			<thead>
				<tr>
					<th width="30%">Email</th>
					<th width="10%">Id</th>
					<th width="10%">Phone</th>
					<th width="10%">Total</th>
					<th width="10%">Ip</th>
					<th width="10%">Url</th>
					<th width="10%">Time</th>
					<th width="10%">ISO Date</th>
					<th width="10%">UK Date</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>devo@flexomat.com</th>

					<td>66672</td>
					<td>941-964-8535</td>
					<td>$2482.79</td>
					<td>172.78.200.124</td>

					<td>http://gmail.com</td>
					<td>15:10</td>

					<td>1988/12/14</td>
					<td>14/12/1988</td>
				</tr>

				<tr>
					<th>henry@mountdev.net</th>

					<td>35889</td>

					<td>941-964-9543</td>
					<td>$2776.09</td>
					<td>119.232.182.142</td>
					<td>http://www.gmail.com</td>
					<td>3:54</td>

					<td>FAV</td>

					<td>19/1/1974</td>
				</tr>

				<tr>
					<th>christian@reno.gov</th>
					<td>60021</td>
					<td>941-964-5617</td>

					<td>$2743.41</td>
					<td>167.209.64.181</td>
					<td>http://www.dotnet.ca</td>
					<td>10:58</td>
					<td>2000/3/25</td>
					<td>25/3/2000</td>

				</tr>

				<tr>
					<th>muffins@donuts.com</th>
					<td>17927</td>
					<td>941-964-9511</td>
					<td>$2998.18</td>

					<td>210.214.231.182</td>

					<td>http://google.se</td>
					<td>21:22</td>
					<td>Afflstd>
					<td>FAV</td>
				</tr>

				<tr>
					<th>muffins@reno.gov</th>

					<td>76375</td>
					<td>941-964-2757</td>
					<td>affl</td>
					<td>220.222.93.171</td>

					<td>http://www.samba.org</td>
					<td>15:22</td>

					<td>1988/4/4</td>
					<td>4/4/1988</td>
				</tr>

				<tr>

					<th>mendez@gmail.com</th>
					<td>45834</td>
					<td>941-964-2575</td>

					<td>$2805.46</td>
					<td>228.170.245.253</td>
					<td>http://flexomat.com</td>

					<td>11:31</td>
					<td>1975/12/12</td>
					<td>12/12/1975</td>

				</tr>

				<tr>
					<th>dev@gmail.com</th>

					<td>20022</td>
					<td>941-964-4967</td>
					<td>$3296.54</td>
					<td>175.248.70.240</td>

					<td>http://www.flexomat.com</td>
					<td>4:27</td>

					<td>2002/7/3</td>
					<td>3/7/2002</td>
				</tr>

				<tr>
					<th>foo@polyester.se</th>

					<td>55977</td>

					<td>941-964-745</td>
					<td>$2953.73</td>
					<td>222.114.227.156</td>
					<td>http://www.donuts.com</td>
					<td>23:49</td>

					<td>1977/8/4</td>

					<td>4/8/1977</td>
				</tr>

				<tr>
					<th>adam@aftonbladet.se</th>
					<td>38867</td>
					<td>941-964-6302</td>

					<td>$1949.27</td>
					<td>116.241.143.196</td>
					<td>http://flexomat.com</td>
					<td>23:35</td>
					<td>1995/7/27</td>
					<td>27/7/1995</td>

				</tr>

				<tr>
					<th>devo@donuts.com</th>
					<td>51426</td>
					<td>941-964-1234</td>
					<td>$1067.00</td>

					<td>88.96.149.82</td>

					<td>http://www.polyester.se</td>
					<td>15:17</td>
					<td>1986/1/5</td>
					<td>5/1/1986</td>
				</tr>


				<tr>
					<th>henry@samba.org</th>

					<td>40859</td>
					<td>941-964-4856</td>
					<td>$3401.19</td>
					<td>68.152.250.74</td>

					<td>http://www.flexomat.com</td>
					<td>4:36</td>

					<td>1990/3/7</td>
					<td>7/3/1990</td>
				</tr>

				<tr>

					<th>found@dotnet.ca</th>
					<td>23986</td>
					<td>941-964-2686</td>

					<td>$1393.52</td>
					<td>98.102.181.138</td>
					<td>http://lostnfound.org</td>

					<td>5:51</td>
					<td>1993/7/22</td>
					<td>22/7/1993</td>

				</tr>

				<tr>
					<th>carl@fish.org</th>

					<td>73392</td>
					<td>941-964-5792</td>
					<td>$3876.04</td>
					<td>246.234.182.243</td>

					<td>http://www.google.se</td>
					<td>6:52</td>

					<td>1984/7/14</td>
					<td>14/7/1984</td>
				</tr>

				<tr>
					<th>found@mountdev.net</th>

					<td>03519</td>

					<td>941-964-1599</td>
					<td>$1176.48</td>
					<td>104.212.122.177</td>
					<td>http://donutsx.com</td>
					<td>18:52</td>

					<td>2000/8/6</td>

					<td>6/8/2000</td>
				</tr>
			</table>
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
    
	<script src="/core/libs/jquery.quicksearch.js"></script>
	
	<script type="text/javascript">
	    $(document).ready(function(){
	        qsStores = $('input#search').quicksearch('table tbody tr');
	        $('select#dropList,input#tagFav,input#tagAffl').bind('change', function() {
	            qsStores.sorted();
            });
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