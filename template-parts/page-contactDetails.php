<section class="contact__details pb3 pt3">
	<div class="container">
		<?php if( have_rows('room_booking_options', 'option') ): ?>
			<?php while( have_rows('room_booking_options', 'option') ): the_row();?>
				<?php if (get_sub_field('display_button')) : ?>
					<a href="<?php the_sub_field('button_link');?>" class="btn btn__light heading__light heading__caps">Book a room</a>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<a href="#" class="btn btn__light heading__light heading__caps bookNowBtn">Book a table</a>
	</div>
</section>