<?php
class AboutModel {
    public $tstring;

    public $var = 'a default value';

    public function __construct( $var ){
        $this->var = $var;
    }

    // method declaration
    public function displayVar() {
        return $this->var;
    }
}