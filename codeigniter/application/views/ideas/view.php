<div class="page">
	<span class="thumbnail"><a href="<?=$idea['url']?>"><img src="/uploads/<?php echo $idea['image']; ?>" alt="project thumbnail" /></a></span>
    <div class="details">
        <p><?=$idea['description']?></p>
		<h4>Instructions</h4>
        <?=$idea['instructions']?>
		<h4>Credits</h4>
        <?=$idea['credits']?>
	    <p><?=$idea['date']?></p>
    </div>
</div>
