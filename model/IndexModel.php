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

 	public function getCompanies() {
 		return [
 			1 => [
 				'name' => 'Company A',
 				'owner' => 'Owner A',
 				'image' => '/view/img/favicon.ico',
 				'message' => 'Company A Message'], 
			2 => [
 				'name' => 'Company B',
 				'owner' => 'Owner B',
 				'image' => '/view/img/favicon.ico',
 				'message' => 'Company B Message'], 
 			3 => [
 				'name' => 'Company C',
 				'owner' => 'Owner C',
 				'image' => '/view/img/favicon.ico',
 				'message' => 'Company C Message'], 
 			4 => [
 				'name' => 'Company D',
 				'owner' => 'Owner D',
 				'image' => '/view/img/favicon.ico',
 				'message' => 'Company D Message'], 
 		];
 	}
 }