<?php require("header.php"); ?>

	<!-- dynamic content -->
	<div class="sub_container"><form>
		
		<!-- pick a charity -->
		<div id="selectedcharity">Social Good: <a href="#" title="Click to find out how the pungle social good program works." class="pickacharity" >Charity-of-the-Month</a></div>
		
		<!-- 1. Pick a Store -->
		<div id="store">
			<div class="punglesteps">The only bookmark you need for shopping online. <span style="font-size: 18px; font-weight: normal;">(<a href="#" class="howitworks" title="pungle is the perfect blend of savvy shopping and social good. Leverage its power to find the best deals online while making a measurable difference in the world. 100% free, no registration.">details</a>)</span></div><div style="clear:both"></div>
			<ul id="ulStoreList" class="connectedSortable">
			</ul>
		</div>

		<div style="clear:both"></div>

		<!-- vie all stores -->
		<div id="allstore" style="width: 1100px; margin: 20px auto;">
			<h3><a href="#">View All Stores</a></h3>
			<ul id="ulAllStoreList" class="connectedSortable">
			</ul>
		</div>
		
		<div style="clear:both"></div>
		
		<!-- floating buttons -->
		<div class="likeusmmkay"><iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2FpungleDOTorg&amp;layout=box_count&amp;show_faces=false&amp;width=75&amp;action=like&amp;font=trebuchet+ms&amp;colorscheme=light&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:75px; height:65px;" allowTransparency="true"></iframe></div>
		<div class="BookmarkPungle"><img src="images/bookmark.png" title="Don't forget to add us to your favorites! Some browsers may need help. CTRL-D" /></div>
		<div class="share"><img src="images/fb_tellyourfriends.gif" /></div>
		<div class="RestoreDefaults"><img src="images/suggest.gif" title="WARNING: This will delete your settings." /></div>
		<div class="pGetUrl"><img src="images/link.png" style="vertical-align: middle;" title="Share your pungle setup with this link, just copy/paste it into a browser."> <b>Link</b> <input type="text" id="getUrl" value="http://pungle.org"/></div>
		
	</form></div>
	<!-- end dynamic content -->

<?php require("footer.php"); ?>