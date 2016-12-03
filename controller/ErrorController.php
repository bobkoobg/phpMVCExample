<?php
    class ErrorController {
        private $config;
        public $layout;

        public function __construct( $config ){
            $this->config = $config->config;

            $this->layout['navigation'] = $this->config['navigation'];
            $this->layout['languages'] = $this->config['languages'];

            $userChoice = isset($_GET["lang"]) ? $_GET["lang"] : "bg";
            $this->layout['lang'] = array_key_exists($userChoice, $this->layout['languages']) ? $userChoice : "bg";
            $this->layout['page'] = ( !isset($_GET['url']) ? 'index' : $_GET['url']);
        }

        public function show() {
          $layout = $this->layout;
          require_once("view/page/bodyheader.php");
          require_once('view/page/error.php');
        }
    }
