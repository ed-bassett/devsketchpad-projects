<?php
$odd_row = true;
foreach ($ideas as $idea):
	$odd_row = !$odd_row;
?>
<div class="page<?php echo $odd_row ? ' odd' : '' ?>">
	<span class="thumbnail"><a href="/gallery/<?=$idea['slug']?>"><img src="/uploads/<?php echo $idea['image']; ?>" alt="project thumbnail" /></a></span>
	<div class="details">
		<h3><a href="/gallery/<?=$idea['slug']?>"><?=$idea['name']?></a></h3>
		<p><?=$idea['description']?></p>
		<h4>Credits</h4>
		<?=$idea['credits']?>
	</div>
</div>
<?php endforeach ?>

