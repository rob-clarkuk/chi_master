<?php if( have_rows('testimonials') ):?>
<section class="testimonials">
	<div class="testimonials__container pt5 pb5">
		<?php while( have_rows('testimonials') ) : the_row();?>
			<div class="testimonials__content">
				<div class="text-center"><?php the_sub_field('content');?></div>
				<div class="text-right"><?php the_sub_field('credit');?></div>
			</div>
		<?php endwhile;?>
	</div>
</section>
<?php endif;?>