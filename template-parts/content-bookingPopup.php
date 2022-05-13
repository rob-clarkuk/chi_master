<div class="booking__popup">
	<div class="booking__popup--background"></div>
	<div class="booking__popup--form">
		<div class="booking__popup--tab">
			<div class="booking__popup--tabs pb1 pt1 pl2 pr2 heading__caps active" data-tab="booking__popup-table">Book Table</div>
			<?php if( have_rows('room_booking_options', 'option') ): ?>
				<?php while( have_rows('room_booking_options', 'option') ): the_row();?>
					<?php if (get_sub_field('display_button')) : ?>
						<div class="booking__popup--tabs pb1 pt1 pl2 pr2 heading__caps" data-tab="booking__popup-room">Book Room</div>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="booking__popup--content-container pb2 pt2">
			<div id="booking__popup-table" class="booking__popup--content">
				<?php if( have_rows('table_booking_options', 'option') ): ?>
					<?php while( have_rows('table_booking_options', 'option') ): the_row();?>
						<?php if (get_sub_field('opentable_or_liveres') == 'opentable') :?>
							<script type='text/javascript' src='//www.opentable.com/widget/reservation/loader?rid=<?php the_sub_field('booking_id');?>&type=multi&theme=standard&iframe=false&domain=com&lang=en-US&newtab=true&ot_source=Restaurant%20website'></script>
						<?php else : ;?>
							<iframe src="https://events-widget.liveres.co.uk/widget.html?siteId=<?php the_sub_field('booking_id');?>&styleSheetUrl=assets/zonal-brand-custom.css" width="100%" height="640" frameborder="0"></iframe>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<?php if( have_rows('room_booking_options', 'option') ): ?>
			<div id="booking__popup-room" class="booking__popup--content">
				<?php while( have_rows('room_booking_options', 'option') ): the_row();?>
					<a href="<?php the_sub_field('button_link');?>" class="btn" target="_blank"><?php the_sub_field('button_title');?></a>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>