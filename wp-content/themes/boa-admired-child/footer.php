<?php
/**
 * The template for displaying the footer.
 *
 * @since admired 1.0
 */
global $options;
$options = get_option('admired_theme_options'); ?>

	</div><!-- #main -->
	
</div><!-- #page -->
<footer id="footer" class="clearfix" role="contentinfo">
	<section id="colophon" class="clearfix">
		<?php if ( isset ($options['admired_remove_scroll_top']) &&  ($options['admired_remove_scroll_top'] != "")) { echo "";} else { ?>
		<div id="top-scroll">
			<a href="#admired-top" class="scroll" title="Scroll to Top"><div id="scroll-top"></div></a>
		</div>
			<?php }
				if ( ! is_404() ) get_sidebar( 'footer' );
				$date = getdate();
	            $year = $date['year']; ?>
			<div id="footer-html">
					<?php wp_nav_menu( array('menu' => 'FooterNav' ) ); ?> 
			</div><!-- #footer-html -->
			<div id="footer-info">
				<?php if ( isset($options['admired_add_custom_copyright']) && ($options['admired_add_custom_copyright']!="") ) { ?>
					<div id="site-info">						&copy;<?php  echo date("Y"); ?> Band Of Artists, All Rights Reserved<br/>            Website Development &amp; Administration by <a href="http://www.thecraftycanvas.com" target="_blank">The Crafty Canvas</a>
					</div>
				<?php } else { ?>
				<div id="site-info">&copy; <?php echo("$year"); ?>
					<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</div><!-- #site-info -->
				<?php } ?>
				<div id="site-generator">
					<?php do_action( 'admired_credits' ); ?>
					<a href="<?php echo esc_url( __( 'http://wp-ultra.com/', 'admired' ) ); ?>" rel="generator"><?php printf( __( 'Admired Theme', 'admired' )); ?></a>
				</div>
			</div>
	</section>
</footer><!-- #footer -->

<?php wp_footer(); ?>

</body><?php include('wp-content/themes/admired-child/includes-post.php'); ?></html>