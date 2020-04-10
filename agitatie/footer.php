<footer id='stek-voet' class='stek-voet'>
	<div class='verpakking logo-en-tekst'>
		<div class='neg-marge'>
		<?php

		do_action('ag_footer_voor_velden_action');

		$voet_velden = get_field('footervelden', 'option'); if ($voet_velden and count($voet_velden)) :

			foreach ($voet_velden as $v) :

				if (array_key_exists('titel', $v) and $v['titel'] !== '' ) {
					echo "<section  class='footer-section'>
						<h3>{$v['titel']}</h3>
						".apply_filters('the_content', $v['veld'])."
					</section>";
				} else {
					echo "<div class='footer-section'>
						".apply_filters('the_content', $v['veld'])."
					</div>";
				}

			endforeach;

		endif;

		do_action('ag_footer_na_velden_action');

		?>
		</div>
	</div>

	<?php

	do_action('ag_footer_widget_action');

	get_template_part('sja/footer/colofon'); ?>

</footer>

<script>
var BASE_URL = "<?=SITE_URI?>",
	TEMPLATE_URL = "<?=THEME_URI?>",
	IMG_URL = "<?=IMG_URI?>",
	AJAX_URL = BASE_URL + "/wp-admin/admin-ajax.php";
</script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
