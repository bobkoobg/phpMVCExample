<?php
    class IndexController {
        private $indexModel;
        private $config;

        public $layout;

        public function __construct( $config, $model ){
            $this->config = $config->config;
            $this->indexModel = $model;

            $this->layout['news'] = $this->indexModel->getNews();
            $this->layout['navigation'] = $this->config['navigation'];
        }

        public function home() {
          $layout = $this->layout;
          require_once('view/pages/home.php');
        }

        public function error() {
          require_once('view/pages/error.php');
        }
    }
