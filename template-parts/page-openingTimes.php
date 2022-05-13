<section class="food food__alt">
	<div class="food__gallery--container pt5">
		<div class="food__gallery--page">
			<?php 
				$images = get_field('food_gallery');
				if( $images ): ?>
					<?php foreach( $images as $image ): ?>
						<img class="food__image--page" src="<?php echo esc_url($image['sizes']['food-small-image']); ?>" />
					<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="food__content--container pb5 pt5 pl5">
		<div class="food__content">
			<h3 class="heading__xl heading__caps mb1 mt0"><?php the_field('food_heading');?></h3>
			<h4 class="heading__lg mb1 mt1"><?php the_field('food_sub_heading');?></h4>
			<div><?php the_field('food_content');?></div>
			<?php if( have_rows('opening_times') ):?>
				<div class="food__opening--container">
					<?php while( have_rows('opening_times') ) : the_row();?>
						<div class="food__opening pb1">
							<div><?php the_sub_field('days');?></div>
							<?php if( have_rows('times') ):?>
								<div>
									<?php while( have_rows('times') ) : the_row();?>
										<div><?php the_sub_field('times');?></div>
									<?php endwhile;?>
								</div>
							<?php endif;?>
						</div>
					<?php endwhile;?>
				</div>
			<?php endif;?>
			<?php if( have_rows('sample_menus') ):?>
				<?php while( have_rows('sample_menus') ) : the_row();
					$file = get_sub_field('menu');?>
					<a href="<?php echo $file['url']; ?>" target="_blank" class="heading__md food__sample"><span><?php the_sub_field('title');?></span> <div class="food__sample--arrow"><?php get_template_part( 'template-parts/icon', 'arrow' );?></div></a>
				<?php endwhile;?>
			<?php endif;?>
			<div><?php the_field('food_additional_content');?></div>
		</div>
	</div>
</section>