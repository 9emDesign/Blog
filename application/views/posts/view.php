<div class="grid-x grid-padding-x">
	<div class="cell small-12 medium-12 large-10">
		<h1><?php echo $post['title']; ?></h1>
		<h3><?php echo $post['slug']; ?></h3>
		<p><?php echo $post['body']; ?></p><br>
		<hr>
		<a href="<?php echo site_url('/records/delete/' . $row['id']); ?>"><button class="button" style="margin-right: 10px;">Delete</button></a><a href="<?php echo site_url('/records/edit/' . $row['id']); ?>"><button class="button">Edit</button></a>
	</div>
	<div class="cell small-12 medium-12 large-10">
		<hr>
		<?php if($comments){?>
		 <?php foreach($comments as $comment) {?>
			<div class="callout secondary"><b><?php echo $comment['email']?></b><small> by:<?php echo $comment['name']?></small><br><?php echo $comment['comment_body']?></div>
			<?php }?>
			<?php } else {?>
				<div class="callout alert">There are no comments</div>

				<?php }?>
		<hr>
	</div>
	<div class="cell small-12 medium-12 large-5">
		<?php form_error('error', '<div class="callout alert">', '</div>');?><?php echo validation_errors();?>
		<?php echo form_open('comments/create/' . $post['id']); ?>
		<fieldset class="fieldset">
			<legend>Comments Form</legend>
			
			<label for="name">Name<input type="text" name="name" placeholder="Robert"></label>
			<label for="email">Email<input type="email" name="email" placeholder="Robert@mydomain.com"></label>
			<label for="comment_body">Body<textarea name="comment_body" placeholder="some descriptive text"></textarea></label>
			<input type="submit" name="submit" class="button" value="Submit Comment">
		</fieldset>
		<?php echo form_close(); ?>
	</div>
</div>
