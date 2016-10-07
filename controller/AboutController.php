<?php

class AboutController {
	
	private $model;

	public function __construct( $model ){
        $this->model = $model;
    }

    public function sayHello( $name ) {
    	return "Hello " . $name . " I am your AboutController!!!";
    }
}