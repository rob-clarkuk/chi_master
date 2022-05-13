<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CHI_Master
 */

?>

	<footer class="pt3 pb3">
		<?php if( have_rows('footer', 'option') ): ?>
    	<?php while( have_rows('footer', 'option') ): the_row();?>
		<div class="footer__content">
			<div class="footer__newsletter">
				<form class="pb3" id="newsletterSignup" data-locationId="<?php the_sub_field('location_id');?>" data-groupId="<?php the_sub_field('group_id');?>">
					<label class="heading__light heading__lg">
						<span>Sign Up to our newsletter</span> <input type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Email" id="emailAddress" class="ml1">
						<button type="submit" class="btn btn__light heading__light heading__caps">Sign Up</button>
					</label>
					<div class="newletter__response heading__light">
						<div id="newsletterConfirm">You have successfully signed up!</div>
						<div id="newsletterFail">Please enter a valid email address!</div>
					</div>
				</form>
			</div>
			<div class="footer__logo">
				<?php get_template_part( 'template-parts/icon', 'logo' );?>
			</div>
			<div class="footer__contact">
				<div class="heading__light heading__lg"><?php the_sub_field('find_us_title');?></div>
				<div class="heading__light">
					<?php the_sub_field('address');?>
				</div>
			</div>
			<div class="footer__contact">
				<div class="heading__light heading__lg"><?php the_sub_field('contact_us_title');?></div>
				<div>
					<a class="heading__light" href="tel:<?php the_sub_field('phone_number');?>">
						<?php the_sub_field('phone_number');?>
					</a>
				</div>
				<div>
					<a class="heading__light" href="mailto:<?php the_sub_field('email');?>">
						<?php the_sub_field('email');?>
					</a>
				</div>
				<?php if( have_rows('social', 'option') ): ?>
				<div class="footer__contact--social pt1">
    				<?php while( have_rows('social', 'option') ): the_row();?>
						<a href="<?php the_sub_field('link');?>">
							<?php
								$socialIcons = get_sub_field( 'icon' );?>
								<?php get_template_part( 'template-parts/icon', $socialIcons );?>
						</a>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
			</div>
			<div class="footer__gap"></div>
			<div class="footer__links">
				<?php if( have_rows('links_section_1') ): ?>
					<?php while( have_rows('links_section_1') ): the_row();?>
						<div><a class="heading__light" href="<?php the_sub_field('link');?>" class="heading__light"><?php the_sub_field('title');?></a></div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="footer__links">
				<?php if( have_rows('links_section_2') ): ?>
					<?php while( have_rows('links_section_2') ): the_row();?>
						<div><a class="heading__light" href="<?php the_sub_field('link');?>" class="heading__light"><?php the_sub_field('title');?></a></div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="footer__copyright pt2 heading__light">
				&copy; Copyright <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved
			</div>
			<div class="footer__accreditations pt2">
				<?php if( have_rows('accreditation') ): ?>
    				<?php while( have_rows('accreditation') ): the_row();?>
    					<?php $image = get_sub_field('image');?>
    					<a href="<?php the_sub_field('link');?>"><img src="<?php echo esc_url($image['url']); ?>"/></a>
    				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>
		
	</footer><!-- #colophon -->

	<?php get_template_part( 'template-parts/content', 'bookingPopup' );?>
	<?php get_template_part( 'template-parts/content', 'newsletterPopup' );?>
</div><!-- #page -->

<?php wp_footer(); ?>

<script src='<?php echo get_template_directory_uri();?>/js/scripts.js'></script>

</body>
</html>
