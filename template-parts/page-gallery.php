<?php 
	$images = get_field('gallery');
	if( $images ): ?>
	<section class="gallery pb3 pt3">
		<?php foreach( $images as $image ): ?>
			<div class="gallery__image" style="background-image:url('<?php echo esc_url($image['sizes']['gallery-image']); ?>')"></div>
		<?php endforeach; ?>
	</section>
<?php endif; ?>