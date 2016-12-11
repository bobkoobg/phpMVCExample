<?php
	class Config {

		public $config = [
			'real-document-root' => "/var/www/fb-msg-counter",
			'languages' => [
				'bg' => ['name' => 'BG', 'href' => '?lang=bg', 'html_classes' => 'flag-icon flag-icon-squared flag-icon-bg'],
				'en' => ['name' => 'EN', 'href' => '?lang=en', 'html_classes' => 'flag-icon flag-icon-squared flag-icon-gb'],
				'ru' => ['name' => 'RU', 'href' => '?lang=ru', 'html_classes' => 'flag-icon flag-icon-squared flag-icon-ru'],
				'nl' => ['name' => 'NL', 'href' => '?lang=nl', 'html_classes' => 'flag-icon flag-icon-squared flag-icon-nl'],
				'es' => ['name' => 'ES', 'href' => '?lang=es', 'html_classes' => 'flag-icon flag-icon-squared flag-icon-es'],
				'fr' => ['name' => 'FR', 'href' => '?lang=fr', 'html_classes' => 'flag-icon flag-icon-squared flag-icon-fr'],
				'tr' => ['name' => 'TR', 'href' => '?lang=tr', 'html_classes' => 'flag-icon flag-icon-squared flag-icon-tr']
			],
			'navigation' => [
				'Index' => ['name' => [
								'bg' => 'Начало', 
								'en' => 'Home',
								'ru' => 'Главная'
							], 'href' => '/'],
				'About' => ['name' => [
								'bg' => 'За нас', 
								'en' => 'About',
								'ru' => 'О нас'
							], 'href' => '/about'],
				'Products' => ['name' => [
								'bg' => 'Продукти', 
								'en' => 'Products',
								'ru' => 'Продукты'
							], 'href' => '/products'],
				'Contacts' => ['name' => [
								'bg' => 'Контакти', 
								'en' => 'Contacts',
								'ru' => 'Контакты'
							], 'href' => '/contacts']	
			],
			'headers' => [
				'title' => 'Sigma tlsys',
				'version' => 'v0.2.2',
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
					# Jquery
					'type' => 'text/javascript',
					'src' => 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'
					],
					[
					# Template for specific page
					'type' => 'text/javascript',
					'src' => 'view/js/'
					],
					[
					# General and core js file
					'type' => 'text/javascript',
					'src' => 'view/js/core.js'
					]
				]
			],
			'error404' => [
				'bg' => 'Грешка Номер 404 : Съдържанието не е намерено',
				'en' => 'Error Code 404 : Content not found',
				'ru' => 'Код ошибки 404: Материалы не найдены'
			]
		];

	}
