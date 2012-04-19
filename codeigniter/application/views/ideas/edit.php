<div class="page">
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('/gallery/idea_edit/' . $idea['id'] . '/'); ?>
	<input type="hidden" id="id" name="id" value="<?=$idea['id']?>" /><br />

	<label for="name">Name</label>
	<input name="name" id="name" value="<?=$idea['name']?>" /><br />

	<label for="slug">Slug</label>
	<input id="slug" name="slug" value="<?=$idea['slug']?>" /><br />

	<label for="description">Description</label>
	<textarea rows="5" cols="50" id="description" name="description"><?=$idea['description']?></textarea><br />

	<label for="url">URL</label>
	<input id="url" name="url" value="<?=$idea['url']?>" /><br />

	<label for="instructions">Instructions</label>
	<textarea rows="10" cols="50" name="instructions" id="instructions"><?=$idea['instructions']?></textarea><br />

	<label for="credits">Credits</label>
	<textarea rows="10" cols="50" id="credits" name="credits"><?=$idea['credits']?></textarea><br />
	
	<label for="image">Image</label>
	<input id="image" name="image" type="file" /><br />

	<input type="submit" name="submit" value="Save" /> 
</form>
</div>