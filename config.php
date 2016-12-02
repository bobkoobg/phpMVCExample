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
			]
		];

	}
