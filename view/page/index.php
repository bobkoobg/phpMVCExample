<header class="grid">
	<div id="languages-bar">
		<div id="languages-bar-inner"><?php
			foreach ($layout['languages'] as $key => $value) { 
				?><a class="<?=$value['html_classes']?>" href="<?=$layout['page']?><?=$value['href']?>"></a><?php 
			}
		?></div>
	</div>
	<div id="search-bar">
		<i class="fa fa-search" aria-hidden="true"></i>
		<input id="search-user-input" hidden>
	</div>
</header>
<nav class="grid">
	<ul class="nav-container phone-1-100 phone-2-100 phone-3-100 tablet-1-100 tablet-2-100 desktop-0-100 desktop-1-100 desktop-2-100 desktop-3-100 desktop-4-100"><?php 
		foreach ($layout['navigation'] as $key => $value) {
			?><li>
				<a <?= ( $key === "Index" ? 'class="active"' : '' ) ?> 
					href="<?=$value['href']?>"><?=$value['name'][$layout['lang']]?></a>
			</li><?php
		} 
	?></ul>
</nav>
<div id="index-page">
	<div class="index-wrapper">
		<div class="sub-companies-wrapper phone-1-100 phone-2-100 phone-3-100 tablet-1-100 tablet-2-100 desktop-0-100 desktop-1-100 desktop-2-100 desktop-3-100 desktop-4-100"><?php
			foreach ($layout['sub-companies'] as $key => $value) {
				?><div style="background-image: url('<?=$value['image']?>');" class="sub-company-wrapper <?=strtolower($value['name'])?>-wrapper phone-1-33 phone-2-33 phone-3-33 tablet-1-33 tablet-2-33 desktop-0-33 desktop-1-33 desktop-2-33 desktop-3-33 desktop-4-33"></div><?php
		} ?></div>
		<!--<div>
			<div><div><b>Sub Companies</b></div><?php var_dump($layout['sub-companies']) ?></div>
			<div><div><b>Navigation</b></div><?php var_dump($layout['navigation']) ?></div>
			<div><div><b>Languages</b></div><?php var_dump($layout['languages']) ?></div>
		</div> -->
	</div>
</div>
