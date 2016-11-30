<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package thim
 */
?>
<section class="error-404 not-found">
	<div class="page-content">
		<img src="<?php echo esc_url(get_template_directory_uri() . '/images/404.png'); ?>" alt="404 Page" />
		<h3> <?php esc_html_e( 'Sorry, we couldn\'t find the page you\'re looking for.', 'sailing' ) ?> </h3>
 	</div>
	<!-- .page-content -->
</section>