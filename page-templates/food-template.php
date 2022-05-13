<?php
/**
 * ============== Template Name: Food Template
 */
get_header();?>

<?php get_template_part( 'template-parts/page', 'hero' );?>
<?php get_template_part( 'template-parts/home', 'content' );?>
<?php get_template_part( 'template-parts/page', 'openingTimes' );?>
<?php get_template_part( 'template-parts/page', 'cta' );?>

<?php get_footer(); ?>