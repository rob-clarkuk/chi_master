<?php if(get_field('content_heading')){ ?>
<section class="content">
	<div class="container text-center pb5 pt5">
		<h2 class="heading__lg font500"><?php the_field('content_heading');?></h2>
		<div class="heading__xs"><?php the_field('content_sub_heading');?></div>
	</div>
</section>
<?php };?>