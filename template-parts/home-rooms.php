<?php if (get_field('hide_rooms_section') == false) :?>
<section class="rooms">
	<div class="rooms__content--container">
		<div class="rooms__content">
			<h3 class="heading__xl heading__caps mb1 mt1"><?php the_field('rooms_heading');?></h3>
			<h4 class="heading__lg mb1 mt1"><?php the_field('rooms_sub_heading');?></h4>
			<div><?php the_field('rooms_content');?></div>
			<a href="<?php the_field('rooms_button_link');?>" class="btn mt2 heading__caps heading__sm"><?php the_field('rooms_button_title');?></a>
		</div>
	</div>
	<div class="rooms__gallery">
		<?php 
			$images = get_field('rooms_carousel');
			if( $images ): ?>
				<?php foreach( $images as $image ): ?>
					<div class="rooms__image" style="background-image:url('<?php echo esc_url($image['sizes']['rooms-image']); ?>')"></div>
				<?php endforeach; ?>
		<?php endif; ?>
	</div>
</section>
<?php endif; ?>