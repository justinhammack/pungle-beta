<!DOCTYPE html>

<html>

<head>
	
	<title>pungle.org - shopping in the know!</title>
	
	<meta name="description" content="pungle.org is the only bookmark you need for shopping, giving you a birds eye view of the hottest sales at all your favorite stores. Keeping you in the know. Together, punglers are changing the world." />
	<meta name="keywords" content="pungle, online shopping, sales, specials, store bookmarking, shop online, deals, amazon, buy.com, walmart, endless, macy's, itunes, best buy, overstock, newegg" />
	<meta charset="UTF-8" />
	<meta name="ROBOTS" content="ALL">
	
	<meta property="og:title" content="I'm a pungler!" />
	<meta property="og:description" content="pungle is the perfect marriage of savvy shopping tool & social good." />
	<meta property="og:image" content="http://pungle.org/images/facebook_share2.jpg" />

	<!-- temp local use <link href="local/jquery-ui-redmond.css" rel="stylesheet" type="text/css"/> -->
        
	<!-- CDN ref CSS -->
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/redmond/jquery-ui.css" rel="stylesheet" type="text/css"/>

	<link rel="stylesheet" type="text/css" href="pungle.css" />

	<link rel="icon" type="image/png" href="images/pungle_favicon32pix.png" />
	
</head>

<body><div id="content"> <!-- start of main content -->
	
	<!-- header -->
	<div id="header">
		<div id="storeLoadingContainer" style="display: none; height: 0px;">
			<center><div class="punglesteps"><i>Injecting Social Good: <span style="color: #0B78BD;">Michael J Fox</span> into <span style="color: #FF7800;">Zappos</span>...</i></div></center>
			<div id="progressBar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all" style="height: 40px;"><div id="progressBarValue" class="ui-progressbar-value ui-widget-header ui-corner-left ui-corner-right" style="width: 0%; "></div></div>
		</div>
		<div class="followus">
			<a href="http://www.facebook.com/pungleDOTorg" target="_blank" ><img src="images/facebook.png" title="Visit us on Facebook!" /></a>
			<a href="http://www.twitter.com/JustinHammack" target="_blank" ><img src="images/twitter.png" title="Follow our founder on Twitter!" /></a>
		</div>
	</div>
	<!-- end header -->

	<!-- how it works -->
	<div id="howitworksbutton"><a href="#" rel="pungleinfomatics" class="howitworks" ><img src='images/transparency.gif' width='32' height='32' title="Learn how to use pungle." /></a></div>

	<!-- CBOX OBJECTS -->
	<div style='display:none'>
		
		<!-- pick a charity -->
		<div id="pick_a_charity" class="punglecbox">
			<div id="charity">
				<div class="punglesteps"><img src="images/numberstar.gif" />Select a non-profit. <sub>(<a href="#" title="Pick which non-profit you'd like us to support. It doesn't cost you a thing!">details</a>)</sub></div><div style="clear:both"></div>
				<div class="charitybuttons">
				<!-- 6 charityx --><img src="images/charity-ofthe-month.png" title="The mission of the Cystic Fibrosis Foundation, a nonprofit donor-supported organization, is to assure the development of the means to cure and control cystic fibrosis and to improve the quality of life for those with the disease." id="npo6" onMouseOver="npoover(6)" onMouseOut="npoout(6)" onClick="npoclick(6)" />
				</div>
				<div class="charitybuttons2">
				<!-- 2 charitywater --><img src="images/charitywater_gray.png" title="charity: water is a non-profit organization bringing clean, safe drinking water to people in developing nations." id="npo2" onMouseOver="npoover(2)" onMouseOut="npoout(2)" onClick="npoclick(2)" />
				<!-- 4 susang --><img src="images/susangkomen_gray.png" title="Dedicated to breast cancer education and research about causes, treatment, and the search for a cure." id="npo4" onMouseOver="npoover(4)" onMouseOut="npoout(4)" onClick="npoclick(4)" />
				<!-- 3 mjfox --><img src="images/michaeljfox_gray.png" title="For The Michael J. Fox Foundation, there is one clear measure of success: delivering patients better treatments and, ultimately, a cure for Parkinson's disease." id="npo3" onMouseOver="npoover(3)" onMouseOut="npoout(3)" onClick="npoclick(3)" />
				<!-- 0 unicef --><img src="images/unicef_gray.png" title="The United Nations Children's Fund - UNICEF - works for children's rights, their survival, development and protection, guided by the Convention on the Rights of the Child." id="npo0" onMouseOver="npoover(0)" onMouseOut="npoout(0)" onClick="npoclick(0)" />
				<!-- 5 coitl --><img src="images/conservationintl_gray.png" title="Conservation International applies innovations in science, economics, policy and community participation to protect the Earth's biodiversity around the world." id="npo5" onMouseOver="npoover(5)" onMouseOut="npoout(5)" onClick="npoclick(5)" />
				<!-- 1 redcross --><img src="images/redcross_gray.png" title="The Red Cross helps prepare communities for emergencies and keep people safe every day thanks to caring people who support our work." id="npo1" onMouseOver="npoover(1)" onMouseOut="npoout(1)" onClick="npoclick(1)" />
				</div>
			</div>
			<div style="clear:both;"></div>
			<p style="text-align: left; margin: 20px 20px 0px;">
				<em>What is this?</em>&nbsp;&nbsp;&nbsp;We understand that punglers are sophisticated, responsible shoppers who expect the best from the businesses they support. We're able to donate money to the non-profit you pick by working with vendors that support our social good program.<br /><br />
				<em>What does it cost?</em>&nbsp;&nbsp;&nbsp;Nothing! It's our way of saying 'thank you' for being such an outstanding pungler.<br /><br />
				<em>How does it work?</em>&nbsp;&nbsp;&nbsp;We have more information <a href="#" class="why">here</a> - don't forget to come back and pick a non-profit.<br /><br />
			</p>
		</div>

		<!-- how it works -->
		<div id="how_it_works" class="punglecbox">
			<span>
				<p style="text-align: center;"><object width="560" height="340"><param name="movie" value="http://www.youtube.com/v/h-Vim-jbh_4?fs=1&amp;hl=en_US"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/h-Vim-jbh_4?fs=1&amp;hl=en_US" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="560" height="340"></embed></object></p>
				<br />
				<em><b>a pungler defined:</b></em> a savvy shopper who leverages pungle to get a birds eye view of their favorite stores & the best deals online while expecting a 100% free service from a charitable business with no obnoxious ads or registration required.<br />
				<br />
				<em style="color: #FED700;">How to shop:</em> Click the logo button for any store you'd like to use and the page will load in a new window.<br />
				<br />
				<em style="color: #FED700;">How to organize stores:</em> Click & drag the gray handle to re-organize your stores. You can move stores in/out of the 'view all stores container' and into your overview.<br />
				<br />
				<em style="color: #FED700;">How to find deals:</em> Deals will be shown as a highlighted icon in the bottom right corner of the store. Mouse over to view the deal, click the deal link to start saving!<br />
				<br />
				<em style="color: #FED700;">How to save your setup:</em> Settings are saved automatically by using browser cookies. If you clear your cookies, your settings will be lost.<br />
				<br />
				<em style="color: #FED700;">How to reset to default:</em> At the bottom right corner of the page, click 'Restore Defaults' or alternatively, clear your browser cookies.<br />
				<br />
				<strong><a href="http://www.facebook.com/pungleDOTorg" target="_blank">Get involved in the pungle community on Facebook!</a></strong>
			</span>
		</div>

		<!-- who -->
		<div id="who_" class="punglecbox">
			<div style="text-align: center;"><img src="images/aboutus_header.png" title="We're just hanging out having a good time :)" /></div>
			<p style="text-align: left;">
				We're real people who'd love to meet you! Also visit our community on <a href="http://www.facebook.com/pungleDOTorg" target="_blank" >Facebook</a> to meet other punglers.
				<br /><br />
			</p>					
			<div style="float: left; width: 243px; text-align: center;">
				<p><a href="http://about.me/justinhammack" target="_blank"><img style="padding: 10px 0 8px 0;" src="images/aboutus_jbh.jpg" title="Justin Hammack" /></a></p>
				<strong>Justin Hammack</strong> - <em><a href="http://about.me/justinhammack" target="_blank">about.me</a></em>
			</div>
			<div style="float: left; width: 243px; text-align: center;">
				<p><a href="http://about.me/bandrews" target="_blank"><img style="padding: 10px 0 8px 0;" src="images/aboutus_bma.jpg" title="Ben Andrews" /></a></p>
				<strong>Ben Andrews</strong> - <em><a href="http://about.me/bandrews" target="_blank">about.me</a></em>
			</div>
			<div style="float: left; width: 193px; text-align: center;">
				<p><a href="http://about.me/madelinep" target="_blank"><img style="padding: 10px 0 8px 0;" src="images/aboutus_mep.jpg" title="Madeline Puckette" /></a></p>
				<strong>Madeline Puckette</strong><br />
				<em><a href="http://about.me/madelinep" target="_blank">about.me</a></em>						
			</div>
			<div style="float: left; width: 193px; text-align: center;">
				<p><img style="padding: 10px 0 8px 0;" src="images/aboutus_mh.jpg" title="Micah Huerta" /></p>
				<strong>Micah Huerta</strong><br />
				<em><a href="mailto:micah@pungle.org">Email</a></em>
			</div>
			<div style="float: right; width: 193px; text-align: center;">
				<p><img style="padding: 10px 0 8px 0;" src="images/aboutus_ka.jpg" title="Katie Andrews" /></p>
				<strong>Katie Andrews</strong><br />
				<em><a href="mailto:contact@pungle.org">Email</a></em>
			</div>
			<div style="clear:both;"></div><br />
		</div>

		<!-- what -->
		<div id="what_" class="punglecbox">
			<div style="text-align: center;"><img src="images/punglekat.png" title="Cupcakes are delicious." /></div>
			<p style="text-align: left;">
				<strong>pungle.org</strong> is a simple-to-use website that unifies the online shopping experience with a community that cares about making a difference through a range of great causes. We believe that small gestures can make a big difference in the power of the consumers' hands.
				<br /><br />
				<em>So what does pungle mean?</em> It means to make a contribution, plus it sounds catchy.
				<br /><br />
			</p>
			<p style="text-align: left; clear: both; padding-top: 10px;">
				pungle is located in Seattle, WA (business license #603021592)						
			</p>
		</div>
		
		<!-- why -->
		<div id="why_" class="punglecbox">
			<div style="text-align: center;"><img src="images/howitworks.gif" title="punglers in action.." /></div>
			<p style="text-align: left;">
				<em>Our Ethics:</em> We aren't perfect, but we're trying to do the right thing. We strive to do business in a more enlightened way, where we take responsibility for the impact of our business on society and the environment. That's why we pride ourselves on offering a 100% free service with no ads or registration required.
				<br /><br />						
				<em>Our Philosophy:</em> pungle unifies the power of many for the good of a few causes at a time, increasing the donation effectiveness of pungle exponentially. pungle isn't trying to replace the donations you normally make. Instead, we're asking that you take a small step with us by changing the way you shop, so that together we can make an even greater difference.
				<br /><br />
				You are currently supporting: <a href="#" class="pickacharity">Pick a non-profit</a>
				<br /><br />
			</p>
		</div>

		<!-- contact us -->
		<div id="contact_us" class="punglecbox">
			<p style="text-align: left;">
				<strong>Suggest a non-profit of the month, featured artist<br/>and any general inquiries:</strong> <em><a href="mailto:contact@pungle.org">Email</a></em>
				<br /><br />
				<strong>...or are you looking for someone</strong> <em><a href="#" class="who">specific</a>?</em>
				<br /><br />
			</p>
			<p style="text-align: center;">
				<strong>Maybe you need help?</strong>				
				<br /><br />
				<a href="http://getsatisfaction.com/pungle" target="_blank"><img title="Customer Support? Yes please." alt="Badge_get_help" src="images/get_satisfaction.png" /></a>
			</p>
		</div>

		<!-- terms of service -->
		<div id="terms_of_service" class="punglecbox">
			<p style="text-align: left;">
				<strong>Terms of Service:</strong><br />
				<br />
				pungle.org is owned in whole by pungle. The provisions of this policy that apply to pungle.org also apply to pungle.<br />
				<br />
				For the sake of this policy the following terms are defined: "We" or "Us" refers to pungle.org and pungle.  "Stores" refers to all online retailers that can be accessed directly from pungle.org.  "Charities" refers to any nonprofit, school, association, or other organization that receives donations directly from pungle.org.  "User" refers to any individual/group who visits pungle.org to access any of the Stores and suggest any of the Charities.<br />
				<br />
				Pungle.org links to Stores and Charities that are not owned or controlled by Us, including, but not limited to online retailers, organizations and any other website that We link to, whether it be linked directly from pungle.org or shared virally by forwarding emails, using social media, or other methods.  Please be aware that We are not responsible for the content or practices of such websites.  In particular any losses, injuries, delays or errors related to or arising from the purchase of goods or services from any Stores.  Any problem with a Store including billing, purchases, and delivery should be addressed directly with that Store.  We do not represent or warrant the accuracy or reliability of information given forth on pungle.org and will not be liable for any omissions, errors, or delays in this information or any losses, injuries, or damages related to or arising from its display or use.  Information published on this Web Site is provided without charge as a convenience to Users, to be used for informational purposes only.  Nothing in this website constitutes a recommendation or endorsement of any Store, Charity, product or brand.  By using the services offered on pungle.org or associated directly with Us, Users agree to the terms and conditions of use outlined herein. 
			</p>
		</div>
		
		<!-- first time visit -->
		<div id="visitor_update" class="punglecbox">
			<p style="text-align: left;">
				<span style="color: #FFF; font-size: 20px;">Hi. Your first time here? ><a href="#" onclick="$.colorbox.close();" title="Seriously, you know what you're doing?">click to skip</a><</span> <!-- pungle: <em style="font-size: 20px; color: #FED700;">Alpha</em></span>	-->
				<p style="padding: 3px;" id="browser_results_inject"></p>
				<p style="padding: 5px;"><strong>Getting started in 2 easy steps..</strong> <em style="color: #FED700;">'Don't worry, no account needed.'</em></p>
				<p style="padding: 3px 10px;"><b>1) Stay Updated: </b> We're in development. Everything 'should' work, but when it doesn't we'll let you know. Like us to stay in the know --></p>
				<p style="text-align: center; padding: 3px;"><object width="640" height="385"><param name="movie" value="http://www.youtube.com/v/h-Vim-jbh_4?fs=1&amp;hl=en_US"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/h-Vim-jbh_4?fs=1&amp;hl=en_US" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="640" height="385"></embed></object></p>
				<p style="padding: 5px; text-align: center;"><em>Feel free to share pungle with your friends and family!</em></p>
				<span style="position:absolute; top:50px; right:0px;"><iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2FpungleDOTorg&amp;layout=box_count&amp;show_faces=false&amp;width=75&amp;action=like&amp;font=trebuchet+ms&amp;colorscheme=light&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:75px; height:65px;" allowTransparency="true"></iframe></span>
			</p>
		</div>
	</div>