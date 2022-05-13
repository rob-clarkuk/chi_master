<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CHI_Master
 */

get_header();
?>
<?php if( have_rows('news_page_options', 'option') ): ?>
    <?php while( have_rows('news_page_options', 'option') ): the_row();?>
	<section class="hero">
		<div class="hero__image-container">
			<?php 
				$images = get_sub_field('carousel');
				if( $images ): ?>
					<?php foreach( $images as $image ): ?>
						<div class="hero__image hero__image--page" style="background-image:url('<?php echo esc_url($image['sizes']['hero-image']); ?>')"></div>
					<?php endforeach; ?>
			<?php endif; ?>
		</div>
		<div class="hero__content">
			<h1 class="text-center heading__light">
				<span class="heading__md heading__caps heading__body-font heading__text-gap"><?php the_sub_field('sub_heading');?></span>
				<div class="heading__xxl"><?php the_sub_field('heading');?></div>
				<span class="heading__md heading__caps heading__body-font heading__text-gap"><?php the_sub_field('additional_content');?></span>
			</h1>
		</div>
	</section>
	<?php endwhile; ?>
<?php endif; ?>


<div class="container-wide pb3 pt3">
	<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', get_post_type() );
	endwhile;
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

</div>

<?php
get_footer();
