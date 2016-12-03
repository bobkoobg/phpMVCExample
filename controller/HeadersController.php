<?php
	class HeadersController {

	    private $headersModel;
	    private $config;
	    public $layout;
		
		public function __construct( $config ){
			$this->config = $config->config;

			$page = ( !isset($_GET['url']) ? 'index' : $_GET['url']);
			
			$this->layout['context'] = $page;
			$this->layout['headers'] = $this->config['headers'];
		}

		public function headers() {
	    	$layout = $this->layout;
			require_once('view/page/head.php');
	    }
	}
