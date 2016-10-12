<?php
    class IndexController {


        private $indexModel;

        public $layout;
        public $rainbow = "rainbow";

        public function __construct(){
            $_SERVER['DOCUMENT_ROOT'] = "/var/www/fb-msg-counter";
            include( $_SERVER['DOCUMENT_ROOT'] . "/model/IndexModel.php" );
            
            $this->indexModel = new IndexModel();
            $this->layout['news'] = $this->indexModel->getNews();
        }

        public function home() {
          $first_name = 'Jon';
          $last_name  = 'Snow';
          $rainbow = $this->rainbow;
          $layout = $this->layout;

          require_once('view/pages/home.php');
        }

        public function error() {
          require_once('view/pages/error.php');
        }
    }
