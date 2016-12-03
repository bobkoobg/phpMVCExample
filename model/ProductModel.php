<?php
 class ProductModel {

 	private $exampleProducts =	[
		['name' => 'Fancy drill 1',
		'img-src' => 'http://www.bigtool.ru/netcat_files/multifile/2428/06019c5001.jpg'],
		['name' => 'Fancy drill 2',
		'img-src' => 'http://tashev-galving.com/images/items/008%20ETS%20009.jpg'],
		['name' => 'Fancy drill 3',
		'img-src' => 'http://www.praktiker.bg/medias/sys_master/h2e/ha6/9715606126622.jpg']];

 	public function __construct(){}

 	public function exampleProducts() {
 		return $this->exampleProducts;
 	}

 	public function getProductById( $id ) {
 		return $this->exampleProducts[$id];
 	}

 }
 