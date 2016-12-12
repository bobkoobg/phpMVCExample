<?php
	//Future database implementation
	//require_once('connection.php');

	### Load layout 
	if( $_GET['url'] == 'products/search/') {
		require_once('routes.php');
	} else {
		require_once('view/layout.php');
	}