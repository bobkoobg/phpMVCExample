<?php

	### Load all controllers
	foreach (glob("controller/*.php") as $filename) {
	    include $filename;
	}

	### Find the page identifier based on url
	$page = ( !isset($_GET['url']) ? 'index' : $_GET['url']);
	error_log("*B:DEBUG*: page is : ". $page);

	### Define controller file names
	$data = [
		'index' => ['controller' => 'IndexController'],
	];

	### Find the specific Controller file names based on the page identifier
	$controller;		
	foreach($data as $key => $components){
	    if ($page == $key) {
	        $controller = $components['controller'];
	        break;
	    }
	}

	### Create new instances of the chosen Model, View and Controller
	$c;
	if (isset($controller)) {
	    $c = new $controller();

    	### call the action
    	$c->{ "home" }();
	}


