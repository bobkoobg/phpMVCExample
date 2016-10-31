<nav>
	<div class="grid">
		<div class="nav-container phone-2-90 phone-1-90 phone-3-90 tablet-1-90 tablet-2-90 desktop-0-90 desktop-1-90 desktop-2-90- desktop-3-90 desktop-4-90"><?php 
			foreach ($layout['navigation'] as $key => $value) {
				?><a href="<?=$value['href']?>"><?=$value['name']?></a><?php
			} 
		?></div>
	</div>
</nav>
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

<div class="grid">
			<div class="m50" style="height: 100px; background-color: green;">
				<div class="box"></div>
			</div>
			<div class="m50">
				<div class="box"></div>
			</div>
</div>

<div id="content">

	<div class="corset">

		<div class="grid">
			<div class="m50">
				<div class="box"></div>
			</div>
			<div class="m50">
				<div class="box"></div>
			</div>
		</div><!-- .row -->

		
		<div class="divider"></div>

		
		<div class="grid">
			<div class="xs100 m50">
				<div class="box"></div>
			</div>
			<div class="xs100 m50">
				<div class="box"></div>
			</div>
		</div><!-- .row -->

		
		<div class="divider"></div>

		
		<div class="grid">
			<div class="xs20 s40 m50 l60 xl80">
				<div class="box"></div>    
			</div><div class="xs80 s60 m50 l40 xl20">
				<div class="box"></div>    
			</div>
		</div><!-- .row -->

		
		<div class="divider"></div>

		
		<div class="grid">
			<div class="xs100 l25">
				<div class="box"></div>  
			</div>
			<div class="l25 hide-xs">
				<div class="box"></div>  
			</div>
			<div class="l25 hide-xs">
				<div class="box"></div>  
			</div>
			<div class="l25 hide-xs">
				<div class="box"></div>  
			</div>
		</div><!-- .row -->

		
		<div class="divider"></div>

		
		<div class="grid">
			<div class="xs50 l20">
				<div class="box"></div>  
			</div>
			<div class="xs50 l20">
				<div class="box"></div>  
			</div>
			<div class="xs33 l20">
				<div class="box"></div>  
			</div>
			<div class="xs34 l20">
				<div class="box"></div>  
			</div>
			<div class="xs33 l20">
				<div class="box"></div>  
			</div>
		</div><!-- .row -->

		
		<div class="divider"></div>

		
		<div class="grid">
			<div class="xs100 s25 m50 l75 xl50 hide-xs">
				<div class="box"></div>
			</div>
			<div class="xs100 s75 m50 l25 xl50">
				<div class="box"></div>
			</div>
		</div><!-- .row -->

		
		<div class="divider"></div>

		
		<div class="grid">
			<div class="xs100 s25 m50 l75 xl50">
				<div class="box"></div>
			</div>
			<div class="xs100 s75 m50 l25 xl50">
				<div class="box"></div>
			</div>
		</div><!-- .row -->

		
		<div class="divider"></div>

		
		<div class="grid">
			<div class="xs100 s25 m50 l75 xl50">
				<div class="box"></div>
			</div>
			<div class="xs100 s75 m50 l25 xl50">
				<div class="box"></div>
			</div>    
		</div><!-- .row -->

		
		<div class="divider"></div>

		
		<div class="grid">
			<div class="hide show-xs">
				<div class="box"></div>
			</div>
			<div class="hide show-xs">
				<div class="box"></div>
			</div>
		</div><!-- .row -->
		
	</div><!--corset-->

</div> 
