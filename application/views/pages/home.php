
<div class="grid-y medium-grid-frame ">
  <div class="cell medium-auto medium-cell-block-container">
    <div class="grid-x grid-padding-x">
      <div class="cell medium-2 medium-cell-block-y" style="background-color: #dabaa2;">
        <h3>Quick links</h3>
        <ul class="menu vertical">
			<li><a href="<?php echo base_url('records/create')?>">Create new post</a></li>
			<li><a href="<?php echo base_url('users/register')?>">Sign-up new user</a></li>
			<li><a href="#">link 2</a></li>
		</ul>
      </div>
      <div class="cell medium-10 medium-cell-block-y">
        <div class="grid-x grid-padding-x">
			<div class="cell medium-8" style="float:left;height:400px;overflow:hidden;">
				
			<img src="<?php echo base_url('assets/image/relax-home.jpg')?>" alt=""></div>
					<div class="cell medium-4">
						<?php foreach ($home as $row) { ?>
				<div class="cell auto" style="height:125px;"><h4><?php echo $row['title'];?></h4><p style="margin-bottom: 30px;font-size:.9em"><?php echo word_limiter($row['body'],15);?></p>
			</div>
			
			<a class="button tiny secondary" href="<?php echo site_url('posts/view/' . $row['id']); ?>">Read more about <?php echo $row['title'] ?></a>

				
				

			            <?php } ?>
						
			</div>
		</div>
		<hr>
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell medium-4">
					<div class="card" style="height: 350px;">
					  <div class="card-section">
						<img src="<?Php echo base_url('assets/image/relax-book.jpg')?>" alt="">
					  </div>
					  <div class="card-section">
						<p>This is a simple card with an image inside a `.card-section`.</p>
					  </div>
					</div>
				</div>

					<div class="cell medium-4">
					<div class="card" style="height: 350px;">
					  <div class="card-section">
						<img src="<?Php echo base_url('assets/image/relax-tablet.jpg')?>" alt="">
					  </div>
					  <div class="card-section">
						<p>This is a simple card with an image inside a `.card-section`.</p>
					  </div>
					</div>
				</div>

					<div class="cell medium-4">
					<div class="card" style="height: 350px;">
					  <div class="card-section">
						<img src="<?Php echo base_url('assets/image/relax-laptop.jpg')?>" alt="">
					  </div>
					  <div class="card-section">
						<p>This is a simple card with an image inside a `.card-section`.</p>
					  </div>
					</div>
				</div>
				
				
			</div>
		</div>

		<hr>

				<div class="grid-x grid-padding-x">
						<div class="cell medium-5">
						<div class="cell auto" style="height:33%;"><h4>Article</h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit perspiciatis ab facilis et alias non eaque suscipit obcaecati, cumque tempore?</div>
						<div class="cell auto" style="height:33%;"><h4>Article</h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit perspiciatis ab facilis et alias non eaque suscipit obcaecati, cumque tempore?</div>
						<div class="cell auto" style="height:33%;"><h4>Article</h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit perspiciatis ab facilis et alias non eaque suscipit obcaecati, cumque tempore?</div>
					</div>
					<div class="cell medium-7" style="float:right;;height:400px;overflow:hidden"><img src="<?Php echo base_url('assets/image/relax-coffee.jpg')?>" alt=""></div>
		        </div>
      </div>
    </div>
  </div>
  </div>

