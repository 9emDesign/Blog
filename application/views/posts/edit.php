<div class="grid grid-container fluid">
	<div class="grid-x grid-padding-x">
		<div class="cell small-12 medium-9 large-9">
			<?php echo validation_errors();?>
			<h2><?php echo $title;?></h2>
			<?php echo form_open('records/update/'.$row['id']);?>
			<div class="grid-x grid-padding-x">
				<div class="cell small-12 medium-3 large-6">
				<fieldset class="fieldset">
					<input type="hidden" name="id" value="<?php echo $row['id'];?>">
				<legend>Post Form</legend>
				<label for="title">Title:<input type="text" name="title" placeholder="Robert is king" value="<?php echo $row['title'];?>"></label>
					<label for="slug">Slug:<input type="text" name="slug" placeholder="Master of universe" value="<?php echo $row['slug'];?>""
				</label>
					<label for="body">Body:<textarea  name="body" placeholder="some descriptive text">
						<?php echo $row['body'];?>
					</textarea></label>
					<label for="submit">
					<input type="submit" name="submit" class="button" value="Update post"></label>
					</fieldset>
				</div>
				</div>
			<?php echo form_close();?>

		</div>
	</div>
</div>
