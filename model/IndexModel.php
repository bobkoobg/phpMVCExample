<?php
 class IndexModel {

 	public function __construct(){}

 	public function getTest() {
 		return [
 			1 => [
 				'key1' => 'value1',
 				'key2' => 'value2'], 
 			2 => [
 				'key1' => 'value1',
 				'key2' => 'value2']
 		];
 	}
 }