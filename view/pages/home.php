<?php include("nav.php"); ?>
<span>Hello there : </span>
<h1><?= $first_name ?></h1>
<p>You successfully landed on the home page. Congrats!</p>
<h1><?= $last_name ?></h1>
<span><?= $rainbow ?></span>

<?php foreach ($layout['news'] as $key => $value) {
	?><div>
		<div><?=$value['title']?></div>
		<div><?=$value['message']?></div>
		<div><?=$value['author']?></div>
		<div><?=$value['date']?></div>
	</div><?php
} ?>
