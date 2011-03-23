/* Author: Mr. Meerkat of pungle.me

*/
var vdaymsg = [];
vdaymsg[1] = 'too<br/>cool';
vdaymsg[2] = 'super<br/>pal';
vdaymsg[3] = 'hell<br/>yes';
vdaymsg[4] = 'hi<br/>2 u';
vdaymsg[5] = "all<br/>hugs";
vdaymsg[6] = 'ur<br />sweet';
vdaymsg[7] = 'miss<br/>you';
vdaymsg[8] = 'be<br/>mine';
vdaymsg[9] = 'awe<br/>some';
vdaymsg[10] = 'my<br/>hero';
vdaymsg[11] = 'xoxo';
vdaymsg[12] = 'you<br/>rock';
vdaymsg[13] = 'stay<br/>real';

function updatevday() {
	vdaywho = $("#getName").val();
	numRand = Math.floor(Math.random()*14);
	$("#valentine").html(vdaymsg[numRand]);
	$("#victim").html(vdaywho);
	$("#getUrl").val("http://pungle.me/vday/#to=" + vdaywho.replace(" ",";"));
}

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