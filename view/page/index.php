<div id="index-page">
	<div class="index-wrapper">
		<div class="sub-companies-wrapper"><?php
			foreach ($layout['sub-companies'] as $key => $value) {
				?><div style="background-image: url('<?=$value['image']?>');" class="sub-company-wrapper <?=strtolower($value['name'])?>-wrapper phone-1-33 phone-2-33 phone-3-33 tablet-1-33 tablet-2-33 desktop-0-33 desktop-1-33 desktop-2-33 desktop-3-33 desktop-4-33"></div><?php
		} ?></div>
	</div>
</div>
