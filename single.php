<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CHI_Master
 */

get_header();
?>

<?php get_template_part( 'template-parts/page', 'hero' );?>

<?php if( have_rows('page_content') ):
	    
	    while ( have_rows('page_content') ) : the_row();

        if( get_row_layout() == 'content' ):?>
			<section class="content">
				<div class="container text-center pb5 pt5">
					<h2 class="heading__lg font500"><?php the_sub_field('content_heading');?></h2>
					<div class="heading__xs"><?php the_sub_field('content_sub_heading');?></div>
				</div>
			</section>

        <?php elseif( get_row_layout() == 'gallery' ):?>

        	<?php 
				$images = get_sub_field('gallery');
				if( $images ): ?>
				<section class="gallery pb3 pt3">
					<?php foreach( $images as $image ): ?>
						<div class="gallery__image" style="background-image:url('<?php echo esc_url($image['sizes']['gallery-image']); ?>')"></div>
					<?php endforeach; ?>
				</section>
			<?php endif; ?>

		<?php elseif( get_row_layout() == 'content_&_pictures' ):?>
			<section class="rooms mb3 <?php if(get_sub_field('carousel_left')){?>rooms__content--left<?php };?>">
				<div class="rooms__content--container">
					<div class="rooms__content">
						<h3 class="heading__xl heading__caps mb1 mt1 rooms__title"><?php the_sub_field('heading');?></h3>
						<h4 class="heading__lg mb1 mt1"><?php the_sub_field('sub_heading');?></h4>
						<div><?php the_sub_field('content');?></div>
					</div>
				</div>
				<div class="rooms__gallery">
					<?php 
						$images = get_sub_field('carousel');
						if( $images ): ?>
							<?php foreach( $images as $image ): ?>
								<div class="rooms__image" style="background-image:url('<?php echo esc_url($image['sizes']['rooms-image']); ?>')"></div>
							<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</section>

		<?php elseif( get_row_layout() == 'cta' ):?>
			<section class="cta pb3 pt3<?php if (get_sub_field('background_colour') == "dark"){;?> cta__dark<?php } ;?>">
				<div class="container text-center">
					<?php if (get_sub_field('heading')){;?>
						<h5 class="heading__caps heading__sm"><?php the_sub_field('heading');?></h5>
					<?php } ;?>
					<a class="btn" href="<?php the_sub_field('link');?>"><?php the_sub_field('button_title');?></a>
					<?php if (get_sub_field('sub_heading')){;?>
						<h6 class="heading__xs"><?php the_sub_field('sub_heading');?></h6>
					<?php } ;?>
				</div>
			</section>

        <?php endif;
    endwhile;
endif;?>

<?php
get_footer();
