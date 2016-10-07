<?php
	foreach (glob("model/*.php") as $filename) {
	    include $filename;
	}

	foreach (glob("controller/*.php") as $filename) {
	    include $filename;
	}

	foreach (glob("view/*.php") as $filename) {
	    include $filename;
	}

	echo "I AZ OBICHAM MUSAKA!!!";
	echo "Ti potursi : ", ( !isset($_GET['url']) ? 'nothing' : $_GET['url']);

	$page = ( !isset($_GET['url']) ? '' : $_GET['url']);

	if (!empty($page)) {

	    $data = array(
	        'about' => array(
	        	'model' => 'AboutModel', 
	        	'view' => 'AboutView', 
	        	'controller' => 'AboutController'),
	        'portfolio' => array(
	        	'model' => 'PortfolioModel', 
	        	'view' => 'PortfolioView', 
	        	'controller' => 'PortfolioController')
	    );

	    foreach($data as $key => $components){
	        if ($page == $key) {
	            $model = $components['model'];
	            $view = $components['view'];
	            $controller = $components['controller'];
	            break;
	        }
	    }

	   	global $m, $c, $v;

	    if (isset($model)) {

	        $m = new $model( " Hey az sum Modela i vurvq perfektno!!! " );
	        $c = new $controller( $m );
	        $v = new $view( $m );
	        echo("ZDRAVEITE HORAA");	

    	    echo "<h1>" . $m->displayVar() . "</h1>";
	    	echo "<h1>" . $c->sayHello("Boyko") . "</h1>";
	    	echo "<h1>" . $v->output() . "</h1>";
	    }

	} else {
		echo "<p>you want main page!!!</p>";
	}

