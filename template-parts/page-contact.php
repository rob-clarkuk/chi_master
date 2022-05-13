<section class="pt3 pb1">
	<?php if( have_rows('footer', 'option') ): ?>
    	<?php while( have_rows('footer', 'option') ): the_row();?>
			<div class="container contact" id="contactForm" data-locationId='<?php the_sub_field('location_id');?>' data-groupId='<?php the_sub_field('group_id');?>'>
				<?php $formId = get_field('form_id'); echo do_shortcode( $formId ); ?>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>