<nav class="xs-90 s-90 m-90 l-90 xl-90"><?php 
	foreach ($layout['navigation'] as $key => $value) {
		?><a href="<?=$value['href']?>"><?=$value['name']?></a><?php
	} 
?></nav>
<p>You successfully landed on the home page. Congrats!</p>
<div>
<?php foreach ($layout['news'] as $key => $value) {
		?><div>
			<div><?=$value['title']?></div>
			<div><?=$value['message']?></div>
			<div><?=$value['author']?></div>
			<div><?=$value['date']?></div>
		</div><?php
	} 
?></div>
