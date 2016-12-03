<div id="product-page">
	<span><?= $layout['lang'] == 'en' ? 'No content' : 'Няма съдържание' ?></span><?php
	foreach ($layout['products'] as $key => $value) {
		?><div>
			<h3><?=$value['name']?></h3>
			<a href="/products/product/<?=$key?>">
				<img src="<?=$value['img-src']?>">
			</a>
		</div><?php
	}
?></div>
