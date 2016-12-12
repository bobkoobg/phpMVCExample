var timeoutId;

setTimeout( function() {
	function init() {
	 	console.log("Index.js loaded...");

	 	$(".sub-company-wrapper").mouseenter(
	 		function(){
	 			var currWrapper = $(this);
	 			if (!timeoutId) {
			        timeoutId = window.setTimeout(function() {
			            timeoutId = null; // EDIT: added this line
			 			currWrapper.find(".main-container").fadeOut(function() {
			 				currWrapper.find(".secondary-container").fadeIn( function () {
			 					currWrapper.find(".main-container").hide();
			 					currWrapper.find(".secondary-container").show();
			 				});
			 				
			 			});
			       }, 1000);
			    }
		    });

	 	$(".sub-company-wrapper").mouseleave(
	 		function(){
		        var currWrapper = $(this);
	 			if (timeoutId) {
			        window.clearTimeout(timeoutId);
			        timeoutId = null;
			    }
			    else {
			    	currWrapper.find(".secondary-container").fadeOut(function() {
			    		currWrapper.find(".main-container").fadeIn(function() {
			    			currWrapper.find(".main-container").show();
		 					currWrapper.find(".secondary-container").hide();
			    		});
			    	});
			    }
		    });
	}

	$( document ).ready( init() );
},1500);
