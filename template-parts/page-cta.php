<section class="cta pb3 pt3<?php if (get_field('background_colour') == "dark"){;?> cta__dark<?php } ;?>">
	<div class="container text-center">
		<?php if (get_field('heading')){;?>
			<h5 class="heading__caps heading__sm"><?php the_field('cta_heading');?></h5>
		<?php } ;?>
		<a class="btn <?php if (get_field('opentable') == 1) {;?>bookNowBtn<?php };?>" href="<?php the_field('link');?>"><?php the_field('button_title');?></a>
		<?php if (get_field('cta_sub_heading')){;?>
			<h6 class="heading__xs"><?php the_field('cta_sub_heading');?></h6>
		<?php } ;?>
	</div>
</section>