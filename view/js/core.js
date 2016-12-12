setTimeout( function() {
	function displayError( message, delay ) {
		var failure_popup_html = $(document.createElement("div"))
		.addClass("failure-message")
		.addClass("animate")
		.append (
			$(document.createElement("p"))
			.html( message )
		)
		$("body").prepend( failure_popup_html );

		setTimeout(function() {
			$('.failure-message').fadeOut(400, function() {
				$(this).remove();
			});
		}, delay);
	}

	function evaluateLoginServerResponse( data, status ) {
		console.log("data : ", data, ", err : ", status);
		var parsedData = JSON.parse(data);
		console.log("content : ", parsedData.message);
	}

	function init() {
	 	console.log("Core.js loaded...");

	 	$("#search-user-input").on('keyup', function (e) {
		    if (e.keyCode == 13) {
		        //displayError("No functionality - user input: '" + $(this).val() + "'.", 3500);

		       	$.ajax({
			        "url": "/products/search/",
			        "type": "POST",
			        "headers": {"Content-Type": "application/json"},
			        "data": JSON.stringify({'search': 'Cool stuff bro'}),
			        "success": evaluateLoginServerResponse,
			        "error": evaluateLoginServerResponse
			    });
		    }
		});
	 }

	$( window ).ready( init() );
}, 1500);


