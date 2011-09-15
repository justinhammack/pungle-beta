var pungleBKMRKLT = (function ($) {

    // creates a callback to execute after loading a resource
    function loadScript(url, callback) {
        
        var head = document.getElementsByTagName("head")[0];
        var script = document.createElement("script");
        script.src = url;
        
        // Attach handlers for all browsers
        var done = false;
        
        script.onload = script.onreadystatechange = function() {
            
            if( !done && ( !this.readyState || this.readyState == "loaded" || this.readyState == "complete") ) {
                
                done = true;
                
                // Continue your code
                callback();
                
                // Handle memory leak in IE
                script.onload = script.onreadystatechange = null;
                head.removeChild( script );
                
            }
        };
        
        head.appendChild(script);
        
    }
    
    // load database & execute code
    loadScript("http://localhost/core/pungleJSON.js", function() {
        var fileref=document.createElement("link");
        fileref.setAttribute("rel", "stylesheet");
        fileref.setAttribute("type", "text/css");
        fileref.setAttribute("href", "http://localhost/core/pungleBKMRKLT.css");
        document.getElementsByTagName("head")[0].appendChild(fileref);
        
        alert(pungleJSON.store[1].name);
        alert(pungleBKMRKLTSavedStores);
    });

}(jQuery));