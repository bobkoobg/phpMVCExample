<?php
	### Load all controllers
	foreach (glob("controller/*.php") as $filename) {
	    include $filename;
	}
	foreach (glob("model/*.php") as $filename) {
	    include $filename;
	}
	include ("config.php");

	###compile scss
	require "library/scss.inc.php";

	$scss = new scssc();
	$scssIn = file_get_contents(__DIR__ . '/view/styling/scss/main.scss');
	### Set import path so that scss.inc can understand where to search scss files
	$scss->setImportPaths(__DIR__ . "/view/styling/scss/"); 
	$cssOut = $scss->compile($scssIn);
	### Fix file_put_contents permission denied : /var/www/fb-msg-counter/view$ chmod 777 css
	file_put_contents(__DIR__ . '/view/styling/css/main.css', $cssOut);

	### Find the page identifier based on url
	$page = ( !isset($_GET['url']) ? 'index' : $_GET['url']);

	### Define controller file names
	$data = [
		'index' => [
			'controller' => 'IndexController',
			'model' => 'IndexModel'],
		'about' => [
			'controller' => 'AboutController',
			'model' => 'AboutModel'],
		'products' => [
			'controller' => 'ProductController',
			'model' => 'ProductModel'],
		'contacts' => [
			'controller' => 'ContactController',
			'model' => 'ContactModel'],
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
	    $config = new Config();

		### Load headers first
		$headersController = new HeadersController( $config );
		$headersController->headers();

	    $model = new $modelComponent();
	    $controller = new $controllerComponent( $config, $model );

    	### call the action
    	$controller->{ "home" }();
	}
