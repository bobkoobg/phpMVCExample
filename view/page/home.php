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
		
	</div>
</div>