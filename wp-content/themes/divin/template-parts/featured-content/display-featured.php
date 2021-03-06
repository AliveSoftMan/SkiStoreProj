<?php
/**
 * The template for displaying featured content
 *
 * @package Divin
 */
?>

<?php
$enable_content = get_theme_mod( 'divin_featured_content_option', 'disabled' );

if ( ! divin_check_section( $enable_content ) ) {
	// Bail if featured content is disabled.
	return;
}


$divin_title     = get_option( 'featured_content_title', esc_html__( 'Contents', 'divin' ) );
$sub_title = get_option( 'featured_content_content' );
$layout    = get_theme_mod( 'divin_featured_content_layout', 'layout-three' );
?>

<div id="featured-content-section" class="section">
	<div class="section-wrapper">
		<?php if ( '' !== $divin_title || $sub_title ) : ?>
			<div class="section-heading-wrapper featured-section-headline">
				<?php if ( '' !== $divin_title ) : ?>
					<div class="section-title-wrapper">
						<h2 class="section-title"><?php echo wp_kses_post( $divin_title ); ?></h2>
					</div><!-- .page-title-wrapper -->
				<?php endif; ?>

				<?php if ( $sub_title ) : ?>
					<div class="taxonomy-description-wrapper">
						<?php echo wp_kses_post( $sub_title ); ?>
					</div><!-- .taxonomy-description-wrapper -->
				<?php endif; ?>
			</div><!-- .section-heading-wrapper -->
		<?php endif; ?>

		<div class="section-content-wrapper featured-content-wrapper <?php echo esc_attr( $layout ); ?>">

			<?php
			$featured_posts = divin_get_featured_posts();

			foreach ( $featured_posts as $post ) {
				setup_postdata( $post );

				// Include the featured content template.
				get_template_part( 'template-parts/featured-content/content', 'featured' );
			}

			wp_reset_postdata();
			?>
		</div><!-- .featured-content-wrapper -->
	</div><!-- .wrapper -->
</div><!-- #featured-content-section -->
