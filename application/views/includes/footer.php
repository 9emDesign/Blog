<footer>
	<style>
		.footer {
			color: snow
		}
	</style>
	<div class="grid-x grid-padding-x align-center text-center" style="background-color:#000;margin-top:16px">
		<div class="cell small-3 medium-3 large-3 footer" style="margin-top: 16px;">
			<h5>Menu</h5>
			<ul class="menu vertical">
				<li><a href="<?php echo base_url()?>">Home</a></li>
				<li><a href="<?php echo base_url()?>posts">Posts</a></li>
				<li><a href="<?php echo base_url()?>about">About</a></li>
			</ul>
		</div>
		<div class="cell small-3 medium-3 large-3 footer" style="margin-top: 16px;">
			<h5>Legal</h5>
			<ul class="menu vertical">
				<li>Site regulations & terms</li>
				<li>Privacy policy</li>
				
			</ul>
		</div>
		<div class="cell small-3 medium-3 large-3 footer" style="margin-top: 16px;">
			<h5>Miscellaneous</h5>
			<ul class="menu vertical">
				<li>Partners</li>
			</ul>
		</div>
		<div class="cell small-12 medium-12 large-12 footer">
			<a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br /><span>This work is licensed under a</span> <a rel="license" href="http://creativecommons.org/licenses/by/4.0/" class="link">Creative Commons Attribution 4.0 International License</a>.
		</div>
	</div>
</footer>
</div>

<script src="<?php echo base_url('Foundation/assets/js/vendor.js'); ?>"></script>
<script src="<?php echo base_url('Foundation/assets/js/foundation.js'); ?>"></script>
<script src="https://kit.fontawesome.com/7657e7afb1.js" crossorigin="anonymous"></script>
<script>
	$(document).foundation();
</script>
<script
			src="https://code.jquery.com/jquery-3.6.0.min.js"
			integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			crossorigin="anonymous"
		></script>
		<script>
			var click = false;
			$("#Switch").on("click", function () {
				if (!click) {
					$('link[href*="<?php echo base_url('/Foundation/assets/css/foundation.css')?>"]').attr(
						"href",
						"<?php echo base_url('/Foundation/assets/css/dark/foundation.css')?>"
					);
					click = true;
					console.log("changed to style1.css");
				} else {
					$('link[href*="<?php echo base_url('/Foundation/assets/css/dark/foundation.css')?>"]').attr(
						"href",
						"<?php echo base_url('/Foundation/assets/css/foundation.css')?>"
					);
					click = false;
					console.log("changed to style.css");
				}
			});
		</script>
</body>

</html>
