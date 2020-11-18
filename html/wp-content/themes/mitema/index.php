<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>
<body>
<?php get_header();
echo "<h1>Xavier Site</h1>";
echo "<h2>" . bloginfo( 'nada' ) . "</h2>";

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        echo "<h3>" .the_title() . "</h3>";
        the_content();
        wp_link_pages();
        edit_post_link();
    }
    if ( get_next_posts_link() ) {
        next_posts_link();
    }
    if ( get_previous_posts_link() ) {
        previous_posts_link();
    }
    }else{
        echo "<p>No posts found. :(</p>";
    }
get_footer();
wp_footer();?>
</body>
</html>