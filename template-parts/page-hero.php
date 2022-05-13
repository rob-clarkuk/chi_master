<section class="hero">
	<div class="hero__image-container">
		<?php 
			$images = get_field('carousel_images');
			if( $images ): ?>
				<?php foreach( $images as $image ): ?>
					<div class="hero__image hero__image--page" style="background-image:url('<?php echo esc_url($image['sizes']['hero-image']); ?>')"></div>
				<?php endforeach; ?>
		<?php endif; ?>
	</div>
	<div class="hero__content">
		<h1 class="text-center heading__light">
			<span class="heading__md heading__caps heading__body-font heading__text-gap"><?php the_field('sub_heading');?></span>
			<div class="heading__xxl"><?php the_field('heading');?></div>
			<span class="heading__md heading__caps heading__body-font heading__text-gap"><?php the_field('additional_content');?></span>
		</h1>
	</div>
</section>