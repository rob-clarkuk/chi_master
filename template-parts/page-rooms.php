<?php

	if( have_rows('rooms') ):
    while( have_rows('rooms') ) : the_row();?>

	<section class="rooms mb3 <?php if(get_sub_field('carousel_left')){?>rooms__content--left<?php };?>">
		<div class="rooms__content--container">
			<div class="rooms__content">
				<h3 class="heading__xl heading__caps mb1 mt1 rooms__title"><?php the_sub_field('room_heading');?></h3>
				<h4 class="heading__lg mb1 mt1"><?php the_sub_field('room_sub_heading');?></h4>
				<div><?php the_sub_field('room_content');?></div>
				<a href="<?php the_sub_field('room_button_link');?>" class="btn mt2 heading__caps heading__sm"><?php the_sub_field('room_button_text');?></a>
			</div>
		</div>
		<div class="rooms__gallery">
			<?php 
				$images = get_sub_field('room_carousel');
				if( $images ): ?>
					<?php foreach( $images as $image ): ?>
						<div class="rooms__image" style="background-image:url('<?php echo esc_url($image['sizes']['rooms-image']); ?>')"></div>
					<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</section>

<?php endwhile; endif;?>