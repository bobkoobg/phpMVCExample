<?php
    class IndexController {
        private $indexModel;
        private $config;

        public $layout;

        public function __construct( $config, $model ){
            $this->config = $config->config;
            $this->indexModel = $model;

            $this->layout['sub-companies'] = $this->indexModel->getSubCompanies();

            $this->layout['navigation'] = $this->config['navigation'];
            $this->layout['languages'] = $this->config['languages'];
            $this->layout['nav-page'] = ( !isset($_GET['url']) ? 'index.php' : $_GET['url']);

            $userChoice = isset($_GET["lang"]) ? $_GET["lang"] : "bg";
            $this->layout['lang'] = array_key_exists($userChoice, $this->layout['languages']) ? $userChoice : "bg";
            $this->layout['page'] = ( !isset($_GET['url']) ? 'index' : $_GET['url']);

        }

        public function show() {
          $layout = $this->layout;
          require_once("view/page/bodyheader.php");
          require_once("view/page/index.php");
        }
    }
