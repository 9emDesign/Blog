<div class="grid grid-container fluid">
	<div class="grid-x grid-padding-x">
		<div class="cell small-12 medium-9 large-9">
			<?php echo validation_errors();?>
			<h2><?php echo $title;?></h2>
			<?php echo form_open();?>
			<div class="grid-x grid-padding-x">
				<div class="cell small-12 medium-3 large-6">
					<div class="cell small-12 medium-6 large-6">
						<?php if ($this->session->flashdata('success')) { ?>
								<div class="cell"><div class="callout success"> <?= $this->session->flashdata('success') ?> </div></div>
							<?php } ?>
					</div>
				<fieldset class="fieldset">
				<legend>Post Form</legend>
				<select name="categories">
					<label for="Category">
						<?php foreach($categories as $row){?>
					<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
					<?php } ?>
				</select>
				</label>
				<label for="title">Title:<input type="text" name="title" placeholder="Robert is king"></label>
					<label for="slug">Slug:<input type="text" name="slug" placeholder="Master of universe"></label>
					<label for="body">Body:<textarea  name="body" placeholder="some descriptive text"></textarea></label>
					<label for="submit">
					<input type="submit" name="submit" class="button" value="Submit post"></label>
					</fieldset>
				</div>
				</div>
			<?php echo form_close();?>

		</div>
	</div>
</div>
