<div class="grid grid-container fluid">
	<div class="grid-x grid-padding-x">
		<div class="cell small-12 medium-9 large-9">
			<h2>Your latest posts</h2>
			
			<?php foreach ($post as $row) { ?>
				<h3><?php echo $row['title']; ?></h3>
				<h5><?php echo $row['slug']; ?></h5>
				<div class="callout small secondary"><small>Posted on: <strong><?php echo $row['created_at']; ?></strong></small></div>
				<p><?php echo word_limiter($row['body'], 25); ?></p>
				<div><a class="button secondary" href="<?php echo site_url('/posts/' . $row['id']); ?>">Read more about <?php echo $row['title'] ?></a></div>


			<?php } ?>

		</div>
	</div>
</div>
