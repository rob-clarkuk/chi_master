<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CHI_Master
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/kku6ogf.css">

	<?php wp_head(); ?>

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158077978-3">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-158077978-3');
</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'coach-house-inn' ); ?></a>

	<header class="header">
		<div class="header__container">
			<div class="header__logo">
				<?php if( have_rows('header', 'option') ): ?>
    				<?php while( have_rows('header', 'option') ): the_row();?>
						<a href="<?php echo home_url();?>"><?php get_template_part( 'template-parts/icon', 'logo' );?></a>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="header__links">
				<nav class="header__link--container nav__container pl1 pr1">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu_class'	 => 'nav__links',
								'add_li_class'   => 'heading__caps heading__sm pl1 pr1 nav__hover'
							)
						);
						?>
				</nav>
			</div>
			<div class="header__book">
				<a href="#" class="btn btn__light heading__caps heading__sm heading__light bookNowBtn">Book Now</a>
			</div>
			<div class="header__mobMenu">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</header><!-- #masthead -->

	<?php get_template_part( 'template-parts/content', 'mobileMenu' );?>

	<?php get_template_part( 'template-parts/content', 'booking' );?>