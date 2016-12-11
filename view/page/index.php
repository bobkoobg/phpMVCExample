<div id="index-page">
	<div class="index-wrapper">
		<div id="sub-companies-wrapper"><?php
			foreach ($layout['sub-companies'] as $key => $value) {
				?><div class="sub-company-wrapper phone-1-33 phone-2-33 phone-3-33 tablet-1-33 tablet-2-33 desktop-0-33 desktop-1-33 desktop-2-33 desktop-3-33 desktop-4-33" data-company-type="<?=strtolower($value['name'])?>">
					<div class="main-container phone-1-100 phone-2-100 phone-3-100 tablet-1-100 tablet-2-100 desktop-0-100 desktop-1-100 desktop-2-100 desktop-3-100 desktop-4-100" style="background-image: url('<?=$value['image']?>');"></div>
					<div class="secondary-container" hidden>
						<p>Content goes here</p>
					</div>
				</div><?php
		} ?></div>
	</div>
</div>
