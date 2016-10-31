<?php
 class IndexModel {

 	public function __construct(){}

 	public function getIntroduction() {
 		return [
 			'message' => 'Welcome to "Da-da-da" Company! text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text '
 		];
 	}

 	public function getNews() {
 		return [
 			1 => [
 				'title' => 'Welcome to the webpage',
 				'message' => 'Welcome message for the index page page page page',
 				'author' => 'Author',
 				'date' => '25th Jan 2016'], 
 			2 => [
 				'title' => 'News B',
 				'message' => 'News B Message Message Message Message Message',
 				'author' => 'Author',
 				'date' => '24th Jan 2016'], 
			3 => [
 				'title' => 'News C',
 				'message' => 'News C Message Message Message Message Message',
 				'author' => 'Author',
 				'date' => '23rd Jan 2016'], 
			4 => [
 				'title' => 'News D',
 				'message' => 'News D Message Message Message Message Message',
 				'author' => 'Author',
 				'date' => '22nd Jan 2016'], 
			5 => [
 				'title' => 'News E',
 				'message' => 'News E Message Message Message Message Message',
 				'author' => 'Author',
 				'date' => '21st Jan 2016'], 
			6 => [
 				'title' => 'News F',
 				'message' => 'News F Message Message Message Message Message',
 				'author' => 'Author',
 				'date' => '20th Jan 2016'], 
			7 => [
 				'title' => 'News G',
 				'message' => 'News G Message Message Message Message Message',
 				'author' => 'Author',
 				'date' => '19th Jan 2016'],
 			8 => [
 				'title' => 'News H',
 				'message' => 'News H Message Message Message Message Message',
 				'author' => 'Author',
 				'date' => '18th Jan 2016'], 
			9 => [
 				'title' => 'News I',
 				'message' => 'News I Message Message Message Message Message',
 				'author' => 'Author',
 				'date' => '17th Jan 2016'], 

 		];
 	}

 	public function getCompanies() {
 		return [
 			1 => [
 				'name' => 'Company A',
 				'owner' => 'Owner A',
 				'logo' => '/view/img/favicon.ico',
 				'message' => 'Company A Message',
 				'logo-color' => '#ff0000'],
			2 => [
 				'name' => 'Company B',
 				'owner' => 'Owner B',
 				'logo' => '/view/img/favicon.ico',
 				'message' => 'Company B Message',
 				'logo-color' => '#008000'],
 			3 => [
 				'name' => 'Company C',
 				'owner' => 'Owner C',
 				'logo' => '/view/img/favicon.ico',
 				'message' => 'Company C Message', 
 				'logo-color' => '#0000ff'],
 			4 => [
 				'name' => 'Company D',
 				'owner' => 'Owner D',
 				'logo' => '/view/img/favicon.ico',
 				'message' => 'Company D Message', 
 				'logo-color' => '#ffa500'],
			5 => [
 				'name' => 'Company E',
 				'owner' => 'Owner E',
 				'logo' => '/view/img/favicon.ico',
 				'message' => 'Company E Message',
 				'logo-color' => '#ff0000'],
			6 => [
 				'name' => 'Company F',
 				'owner' => 'Owner F',
 				'logo' => '/view/img/favicon.ico',
 				'message' => 'Company F Message',
 				'logo-color' => '#008000'],
			7 => [
 				'name' => 'Company G',
 				'owner' => 'Owner G',
 				'logo' => '/view/img/favicon.ico',
 				'message' => 'Company G Message', 
 				'logo-color' => '#0000ff'],
 		];
 	}
 }