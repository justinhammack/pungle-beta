// pungle.me shopping app scripts (only load on index)


/* pungle revealing module pattern */
var pungle = (function ($) {
	
	// namespace variables
	var storeOrder = [0,29,115,9,4,5]; // default store order if no cookie or hash
	var imagePath = '/images/'; // set path for images (can swap with CDN)
	var imageStoresPath = '/data/stores/'; // set path for images (can swap with CDN)
	var cookieStore = 'storeorder'; // cookie to hold the user specified store order

	// set up pungle & overview for use
	function init() {
		
		// use CSS for image properties.. background and object sizes image_props.png, one object for all properties (handle, deal, no deal, normal i, social good i)
		
		// create all stores object
		$('#allStoresAccordion').accordion({
			autoHeight: false,
			collapsible: false,
			// active: false,
			clearStyle: true
		});
		
		// create linked sortable lists after data is loaded (does order matter?)
		$("#ulOverview").sortable({
			opacity: 0.6,
			revert: 100,
			// scroll: false,
			tolerance: 'pointer',
			helper: 'clone',
			placeholder: 'storePlaceHolder',			
			handle: '.storeButtonUtility',
			update: function() { $.cookie(cookieStore, $("#ulOverview").sortable("toArray"), { expires: 365, path: "/" }); /*$.pungleUpdateURL();*/ }
		});
		
		// setup clear store button
		$("#buttonClearStores").button({
            icons: { primary: "ui-icon-document-b" }
        }).click(function() { 
        	clearStores();
    	});
		
    	// setup restore defaults button
    	$("#buttonRestoreDefaults").button({
            icons: { primary: "ui-icon-refresh" }
        }).click(function() { 
        	restoreDefaults();
    	});
    	
		// we're going to handle the all store list during the ajax call
		$.ajax({url: '/data/pungle.json', dataType: 'json', success: function(data){
			
			var htmlStore = ''; // blank variable to hold HTML
			var todaysDate = new Date(); // we'll need to check for expiring deals
			
			$('#allStores').empty(); // clear overview (just in case)
			
			// parse the database
			$.each(data.store, function(entryIndex, entry) {
				
				// is the store live?
				if(entry['live']){
					// setup the list object
					htmlStore = '<li><a href="' + entry['link'] + '" target="_blank" title="' + entry['desc'] + '">' + entry['name'] + '</a>';
					
					// check if they are an affiliate or not
					if(entry['aff']) htmlStore += '<span class="pungleRedIcon ui-icon ui-icon-heart" title="Social good is enabled."></span>';
					
					// check if there are any deals
					if(entry['deals'] && (entry['deals'] != '')){
						$.each(entry['deals'], function(dealsIndex, deals){
							var startsDate = new Date(deals['starts']);
							var expiresDate = new Date(deals['expires']);
							
							// check if the deal is current
							if(startsDate <= todaysDate && expiresDate > todaysDate) htmlStore += '<a href="' + deals['link'] + '" title="' + deals['what'] + '" target="_blank"><span class="pungleBlueIcon ui-icon ui-icon-tag"></span></a>';							
						});
					}
					
					// add / remove store should be a funciton call! (to simplify scalability, not that list objects are modified..)
					htmlStore += '<span id="listS' + entry['id'] + '" class="addStore pungleBlueIcon ui-icon ui-icon-plusthick" title="Add Store to Overview"></span>';
					
					// add store to accordion
					$('#allStores').append(htmlStore);
					
					// event to add store to overview
					$("#listS" + entry['id']).click(function () {
						pungle.modStoreOverview(entry['id'], 1);
					});
				}
			});			
			
			// import all the stores to overview
			getStoreOrder();
			
		}}); // end ajax call
		
	}
	
	// modify store to overview
	// remAdd 0 to remove, 1 to add
	// we might need to have the ability to pass an array to this function..	
	function modStoreOverview(storeIDs, remAdd) {
		
		if (remAdd != 0 && remAdd != 1) return;
		
		// going to need to open the json file - should be cached
		$.ajax({url: '/data/pungle.json', dataType: 'json', success: function(data){
			
			var htmlStore = ''; // blank variable to hold HTML
			var todaysDate = new Date(); // we'll need to check for expiring deals			
			var storeIndex; // variable to hold json index position
			var storeIDArray = []; // create array object, which we'll pass to funciton
			
			// we need to check to see if we were passed an array or a singleton
			// else then convert a single variable into an array
			if($.isArray(storeIDs) == false) storeIDArray[0] = storeIDs;
			else storeIDArray = storeIDs;			
			
			// $.each(storeIDArray, function(storeIDIndex, storeIDValue){
			// we are going to go through the array manually
			for ( var i=0, len=storeIDArray.length; i<len; ++i ) {
			
				storeIndex = null; // reset the variable to null
				
				// search the json array for matching id so we know the index #
				for( var item in data.store ) {
					if( data.store[item]['id'] == storeIDArray[i]) {
	            		storeIndex = item;
	            		break; // assume first found wins            
	        		}
	    		}
	    		
	    		// check if store is live
	    		if (storeIndex!=null && data.store[storeIndex]['live']){
	    			
		    		// are we adding a store? make sure we actually found the index #
		    		if (remAdd==1) {
		    			
		    			htmlStore = '<li id="pS' + data.store[storeIndex]['id'] + '" class="storeButton">';
		    			htmlStore += '<a href="' + data.store[storeIndex]['link'] + '" title="' + data.store[storeIndex]['desc'] + '" target="_blank"><img class="storeLink" src="' + imageStoresPath + data.store[storeIndex]['img'] + '" /></a>';
		    			htmlStore += '<span class="storeButtonUtility">';
		    			htmlStore += '<span class="ui-icon ui-icon-arrow-4" title="Drag & Drop"></span>';
		    			htmlStore += '</span>';
		    			htmlStore += '<span class="storeButtonBottom">';
		    			
		    			// check if they are an affiliate or not
						if(data.store[storeIndex]['aff']) htmlStore += '<span class="pungleRedIcon ui-icon ui-icon-heart" title="Social good is enabled."></span>';
						
		    			if(data.store[storeIndex]['deals'] && (data.store[storeIndex]['deals'] != '')){
							$.each(data.store[storeIndex]['deals'], function(dealsIndex, deals){
								var startsDate = new Date(deals['starts']);
								var expiresDate = new Date(deals['expires']);
							
								// check if the deal is current
								if(startsDate <= todaysDate && expiresDate > todaysDate) htmlStore += '<a href="' + deals['link'] + '" title="' + deals['what'] + '" target="_blank"><span class="pungleBlueIcon ui-icon ui-icon-tag"></span></a>';							
							});
						}						
		    				
						htmlStore += '</span>';
		    			htmlStore += '</li>';
		    			
		    			// add the store to the page!
		    			$('#ulOverview').append(htmlStore);
		    			
		    			// adjust the all stores button +/-
		    			htmlStore = '<span id="listS' + data.store[storeIndex]['id'] + '" class="addStore pungleRedIcon ui-icon ui-icon-minusthick" title="Remove Store from Overview"></span>';
		    			$('#listS' + data.store[storeIndex]['id']).replaceWith(htmlStore);
		    			(function(data) {	    				
	    					$("#listS" + data).click(function () {
		    					pungle.modStoreOverview(data, 0);
	    					});
	    				})(data.store[storeIndex]['id']);
		    			
		    		}
		    		
		    		// otherwise we are removing a store.. still need to make sure we have index #
		    		else {
		    			
		    			// remove the store from the overview
		    			$('#pS' + data.store[storeIndex]['id']).remove();
		    			
		    			// adjust the all stores button +/- htmll
		    			htmlStore = '<span id="listS' + data.store[storeIndex]['id'] + '" class="addStore pungleBlueIcon ui-icon ui-icon-plusthick" title="Add Store to Overview"></span>';
		    			$('#listS' + data.store[storeIndex]['id']).replaceWith(htmlStore);
		    			
		    			// rebind the click
		    			$("#listS" + data.store[storeIndex]['id']).click(function () { pungle.modStoreOverview(data.store[storeIndex]['id'], 1); });
		    		}	    		
		    		
	    		}
    		
	    	} // end of each statement, all stores adjusted
	    	
    		// update the cookie with the new order
    		$.cookie(cookieStore, $("#ulOverview").sortable("toArray"), { expires: 365, path: "/" });
    		
    		// update the store order variable
    		updateStoreOrder();
    		
    		// update the custom url
    		// updateURL();
			
		}}); // end ajax
	}
	
	// passes ids to injector for dom clicks
	/* function shopNow(storeID, dealID) {
		if (storeID!=null && storeID!="" && dealID==null) { // store click-through (no deal ref)
			window.open("http://" + window.location.hostname + "/injector.php#Store=" + storeID);
		}
		else if (storeID!=null && storeID!="" && dealID!="") { // deal click-through
			window.open("http://" + window.location.hostname + "/injector.php#Store=" + storeID + "&Deal=" + dealID);
		}
		else { alert("Store is unbound.. (no linky)"); } // no idea why its not bound to anything, wtf? ok, error thrown
	} */
	
	// check & load the store order variable to build the overview
	function getStoreOrder() {
		
		var cStore = $.cookie(cookieStore); // fetch the cookie if it exists for store order
		
		// logic: check hash, then cookie, else keep default store order
		if ($.url.param("s") && $.url.param("s") != ' ') {
			
			storeOrder = $.url.param("s").split(";"); // get the store order in the URL hash
			
			$.each(storeOrder, function(hashIndex, hashValue) {
				
				if (isNaN(hashValue)) { 
					
					alert('This custom URL is malformed. (ew!) No worries, pungle to the rescue!'); // who is trying to hijack pungle!?
					window.location.hash = "#"; // clear that hash
					window.location.reload(); // flip her over
					
				}
				
				// else { storeOrder[hashIndex] = 'pS' + hashValue; }
				
			});
			
			$.cookie(cookieStore, storeOrder, { expires: 365, path: "/" }); // save imported hash as cookie
			
		}
		
		// set storeOrder to cookie
		else if (cStore) { 
			
			storeOrder = cStore.split(",");
			
			$.each(storeOrder, function(hashIndex, hashValue) {
				
				storeOrder[hashIndex] = hashValue.replace("pS", "");
				
			});			
			
		} 
		
		// add the store objects to overview		
		
		modStoreOverview(storeOrder, 1);
		
		window.location.hash = "#"; // we made it this far, clear that hash!
	}
	
	// update the variable store order
	function updateStoreOrder() {
		storeOrder = $("#ulOverview").sortable("toArray");
			
		$.each(storeOrder, function(hashIndex, hashValue) {
			
			storeOrder[hashIndex] = hashValue.replace("pS", "");
			
		});		
	}
	
	// adds hook to bookmark this page if possible
	function addFavorite() {
		if (window.sidebar){ window.sidebar.addPanel(document.title, document.url,"");}
		else if (window.external){ window.external.AddFavorite(document.url,document.title); } 
		else{ alert("Sorry! Your browser doesn't support this function."); }
	}
	
	// this clears off the overview for the user and resets the cookie
	function clearStores() {
		modStoreOverview(storeOrder, 0);
		$.cookie(cookieStore, null, {path: "/"}); // clear the cookie
		window.location.hash = "#"; // just to be safe we clear any hash
	}
	
	// resets the cookie and reloads the page
	function restoreDefaults() {
		$.cookie(cookieStore, null, {path: "/"}); // clear the cookie
		window.location.hash = "#"; // just to be safe we clear any hash
		window.location.reload();
	}
	
	// updates the html for current charity and stores in overview
	function updateURL() {
		var customURL = "http://" + window.location.hostname + "&s="; // build URL for hash update
		// var storeArray = $("#ulOverview").sortable("toArray");
		$.each($("#ulOverview").sortable("toArray"), function(index, value) {
			if (index == 0) { customURL += parseInt(value.substring(2), 10); }
			else { customURL += ";" + parseInt(value.substring(2), 10); }
		});
		
		// $("#getUrl").val(customURL);
		$("#getUrl").html(customURL);
	}
	
	return {
		init:init,		
		modStoreOverview:modStoreOverview
		// test_wonder:test_wonder
	}
}(jQuery));


/* hash link parse $.url.param(">variable<")modified from: http://ajaxcssblog.com/jquery/url-read-get-variables/ */
(function ($) {
	$.url = {};
	$.extend($.url, {
		_params: {},
		init: function(){
			var paramsRaw = "";
			try{
				paramsRaw = 
					(window.location.hash.substring(1) || "").split("#")[0].split("&") || [];
				for(var i = 0; i< paramsRaw.length; i++){
					var single = paramsRaw[i].split("=");
					if(single[0])
						this._params[single[0]] = unescape(single[1]);
				}
			}
			catch(e){
				alert(e);
			}
		},
		param: function(name){
			return this._params[name] || "";
		},
		paramAll: function(){
			return this._params;
		}
	});
	$.url.init();
})(jQuery);


/**
 * Create a cookie with the given name and value and other optional parameters.
 *
 * @example $.cookie('the_cookie', 'the_value');
 * @desc Set the value of a cookie.
 * @example $.cookie('the_cookie', 'the_value', { expires: 7, path: '/', domain: 'jquery.com', secure: true });
 * @desc Create a cookie with all available options.
 * @example $.cookie('the_cookie', 'the_value');
 * @desc Create a session cookie.
 * @example $.cookie('the_cookie', null);
 * @desc Delete a cookie by passing null as value. Keep in mind that you have to use the same path and domain
 *       used when the cookie was set.
 *
 * @param String name The name of the cookie.
 * @param String value The value of the cookie.
 * @param Object options An object literal containing key/value pairs to provide optional cookie attributes.
 * @option Number|Date expires Either an integer specifying the expiration date from now on in days or a Date object.
 *                             If a negative value is specified (e.g. a date in the past), the cookie will be deleted.
 *                             If set to null or omitted, the cookie will be a session cookie and will not be retained
 *                             when the the browser exits.
 * @option String path The value of the path atribute of the cookie (default: path of page that created the cookie).
 * @option String domain The value of the domain attribute of the cookie (default: domain of page that created the cookie).
 * @option Boolean secure If true, the secure attribute of the cookie will be set and the cookie transmission will
 *                        require a secure protocol (like HTTPS).
 * @type undefined
 *
 * @name $.cookie
 * @cat Plugins/Cookie
 * @author Klaus Hartl/klaus.hartl@stilbuero.de
 */

/**
 * Get the value of a cookie with the given name.
 *
 * @example $.cookie('the_cookie');
 * @desc Get the value of a cookie.
 *
 * @param String name The name of the cookie.
 * @return The value of the cookie.
 * @type String
 *
 * @name $.cookie
 * @cat Plugins/Cookie
 * @author Klaus Hartl/klaus.hartl@stilbuero.de
 */
jQuery.cookie = function(name, value, options) {
	if (typeof value != 'undefined') { // name and value given, set cookie
		options = options || {};
		if (value === null) {
			value = '';
			options.expires = -1;
		}
		var expires = '';
		if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
			var date;
			if (typeof options.expires == 'number') {
				date = new Date();
				date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
			} else {
				date = options.expires;
			}
			expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
		}
		// CAUTION: Needed to parenthesize options.path and options.domain
		// in the following expressions, otherwise they evaluate to undefined
		// in the packed version for some reason...
		var path = options.path ? '; path=' + (options.path) : '';
		var domain = options.domain ? '; domain=' + (options.domain) : '';
		var secure = options.secure ? '; secure' : '';
		document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
	} else { // only name given, get cookie
		var cookieValue = null;
		if (document.cookie && document.cookie != '') {
			var cookies = document.cookie.split(';');
			for (var i = 0; i < cookies.length; i++) {
				var cookie = jQuery.trim(cookies[i]);
				// Does this cookie string begin with the name we want?
				if (cookie.substring(0, name.length + 1) == (name + '=')) {
					cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
					break;
				}
			}
		}
		return cookieValue;
	}
};