<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package ThemeGrill
 * @subpackage Esteem
 * @since Esteem 1.0
 */
?>

<div id="secondary">
	<?php do_action( 'esteem_before_sidebar' ); ?>
		<?php 
			if( is_page_template( 'page-templates/contact.php' ) ) {
				$sidebar = 'esteem_contact_page_sidebar';
			}
			else {
				$sidebar = 'esteem_right_sidebar';
			}
		?>

		<?php if ( ! dynamic_sidebar( $sidebar ) ) : ?>
			<div class="contact-side">
				<aside class="service-border">
					<a href="mailto:p_rayees@hotmail.co.uk">
						<div class="service-image-wrap contact-image">
							<i class="icon-envelope"></i>
						</div><!-- service-image-wrap" -->
					</a>
				</aside>
				<aside>
					<div>
						<a href="mailto:p_rayees@hotmail.co.uk"><p class="contact-info">p_rayees@hotmail.co.uk</p></a>
					</div>
				</aside>
			</br>
				<aside class="service-border">
					<div class="service-image-wrap contact-image">
						<i class="icon-phone"></i>
					</div><!-- service-image-wrap" -->
				</aside>
				<aside>
					<div>
						<p class="contact-info">+44 (0)7534010773</p>
					</div>
				</aside>
			</div>
		<?php endif; ?>
	<?php do_action( 'esteem_after_sidebar' ); ?>
</div><!-- #secondary -->