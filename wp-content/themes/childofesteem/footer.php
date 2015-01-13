<?php 
/**
 * Theme Footer Section for our theme.
 * 
 * Displays all of the footer section and closing of the #main div.
 *
 * @package ThemeGrill
 * @subpackage Esteem
 * @since Esteem 1.0
 */
?>
</div><!--#main -->
<?php do_action( 'esteem_before_footer' ); ?>
<footer id="colophon" class="clearfix">
	<?php get_sidebar( 'footer' ); ?>
	<div id="site-generator" class="inner-wrap">
		<?php do_action( 'esteem_footer_copyright' ); ?>
		<div class="social">
			<p>Connect with me:
				<a href="https://www.linkedin.com/pub/rayees-saidalavi/9b/746/8b5" target="_blank">
					<img class="img-social desaturate" src="http://localhost/wordpress/wp-content/themes/childofesteem/in-logo.png">
				</a>
				<!--<a href="https://www.facebook.com/rayees.sayyed" target="_blank">
					<img class="img-social desaturate" src="http://localhost/wordpress/wp-content/themes/childofesteem/facebook-logo.png">
				</a>-->
				<a href="https://twitter.com/prez_ras" target="_blank">
					<img class="img-social desaturate" src="http://localhost/wordpress/wp-content/themes/childofesteem/twitter-logo.png">
				</a>
			</p>
		</div>
	</div><!-- #site-generator -->
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>