// pungle.me shopping app scripts (only load on index)

/* pungle revealing module pattern */
var pungle = (function ($) {
	
	
    // namespace variables
	var storeOrder = [];
	var storeOrderDefault = [0,140,115,114,84,5]; // default store order if no cookie or hash
	var imagePath = '/images/'; // set path for images (can swap with CDN)
	var imageStoresPath = 'http://c190157.r57.cf1.rackcdn.com/'; // set path for images (can swap with CDN)
	var cookieStore = 'storeorder'; // cookie to hold the user specified store order
    var cookieCause = 'cause'; // cookie to hold the user specified cause
	
	// set up pungle & overview for use
	function init() {
		
		// use CSS for image properties.. background and object sizes image_props.png, one object for all properties (handle, deal, no deal, normal i, social good i)
		
		var htmlStore = ''; // blank variable to hold HTML		
		var causeID = getCauseID(); // check cause Id
		
		// create linked sortable lists after data is loaded (does order matter?)
		$("#ulOverview").sortable({
			opacity: 0.6,
			revert: 100,
			// scroll: false,
			tolerance: 'pointer',
			// helper: 'clone',
			placeholder: 'storePlaceHolder',			
			// handle: '.storeButtonUtility',
			update: function() { $.cookie(cookieStore, $("#ulOverview").sortable("toArray"), { expires: 365, path: "/" }); updateStoreOrder(); }
		});
		
		// setup cause radio buttons
		$( "#causeRadio" ).buttonset();
		
		// setup drop down menu
		$('select#dropList').selectmenu();
        
		// setup check boxes for affiliate / favorites
		$('#storeCheckbox').buttonset(); 
		
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
		
		// parse the database, setup all stores
		$.each(pungleJSON.store, function(entryIndex, entry) {
			
			// is the store live?
			if(entry['live']){				
			    
			    // setup the list object				
				htmlStore = '<tr><th><a href="/inject/#id=' + entry['id'] + '&c=' + causeID + '" target="_blank" title="' + entry['name'] + '">' + entry['name'] + '</a></th>';
				htmlStore += '<td>' + entry['desc'] + '<span class="hidden">';
			    
				$.each(entry['tags'], function(tagsIndex, tags) {
				    htmlStore += 'c' + tags + '|';
				});
				
			    htmlStore += '</span></td><td>';
			    
				// check if they are an affiliate or not
				if(entry['aff']) htmlStore += '<div class="afflImage" title="High impact shopping enabled!">AFFL</div>';
				
				htmlStore += '</td>';				
				
				// add / remove store should be a funciton call! (to simplify scalability, not that list objects are modified..)
				htmlStore += '<td><div id="listS' + entry['id'] + '"  class="favNoImage" title="Add/remove your favorites!"></div></td></tr>';
				
				// add store to accordion
				$('#allStores').append(htmlStore);
				
				// event to add store to overview
				$("#listS" + entry['id']).click(function () {
				    pungle.modStoreOverview(entry['id']);				    
				});				
				
			}
		});			
		
		// setup quick search
		qsStores = $('input#storeSearch').quicksearch('table tbody tr', {
            noResults: '#noresults',
			stripeRows: ['odd', 'even']
        });
	    
        // bind quick search update to all fields
        $('select#dropList,input#tagFav,input#tagAffl').bind('change', function() {
            qsStores.sorted();
        });
        
        // import all the stores to overview
		getStoreOrder();
		
		$("input[name=radio]").click(function() {
		   pungle.causeUpdate();
		});
	}
	
	
	// modify store to overview	
	// we might need to have the ability to pass an array to this function..	
	function modStoreOverview(storeID) {
		
	    // if the store is already favorited
		if ( jQuery.inArray(storeID, storeOrder) > -1 ) {
		    
		    // remove the store from the overview
        	$('#pS' + storeID).remove();
        	
        	// adjust the list fav icon
        	$('#listS' + storeID).removeClass('favImage').addClass('favNoImage').empty();
        	
		}
		
		// else search db and add as favorite
		else {
		    
		    var htmlStore = ''; // blank variable to hold HTML
		    var causeID = $("input[name=radio]:checked").val(); // get cause ID
		    
    		// loop to search database for store's unique ID
    		for ( var i=0, len=pungleJSON.store.length; i<len; ++i ){
    		    
    		    // else found ID is not a favorite yet
    		    if( pungleJSON.store[i].id == storeID && pungleJSON.store[i].live == true ) {
    		        
    		        // build the button for the overview
    		        htmlStore = '<li id="pS' + pungleJSON.store[i].id + '" class="storeButton">';
        			htmlStore += '<a href="/inject/#id=' + pungleJSON.store[i].id + '&c=' + causeID + '" title="' + pungleJSON.store[i].desc + '" target="_blank"><img class="storeLink" src="' + imageStoresPath + pungleJSON.store[i].img + '" /></a>';
        			htmlStore += '<span class="storeButtonUtility">';
        			htmlStore += '<span class="ui-icon ui-icon-close" title="Remove Store"></span>';
        			htmlStore += '</span>';
        			// htmlStore += '<span class="storeButtonBottom">';        			
        			// htmlStore += '</span>';
        			htmlStore += '</li>';        			
        			
        			$('#ulOverview').append(htmlStore);
        			
    		        // adjust the list fav icon
        	        $('#listS' + storeID).removeClass('favNoImage').addClass('favImage').html('FVS');
        	        
        	        // add remove button
        	        $('#pS' + pungleJSON.store[i].id + ' .storeButtonUtility').click(function() {
        	            pungle.modStoreOverview(pungleJSON.store[i].id);
        	        });
        	        
    		        // if we're here, we found it, no need to search the rest of the DB
    		        break;
    		    }
    		}
    		
	    }
		
		// update the cookie with the new order
		$.cookie(cookieStore, $("#ulOverview").sortable("toArray"), { expires: 365, path: "/" });
		
		// update the store order variable
		updateStoreOrder();
		
		// update the sort table
		qsStores.cache();
		
	}
	
	
	// passes ids to injector for dom clicks
	function shopNow(storeID, causeID) {
		
	    var storeLINK = null;
	    var storeTIMER = 2500;
	    
	    var storeFound = false;	    
	    var storeHtml = 'uhm.. yeah. store not found. our bad?<br/><br/><a href="http://pungle.me/">go back to pungle.me</a><br/><br/>';
	    
	    // set the cause icon & add buttons
        if (causeID >= 0 && causeID <= 6) {}
        else { causeID = 0; }
        
	    var causes = ["ca_emp_ico64x64.png","ca_water_ico64x64.png","ca_tech_ico64x64.png","ca_nature_ico64x64.png","ca_edu_ico64x64.png","ca_vacc_ico64x64.png","ca_energy_ico64x64.png"];
	    
	    var noCause = "";
	    
	    for ( var i=0, len=pungleJSON.store.length; i<len; ++i ){
    		// else found ID is not a favorite yet
    	    if( pungleJSON.store[i].id == storeID && pungleJSON.store[i].live == true ) {
    	        storeFound = true;    	        
    	        storeLINK = pungleJSON.store[i].link;
    	        
    	        if(pungleJSON.store[i].aff === true) {
    	            storeHtml = '<h3>' + pungleJSON.store[i].name + ' is social good enabled!</h3>';
    	            storeHtml += '<p><span class="yourCause">Your Cause:</span></p>';
    	            storeHtml += '<p><img src="/images/' + causes[causeID] + '" width="64" height="64" /></p><br/>';
    	            $.ajax({ type: "POST", url: "/include/pushvote.php", data: "c=" + causeID });
    	        }
    	        else {
    	            storeHtml = '<h3>' + pungleJSON.store[i].name + '</h3>';
    	            storeHtml += '<p><span class="yourCause">Social Good is in negotiations..</span></p>';
    	            storeHtml += '<p><img src="/images/ca_nothing_ico64x64.png" width="64" height="64" /></p><br/>';
    	            storeTIMER = 3750;
    	        }
    	        
    	        // found, break out
    	        break;
    	    }    	    
    	}
    	
    	if (storeFound == true) $("#pungleSteps").html(storeHtml);
    	
    	else $("#pungleSteps").html(storeHtml);
    	
    	return {storeLINK:storeLINK, storeTIMER:storeTIMER};
	}
	
	
	// check & load the store order variable to build the overview
	function getStoreOrder() {
		
		var cStore = $.cookie(cookieStore); // fetch the cookie if it exists for store order
		var storeOrderImport = [];
		
		// logic: check hash, then cookie, else keep default store order
		/* if ($.url.param("s") && $.url.param("s") != ' ') {
			
		    // BROKEN CAN'T CHANGE STOREORDER VARIABLE
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
			
		} */
		
		// set storeOrder to cookie
		if (cStore) { 
			
		    var cArrayStore = cStore.split(",");
			
			$.each(cArrayStore, function(hashIndex, hashValue) {
				
				storeOrderImport[hashIndex] = parseInt(hashValue.replace("pS", ""));
				
			});			
			
		}
		
		else storeOrderImport = storeOrderDefault;
		
		$.each(storeOrderImport, function(hashIndex, hashValue) {
		   modStoreOverview(hashValue); 
		});		
		
		window.location.hash = "#"; // we made it this far, clear that hash!
	}
	
	
	// check for causeID
	function getCauseID() {
	    var cCause = $.cookie(cookieCause); // fetch the cause cookie if it exists
	    
	    // set cause to cookie
		if (cCause && cCause >= 0 && cCause <= 6) {
		    $("input[name=radio]:checked").attr('checked', false);
		    $("input[value='" + cCause + "']").attr('checked', true);
		    $( "#causeRadio" ).buttonset("refresh");
		}
		
		return $("input[name=radio]:checked").val();
	}
	
	
	// update the variable store order
	function updateStoreOrder() {
		var storeOrderString = $("#ulOverview").sortable("toArray");		
		
		storeOrder.length = 0;
		
		$.each(storeOrderString, function(hashIndex, hashValue) {
			
			storeOrder[hashIndex] = parseInt(hashValue.replace("pS", ""));
			
		});
		
		// update the custom url (should just attach it to the above function?)
		updateBookmarklet();
		
	}
	
	
	// adds hook to bookmark this page if possible
	function addFavorite() {
		if (window.sidebar){ window.sidebar.addPanel(document.title, document.url,"");}
		else if (window.external){ window.external.AddFavorite(document.url,document.title); } 
		else{ alert("Sorry! Your browser doesn't support this function."); }
	}
	
	
	// this clears off the overview for the user and resets the cookie
	function clearStores() {
		
	    var storeOrderClear = $("#ulOverview").sortable("toArray");
		
		$.each(storeOrderClear, function(hashIndex, hashValue) {
			
		    modStoreOverview(parseInt(hashValue.replace("pS", "")));
			
		});
	    
		// storeOrder.length = 0; // verify storeOrder empty
		$.cookie(cookieStore, null, {path: "/"}); // clear the cookie
		window.location.hash = "#"; // just to be safe we clear any hash
	}
	
	
	// resets the cookie and reloads the page
	function restoreDefaults() {
		$.cookie(cookieStore, null, {path: "/"}); // clear the cookie
		window.location.hash = "#"; // just to be safe we clear any hash
		window.location.reload();
	}
	
	
	// add cause link to a.href 
	function causeUpdate() {
	    var causeID = $("input[name=radio]:checked").val();
	    $('.storeButton a, #allStores tr th a').each(function() {
	        var html = $(this).attr('href').replace(/&c=[0-9]/, '');
	        $(this).attr('href', html + '&c=' + causeID);
	    });
	    $.cookie(cookieCause, causeID, { expires: 365, path: "/" });
	    updateBookmarklet();
	}
	
	
	// updates the html for current charity and stores in overview
	function updateBookmarklet() {
		/* var customURL = "http://" + window.location.hostname + "&s="; // build URL for hash update
		// var storeArray = $("#ulOverview").sortable("toArray");
		$.each($("#ulOverview").sortable("toArray"), function(index, value) {
			if (index == 0) { customURL += parseInt(value.substring(2), 10); }
			else { customURL += ";" + parseInt(value.substring(2), 10); }
		});
		
		// $("#getUrl").val(customURL);
		$("#getUrl").html(customURL); */
		
		/* var benalmanScript = 'javascript:(function(e,a,g,h,f,c,b,d){if(!(f=e.jQuery)||g>f.fn.jquery||h(f)){c=a.createElement("script");c.type="text/javascript";c.src="http://ajax.googleapis.com/ajax/libs/jquery/"+g+"/jquery.min.js";c.onload=c.onreadystatechange=function(){if(!b&&(!(d=this.readyState)||d=="loaded"||d=="complete")){h((f=e.jQuery).noConflict(1),b=1);f(c).remove()}};a.documentElement.childNodes[0].appendChild(c)}})(window,document,"1.3.2",function($,L){pungleBKMRKLTSavedStores=[' + storeOrder + '];var jsCodePungleBKMRKLT=document.createElement("script");jsCodePungleBKMRKLT.setAttribute("src","http://localhost/core/pungleBKMRKLT.js");document.body.appendChild(jsCodePungleBKMRKLT);});'; */
		var bookHeight = 140 + (48 * Math.ceil(storeOrder.length / 3));
		var causeID = $("input[name=radio]:checked").val();
		
		var pungleScript = "javascript:(function(){var w=510,h=" + bookHeight + ",l=Math.round((screen.width-w)/2),t=Math.round((screen.height-h)/2),d=document,s=w.getSelection?w.getSelection():d.title;if(s=='')s=d.title;window.ft=window.open('http://" + document.domain + "/bookmarklet/#id=" + storeOrder + "&c=" + causeID + "','','left='+l+',top='+(t>0?t:0)+',width='+w+',height='+h+',personalbar=0,toolbar=0,scrollbars=0,resizable=1');})();";
		
		// $('#pungleBookmarklet').replaceWith(insertBookmarklet);
		$('#pungleBookmarklet').attr('href', pungleScript);
		
	}
	
	
	// builds the bookmarklet page
	function bookmarklet() {
	    
	    var storesBookmarklet = $.url.param("id").split(",");
	    var causeID = $.url.param("c");
	    var buttonHtml = '';
	    var causes = ["EMP","POT","TEC","NAT","EDU","VAC","CLE"];
	    
	    pungleAutocomplete = new Array();
	    var countComplete = 0;
	    
        for(var i=0; i<pungleJSON.store.length; i++){
            if (pungleJSON.store[i].live == true) { 
                pungleAutocomplete[countComplete] = { value:pungleJSON.store[i].id, label:pungleJSON.store[i].name }; 
                countComplete++;
            }
        }
	    
        // set the cause icon & add buttons
        if (causeID >= 0 && causeID <= 6) {}
        else { causeID = 0; }
        
        $("#causeIcon").addClass(causes[causeID]);
        $("#causeIcon").attr("href","/cause-portfolio/#" + causes[causeID]);
        
	    // loop to search database for store's unique ID
    	$.each(storesBookmarklet, function(hashIndex, hashValue) {
    	    
	    	for ( var i=0, len=pungleJSON.store.length; i<len; ++i ){
    		    
    		    // else found ID is not a favorite yet
    		    if( pungleJSON.store[i].id == hashValue && pungleJSON.store[i].live == true ) {
    		        
    		        buttonHtml += '<a class="dribbble';
    		        
    		        if( pungleJSON.store[i].name.length > 14) { buttonHtml += ' smallButton'; }
    		        
    		        buttonHtml += '" href="/inject/#id=' + pungleJSON.store[i].id + '&c=' + causeID + '" title="' + pungleJSON.store[i].desc + '" target="_blank">' + pungleJSON.store[i].name + '</a>';
    		        
        			// if we're here, we found it, no need to search the rest of the DB
    		        break;
    		        
    		    }
    		    
    		}
    		
    	});
    	
    	$('#bookmarkletButtons').html(buttonHtml);
		
    	$(".dribbble, #addRemoveStores, #storeBtn, #mbpRating, #causeIcon").click(function() { window.close(); });
    	
    	$( "#quickSearch" ).autocomplete({
			source: pungleAutocomplete,
			minLength: 2,
			autoFocus: true,
			select: function(event, ui) {
			    window.open('http://' + document.domain + '/inject/#id=' + ui.item.value + '&c=' + causeID);
			    window.close();
			}
		});
	}
	
	
	return {
		init:init,
		clearStores:clearStores,
		shopNow:shopNow,
		bookmarklet:bookmarklet,
		modStoreOverview:modStoreOverview,
		causeUpdate:causeUpdate
	}
}(jQuery));


/* hash link parse $.url.param(">variable<") modified from: http://ajaxcssblog.com/jquery/url-read-get-variables/ */
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