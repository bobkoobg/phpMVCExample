<?php
	class HeadersController {
	   	private $config;
	    public $layout;
		
		public function __construct( $config, $isExisting ){
			$this->config = $config->config;

			# if the url is not set or the page is not existing
			$page = ( !isset($_GET['url']) || !$isExisting ? 'index' : $_GET['url']);
			$actualPage = explode("/", $page)[0];
			
			$this->layout['context'] = $actualPage;
			$this->layout['headers'] = $this->config['headers'];
		}

		public function show() {
	    	$layout = $this->layout;
			require_once('view/page/head.php');
	    }
	}
