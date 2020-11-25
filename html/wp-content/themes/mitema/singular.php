<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>
<body>
<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>


	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
            the_post_thumbnail();
            the_content();
			//get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

<!-- #site-content -->

<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
</body>
</html>