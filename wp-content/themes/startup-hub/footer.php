<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package startup Lite
 */

?>
<footer id="site-footer" role="contentinfo">
	<?php if ( is_active_sidebar( 'footer-first' ) || is_active_sidebar( 'footer-second' ) || is_active_sidebar( 'footer-third' ) ) { ?>
	<div class="container">
		<div class="footer-widgets">
			<div class="footer-widget">
				<?php if ( is_active_sidebar( 'footer-first' ) ) : ?>
				<?php dynamic_sidebar( 'footer-first' ); ?>
			<?php endif; ?>
		</div>
		<div class="footer-widget">
			<?php if ( is_active_sidebar( 'footer-second' ) ) : ?>
			<?php dynamic_sidebar( 'footer-second' ); ?>
		<?php endif; ?>
	</div>
	<div class="footer-widget last">
		<?php if ( is_active_sidebar( 'footer-third' ) ) : ?>
		<?php dynamic_sidebar( 'footer-third' ); ?>
	<?php endif; ?>
</div>
</div>
</div>
<?php }?>
<div class="copyrights">
	<div class="container">
		<div class="row" id="copyright-note">
			<span>
				<?php echo '&copy; '. esc_html(date_i18n(__('Y','startup-hub'))); ?> <?php bloginfo( 'name' ); ?>

				<!-- Delete below lines to remove copyright from footer -->
				<span class="footer-info-right">
					<?php echo esc_html_e(' | Theme Design by', 'startup-hub') ?> <a rel="nofollow" href="<?php echo esc_url('https://superbthemes.com/', 'startup-hub'); ?>"><?php echo esc_html_e('Superb', 'startup-hub') ?></a>
				</span>
				<!-- Delete above lines to remove copyright from footer -->
			</span>
		</div>
	</div>
</div>
</footer><!-- #site-footer -->
<?php wp_footer(); ?>

</body>
</html>
