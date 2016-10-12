<?php
 class IndexModel {

 	public function __construct(){}

 	public function getNews() {
 		return [
 			1 => [
 				'title' => 'Welcome to the webpage',
 				'message' => 'The message for the intro news',
 				'author' => 'admin',
 				'date' => '23rd Jan 2016'], 
 			2 => [
 				'title' => 'I am becoming pro',
 				'message' => 'at everything I do, so beware PLZ',
 				'author' => 'Gabriele',
 				'date' => '24th Jan 2016']
 		];
 	}
 }