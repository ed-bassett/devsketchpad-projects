<div class="page">
	<span class="thumbnail">
		<?php if ($idea['url']):?><a href="<?=$idea['url']?>"><?endif?>
			<img src="/uploads/<?=$idea['image']?>" alt="project thumbnail" />
		<?php if ($idea['url']):?></a><?endif?>
	</span>
	<div class="details">
		<p><?=$idea['description']?></p>
		<?php if($idea['details']):?>
		<h4>Details</h4>
		<p><?=$idea['details']?></p>
		<?php endif?>
		<h4>Try it</h4>
		<?=$idea['instructions']?>
		<h4>Credits</h4>
		<?=$idea['credits']?>
	</div>
</div>
