<?php
/**
 * ============== Template Name: Home
 */
get_header();?>

<?php get_template_part( 'template-parts/home', 'hero' );?>
<?php get_template_part( 'template-parts/home', 'content' );?>
<?php get_template_part( 'template-parts/home', 'rooms' );?>
<?php get_template_part( 'template-parts/home', 'food' );?>
<?php get_template_part( 'template-parts/home', 'testimonials' );?>


<?php get_footer(); ?>