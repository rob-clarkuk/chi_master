<section class="nav__mobile">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
			'menu_class'	 => 'nav__links--mob',
			'add_li_class'   => 'heading__caps heading__md pb1 pt1'
		)
	);
	?>
</section>