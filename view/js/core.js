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

	function init() {
	 	console.log("Core.js loaded...");

	 	$("#search-user-input").on('keyup', function (e) {
		    if (e.keyCode == 13) {
		       displayError("No functionality - user input: '" + $(this).val() + "'.", 3500);
		    }
		});
	 }

	$( window ).ready( init() );
}, 1500);


