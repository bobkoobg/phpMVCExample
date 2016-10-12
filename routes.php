<?php
	### Load all controllers
	foreach (glob("controller/*.php") as $filename) {
	    include $filename;
	}
	foreach (glob("model/*.php") as $filename) {
	    include $filename;
	}
	include ("config.php");

	### Find the page identifier based on url
	error_log("*D:DEBUG* $get url is : " . $_GET['url'] );
	$page = ( !isset($_GET['url']) ? 'index' : $_GET['url']);
	error_log("*B:DEBUG*: page is : ". $page);

	### Define controller file names
	$data = [
		'index' => [
			'controller' => 'IndexController',
			'model' => 'IndexModel']
	];

	### Find the specific Controller file names based on the page identifier
	$controllerComponent;
	$modelComponent;		
	foreach($data as $key => $components){
	    if ($page == $key) {
	    	$modelComponent = $components['model'];
	        $controllerComponent = $components['controller'];
	        break;
	    }
	}

	### Create new instances of the chosen Model, View and Controller
	$controller;
	$model;
	if ( isset( $controllerComponent ) && isset( $modelComponent ) ) {
	    $model = new $modelComponent();
	    $config = new Config();
	    $controller = new $controllerComponent( $config, $model );

    	### call the action
    	$controller->{ "home" }();
	}
