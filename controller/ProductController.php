<?php
    class ProductController {
        private $productModel;
        private $config;

        public $layout;

        public function __construct( $config, $model ){
            $this->config = $config->config;
            $this->productModel = $model;

            $this->layout['navigation'] = $this->config['navigation'];
            $this->layout['languages'] = $this->config['languages'];

            $userChoice = isset($_GET["lang"]) ? $_GET["lang"] : "bg";
            $this->layout['lang'] = array_key_exists($userChoice, $this->layout['languages']) ? $userChoice : "bg";
            $this->layout['page'] = ( !isset($_GET['url']) ? 'index' : $_GET['url']);
        }

        public function show() {
            $this->layout['products'] = $this->productModel->exampleProducts();

            $layout = $this->layout;
            require_once("view/page/bodyheader.php");
            require_once('view/page/product.php');
        }

        public function product( $id ) {
            $this->layout['product'] = $this->productModel->getProductById( $id );

            $layout = $this->layout;
            require_once("view/page/bodyheader.php");
            require_once("view/page/specificProduct.php");
        }

        public function search() {
            if(isset($_POST['search'])) {
                print_r("KAJI WE BRAT");
            }else {
                print_r("NOPE");
            }
            echo json_encode([
                'status' => '200',
                'message' => 'HelloWorld!'
            ]);
        }
    }
