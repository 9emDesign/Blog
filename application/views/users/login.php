<div class="grid-x grid-padding-x">

	<div class="cell small-12 medium-12 large-5 medium-offset-4">
		<h2><?php echo $title?></h2>
		<?php echo form_open('users/login'); ?>
		<fieldset class="fieldset">
			<legend>User Login Form</legend>
			<?php if ($this->session->flashdata('failed')) { ?>
								<div class="cell"><div class="callout alert"> <?php $this->session->flashdata('failed') ?> </div></div>
							<?php } ?>
			<label for="email">Email<input type="email" name="email" placeholder="Robert@mydomain.com" required autofocus></label>
			<label for="password">Password<input type="password" name="password" placeholder="Rob@!900"></label>
			<input type="submit" name="submit" class="button expanded" value="Login">
		</fieldset>
		<?php echo form_close(); ?>
	</div>
</div>
