<nav class="xs-90 s-90 m-90 l-90 xl-90">
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