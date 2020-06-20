<?php
	$fid = get_option( 'page_on_front' );
?>
<footer>
	<div class="x-container">
		<div class="flex">
			<div class="flex-item">
				<?php the_field('foot_content','options'); ?>
			</div>
			<div class="flex-item">
				<p>Síguenos:</p>
				<ul class="social-dy">
					<?php
						$social = get_field('social','options');
						foreach ($social as $s) {
							?>
					<li>
						<a href="<?php echo $s['link']; ?>" target="_blank">
							<img src="<?php echo $s['img']; ?>">
						</a>
					</li>
							<?php
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</footer>
<div class="xtrafooter">
	Bubble Perú © all Right Reserved by <a href="https://digitalcook.info">DigitalCook</a> really customization
</div>
<?php wp_footer() ?>
<script type="text/javascript">

</script>
</body>
</html>