<?php
	#To run this file open a bash terminal and write 'php cssCompiler.php'
	#Purpose - compule all changeable SCSS files to CSS

	#Fix - file_put_contents permission denied - /var/www/fb-msg-counter/view$ chmod 777 css

	require "../library/scss.inc.php";

	$scss = new scssc();

	print_r("Compiling FROM SCSS File : '" . __DIR__ . "/../view/styling/scss/flexee/flexee.scss'\n");
	print_r("Compiling TO CSS File : '" . __DIR__ . "/../view/styling/css/flexee-env.css'\n");

	$scssIn = file_get_contents(__DIR__ . '/../view/styling/scss/flexee/flexee.scss');
	$cssOut = $scss->compile($scssIn);
	file_put_contents(__DIR__ . '/../view/styling/css/flexee-env.css', $cssOut);

	print_r("Compiled...\n");

	print_r("Compiling FROM SCSS File : '" . __DIR__ . "../view/styling/scss/main.scss'\n");
	print_r("Compiling UNCLUDES ALL SCSS Files in : '" . __DIR__ . "/../view/styling/scss/'\n");
	print_r("Compiling TO CSS File : '" . __DIR__ . "'/../view/styling/css/main.css'\n");

	$scss = new scssc();
	$scssIn = file_get_contents(__DIR__ . '/../view/styling/scss/main.scss');
	#Must - Set import path so that scss.inc can understand where to search scss files
	$scss->setImportPaths(__DIR__ . "/../view/styling/scss/"); 
	$cssOut = $scss->compile($scssIn);
	file_put_contents(__DIR__ . '/../view/styling/css/main.css', $cssOut);

	print_r("Compiled...\nDone.\n");
	