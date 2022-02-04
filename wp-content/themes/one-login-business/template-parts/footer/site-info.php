<?php
/**
 * Displays footer site info
 *
 * @subpackage One Login Business
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info">
	<?php
		echo esc_html( get_theme_mod( 'one_login_business_footer_copy' ) );
		printf(
			/* translators: %s: Business WordPress Theme. */
			esc_html__( ' %s ', 'one-login-business' ),
			'<a href="' . esc_attr__( 'https://www.ovationthemes.com/wordpress/free-wordpress-business-theme/', 'one-login-business' ) . '"> Business WordPress Theme</a>'
		);
	?>
</div>
