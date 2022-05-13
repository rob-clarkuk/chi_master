<section class="booking">
	<div class="booking__container pt1 pb1">
		<div class="booking__select">
			<?php if( have_rows('room_booking_options', 'option') ): ?>
				<?php while( have_rows('room_booking_options', 'option') ): the_row();?>
					<?php if (get_sub_field('display_button')) : ?>
						<a href="<?php the_sub_field('button_link');?>" class="btn btn__thin heading__caps heading__xs booking__option" id="booking_rooms" target="_blank">Book Room</a>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
			<a href="#" class="btn btn__thin heading__caps heading__xs booking__option" data-booking="booking__tables" id="booking_table">Book Table</a>

			<?php if( have_rows('room_booking_options', 'option') ): ?>
				<?php while( have_rows('room_booking_options', 'option') ): the_row();?>
					<?php if (get_sub_field('display_button')) : ?>
						<a href="<?php the_sub_field('button_link');?>" class="btn btn__thin heading__caps heading__xs" id="booking_rooms--mob">Book Room</a>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
			<a href="#" class="btn btn__thin heading__caps heading__xs booking__option bookNowBtn" id="booking_table--mob">Book Table</a>
		</div>
		<div class="booking__options">
			<div id="booking__rooms" class="booking__select">
				<div class="booking__selections">

				</div>
				<?php if( have_rows('room_booking_options', 'option') ): ?>
					<?php while( have_rows('room_booking_options', 'option') ): the_row();?>
						<?php if (get_sub_field('display_button')) : ?>
							<a href="<?php the_sub_field('button_link');?>" class="btn btn__thin heading__caps heading__xs" target="_blank"><?php the_sub_field('button_title');?></a>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div id="booking__tables" class="booking__select">
				<?php if( have_rows('table_booking_options', 'option') ): ?>
    				<?php while( have_rows('table_booking_options', 'option') ): the_row();?>
						<script type='text/javascript' src='//www.opentable.com/widget/reservation/loader?rid=<?php the_sub_field('booking_id');?>&type=multi&theme=wide&iframe=false&domain=com&lang=en-US&newtab=true&ot_source=Restaurant%20website'></script>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>