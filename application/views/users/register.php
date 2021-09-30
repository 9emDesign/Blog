<div class="grid-x grid-padding-x">
	<div class="cell small-12 medium-12 large-5">
		<h2><?php echo $title?></h2>
		<?php form_error('error', '<div class="callout alert">', '</div>');?><?php echo validation_errors();?>
		<?php echo form_open(); ?>
		<fieldset class="fieldset">
			<legend>New Sign-up Form</legend>
			<?php if ($this->session->flashdata('success')) { ?>
								<div class="cell"><div class="callout success"> <?= $this->session->flashdata('success') ?> </div></div>
							<?php } ?>
			<label for="name">Name<input type="text" name="name" placeholder="Robert"></label>
			<label for="address">Address<input type="text" name="address" placeholder="Kaya Arana #22"></label>
			<label for="email">Email<input type="email" name="email" placeholder="Robert@mydomain.com"></label>
			<label for="username">Username<input type="text" name="username" placeholder="Robert74"></label>
			<label for="password">Password<input type="password" name="password" placeholder="Rob@!900"></label>
			<label for="confirm_password">Confirm Password<input type="password" name="confirm_pass" placeholder="Rob@!900"></label>
			<input type="submit" name="submit" class="button" value="Sign-up">
		</fieldset>
		<?php echo form_close(); ?>
	</div>
</div>
