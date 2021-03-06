<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kaneohe
 */

?>

			</div><!-- #content -->
		
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kaneohe' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'kaneohe' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'kaneohe' ), 'kaneohe', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
		
		<a class="exit-off-canvas"></a>

  </div><!-- .inner-wrap -->
</div><!-- .off-canvas-wrap -->

<?php wp_footer(); ?>

</body>
</html>
