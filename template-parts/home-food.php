<section class="food mb3">
	<div class="food__gallery--container pt5">
		<div class="food__gallery">
			<?php 
				$images = get_field('food_carousel');
				if( $images ): ?>
					<?php foreach( $images as $image ): ?>
						<div class="food__image" style="background-image:url('<?php echo esc_url($image['sizes']['food-image']); ?>')"></div>
					<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="food__content--container pt5 pl5">
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
			<div><?php the_field('food_additional_content');?></div>
			<a href="<?php the_field('food_button_link');?>" class="btn btn__light mt2 heading__caps heading__sm mr1 <?php if (get_field('food_button_opentable') == 1) {;?>bookNowBtn<?php };?>"><?php the_field('food_button_title');?></a>
			<a href="<?php the_field('second_food_button_link');?>" class="btn btn__light mt2 heading__caps heading__sm <?php if (get_field('second_food_opentable') == 1) {;?>bookNowBtn<?php };?>"><?php the_field('second_food_button_title');?></a>
		</div>
	</div>
</section>