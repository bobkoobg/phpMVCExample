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
            $this->layout['companies'] = $this->indexModel->getCompanies();
        }

        public function home() {
          $layout = $this->layout;
          require_once('view/page/home.php');
        }

        public function error() {
          require_once('view/page/error.php');
        }
    }
