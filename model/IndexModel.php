<?php
 class IndexModel {

 	public function __construct(){}

 	public function getSubCompanies() {
 		return [[
 				'name' => 'Crown',
 				'image' => '/view/img/crown-teaser.png'], 
 				[
 				'name' => 'Norton',
 				'image' => '/view/img/norton-teaser.png'],
 				[
 				'name' => 'Felisatti',
 				'image' => '/view/img/felisatti-teaser.png']];
 	}
 }
 