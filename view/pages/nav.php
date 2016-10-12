<nav>
<?php 
	$content = [
		'Index' => ['name' => 'Home', 'href' => '/index.php'],
		'Portfolio' => ['name' => 'Portfolio', 'href' => '/portfolio.php'],
		'Contacts' => ['name' => 'Contacts', 'href' => '/contacts.php']	
	];
	
	foreach ($content as $key => $value) {
		?><a href="<?=$value['href']?>"><?=$value['name']?></a><?php
	}
?>
</nav>