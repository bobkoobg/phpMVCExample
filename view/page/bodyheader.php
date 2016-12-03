<header class="grid">
	<div id="languages-bar">
		<div id="languages-bar-inner"><?php
			foreach ($layout['languages'] as $key => $value) { 
				?><div class="language-icon-holder" <?=$key == $layout['lang'] ? 'style=" float: right; margin-right: 10px; "' : 'hidden' ?>>
					<a class="<?=$value['html_classes']?>" href="<?=$layout['page']?><?=$value['href']?>"></a>
				</div><?php 
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
				<a <?= ( strtolower($key) === strtolower($layout['page']) ? 'class="active"' : '' ) ?> 
					href="<?=$value['href']?>"><?=$value['name'][$layout['lang']]?></a>
			</li><?php
		} 
	?></ul>
</nav>
