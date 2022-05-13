<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CHI_Master
 */

?>
<div class="news__article pb2">
	<?php 
	$image = get_field('image');?>
	<div class="news__image">
		<img src="<?php echo esc_url($image['url']); ?>"/>
	</div>
	<div class="news__title">
		<h3 class="heading__lg heading__caps mt0 mb1"><a href="<?php the_permalink();?>"><?php the_field('title');?></a></h3>
		<span><?php chi_master_posted_on();?></span>
		<div class="pt1 pb1"><?php the_field('description');?></div>
		<a href="<?php the_permalink();?>" class="btn">Find Out More</a>
	</div>
</div>
