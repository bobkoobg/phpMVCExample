<head>  
	<title><?= $layout['headers']['title']?> <?= $layout['headers']['version'] ?></title>

	<?php foreach ($layout['headers']['links'] as $key => $value) {
		?><link rel="<?=$value['rel']?>" href="<?=$value['href']?>" type="<?=$value['type']?>" media="<?=$value['media']?>"/><?php
	} ?>

	<?php foreach ($layout['headers']['scripts'] as $key => $value) {
		?><script type="<?=$value['type']?>" src="<?=$key == 1 ? $value['src'] . $layout['context'] . '.js' : $value['src']?>"></script><?php
	} ?>
</head>