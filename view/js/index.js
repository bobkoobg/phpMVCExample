setTimeout( function() {
	function init() {
	 	console.log("Index.js loaded...");

	 	$(".sub-company-wrapper").mouseenter(
	 		function(){
	 			var currWrapper = $(this);
		    	console.log("ON HOVER IN", $(this));
	 			currWrapper.find(".main-container").fadeOut();
	 			currWrapper.find(".secondary-container").fadeIn();
		    });

	 	$(".sub-company-wrapper").mouseleave(
	 		function(){
		    	var currWrapper = $(this);
		    	console.log("ON HOVER OUT", $(this));
		    	currWrapper.find(".main-container").fadeIn();
	 			currWrapper.find(".secondary-container").fadeOut();
		    });
	}

	$( document ).ready( init() );
},1500);
