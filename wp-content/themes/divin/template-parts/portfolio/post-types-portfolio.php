<?php
/**
 * The template for displaying portfolio items
 *
 * @package Divin
 */
?>

<?php
$number = get_theme_mod( 'divin_portfolio_number', 3 );

if ( ! $number ) {
	// If number is 0, then this section is disabled
	return;
}

$post_list = array();

$no_of_post = 0; // for number of posts

$args = array(
	'orderby'             => 'post__in',
	'ignore_sticky_posts' => 1 // ignore sticky posts
);

$args['post_type'] = 'jetpack-portfolio';

for ( $i = 1; $i <= $number; $i++ ) {
	$divin_post_id =  get_theme_mod( 'divin_portfolio_cpt_' . $i );

	if ( $divin_post_id && '' !== $divin_post_id ) {
		$post_list = array_merge( $post_list, array( $divin_post_id ) );

		$no_of_post++;
	}
}

$args['post__in'] = $post_list;

if ( 0 === $no_of_post ) {
	return;
}

$args['posts_per_page'] = $no_of_post;
$loop = new WP_Query( $args );

if ( $loop -> have_posts() ) :
	while ( $loop -> have_posts() ) :
		$loop -> the_post();

		get_template_part( 'template-parts/portfolio/content', 'portfolio' );

	endwhile;
	wp_reset_postdata();
endif;
