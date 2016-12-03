<?php
	class Config {

		public $config = [
			'real-document-root' => "/var/www/fb-msg-counter",
			'languages' => [
				'bg' => ['name' => 'BG', 'href' => '?lang=bg', 'html_classes' => 'flag-icon flag-icon-bg'],
				'en' => ['name' => 'EN', 'href' => '?lang=en', 'html_classes' => 'flag-icon flag-icon-gb']
			],
			'navigation' => [
				'Index' => ['name' => [
								'bg' => 'Начало', 
								'en' => 'Home'
							], 'href' => '/'],
				'About' => ['name' => [
								'bg' => 'За нас', 
								'en' => 'About'
							], 'href' => '/about'],
				'Products' => ['name' => [
								'bg' => 'Продукти', 
								'en' => 'Products'
							], 'href' => '/products'],
				'Contacts' => ['name' => [
								'bg' => 'Контакти', 
								'en' => 'Contacts'
							], 'href' => '/contacts']	
			],
			'headers' => [
				'title' => 'Sigma tlsys',
				'version' => 'v0.2',
				'links' => [
					[
					# Web icon
					'rel' => 'icon',
					'href' => 'view/img/logo.png',
					'type' => 'image/x-icon',
					'media' => 'screen'],
					[
					# General and core css rules
					'rel' => 'stylesheet',
					'href' => 'view/styling/css/main.css',
					'type' => 'text/css',
					'media' => 'screen'],
					[
					# Flexee responsive design
					'rel' => 'stylesheet',
					'href' => 'view/styling/css/flexee-env.css',
					'type' => 'text/css',
					'media' => 'screen'],
					[
					# Font Awesome CDN
					'rel' => 'stylesheet',
					'href' => 'view/styling/css/font-awesome.css',
					'type' => 'text/css',
					'media' => 'screen'],
					[
					# Flag Icons - flag-icon-css
					'rel' => 'stylesheet',
					'href' => 'view/styling/css/frag-icon-docs.css',
					'type' => 'text/css',
					'media' => 'screen'],
					[
					# Flag Icons - flag-icon-css
					'rel' => 'stylesheet',
					'href' => 'view/styling/css/flag-icon.css"',
					'type' => 'text/css',
					'media' => 'screen']
				],
				'scripts' => [
					[
					# Template for specific page
					'type' => 'text/javascript',
					'src' => 'view/js/'
					],
					[
					# General and core js file
					'type' => 'text/javascript',
					'src' => 'view/js/core.js'
					],
					[
					# Jquery
					'type' => 'text/javascript',
					'src' => 'http://code.jquery.com/jquery-3.1.1.min.js'
					]
				]
			],
			'error404' => [
				'bg' => 'Грешка Номер 404 : Съдържанието не е намерено',
				'en' => 'Error Code 404 : Content not found'
			]
		];

	}
