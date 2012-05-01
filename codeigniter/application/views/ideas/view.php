<div class="page">
	<span class="thumbnail">
		<img src="/uploads/<?=$idea['image']?>" alt="project thumbnail" />
	</span>
	<?php if ( $this->tank_auth->is_logged_in() ): ?>
	<span class="icons"><a href="/gallery/idea_edit/<?=$idea['id']?>/"><img src="/assets/images/icons/edit.png" alt="edit <?=$idea['name']?>" /></a></span>
	<?php endif ?>
	<div class="details">
		<p><?=$idea['description']?></p>
		<?php if($idea['details']):?>
		<h4>Details</h4>
		<p><?=$idea['details']?></p>
		<?php endif?>
		<div id="instructions">
		<h4>Instructions</h4>
		<?=$idea['instructions']?>
		</div>
		<?php if ($idea['url']):?>
		<a class="button try" href="<?=$idea['url']?>">Try live demo</a>
		<?endif?>
		<h4>Credits</h4>
		<?=$idea['credits']?>
	</div>
</div>
