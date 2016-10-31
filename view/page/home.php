<nav class="grid">
	<ul class="nav-container phone-1-100 phone-2-100 phone-3-100 tablet-1-100 tablet-2-100 desktop-0-100 desktop-1-100 desktop-2-100 desktop-3-100 desktop-4-100"><?php 
		foreach ($layout['navigation'] as $key => $value) {
			?><li>
				<a <?= ( $key === "Index" ? 'class="active"' : '' ) ?> 
					href="<?=$value['href']?>"><?=$value['name']?></a>
			</li><?php
		} 
	?></ul>
</nav>
<div id="index-page">
	<div class="wrapper index-wrapper">
		<div class="wrapper intro">
			<p><?= $layout['introduction']['message'] ?></p>
		</div>

		<div class="wrapper companies-wrapper">
			<div id="companies-carousel" class="owl-carousel"><?php
			 	foreach ($layout['companies'] as $key => $value) {
					?><div class="wrapper company-wrapper phone-1-90 phone-2-90 phone-3-90 tablet-1-90 tablet-2-90 desktop-0-90 desktop-1-90 desktop-2-90 desktop-3-90 desktop-4-90" data-company-id="<?=$key?>" style="background-color: <?=$value['logo-color']?> !important;">
						<div><?=$value['name']?></div>
						<div><?=$value['owner']?></div>
						<div><img class="company-image" src="<?=$value['logo']?>"></div>
						<div><?=$value['message']?></div>
					</div><?php
				}
			?></div>
		</div>

		<div class="wrapper news-wrapper"><?php 
			foreach ($layout['news'] as $key => $value) {
				?><div class="wrapper news-elem-wrapper phone-1-95 phone-2-95 phone-3-95 tablet-1-95 tablet-2-95 desktop-0-95 desktop-1-95 desktop-2-95 desktop-3-95 desktop-4-95">
					<div class="title"><?=$value['title']?></div>
					<div class="message"><?=$value['message']?></div>
					<div class="author"><?=$value['author']?></div>
					<div class="date"><?=$value['date']?></div>
				</div><?php
			} 
		?></div>
	</div>
</div>