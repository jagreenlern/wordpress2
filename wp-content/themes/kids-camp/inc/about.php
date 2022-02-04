<?php
/**
 * Adds Theme page
 *
 * @package Kids_Camp
 */

function kids_camp_about_admin_style( $hook ) {
	if ( 'appearance_page_kids-camp-about' === $hook ) {
		wp_enqueue_style( 'kids-camp-about-admin', get_theme_file_uri( 'assets/css/about-admin.css' ), null, '1.0' );
	}
}
add_action( 'admin_enqueue_scripts', 'kids_camp_about_admin_style' );

/**
 * Add theme page
 */
function kids_camp_menu() {
	add_theme_page( esc_html__( 'About Theme', 'kids-camp' ), esc_html__( 'About Theme', 'kids-camp' ), 'edit_theme_options', 'kids-camp-about', 'kids_camp_about_display' );
}
add_action( 'admin_menu', 'kids_camp_menu' );

/**
 * Display About page
 */
function kids_camp_about_display() {
	$theme = wp_get_theme();
	?>
	<div class="wrap about-wrap full-width-layout">
		<h1><?php echo esc_html( $theme ); ?></h1>
		<div class="about-theme">
			<div class="theme-description">
				<p class="about-text">
					<?php
					// Remove last sentence of description.
					$description = explode( '. ', $theme->get( 'Description' ) );

					array_pop( $description );

					$description = implode( '. ', $description );

					echo esc_html( $description . '.' );
				?></p>
				<p class="actions">
					<a href="<?php echo esc_url( 'https://catchthemes.com/themes/kids-camp' ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Theme Info', 'kids-camp' ); ?></a>

					<a href="<?php echo esc_url( 'https://catchthemes.com/demo/kids-camp' ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'View Demo', 'kids-camp' ); ?></a>

					<a href="<?php echo esc_url( 'https://catchthemes.com/themes/kids-camp/#theme-instructions' ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Theme Instructions', 'kids-camp' ); ?></a>

					<a href="<?php echo esc_url( 'https://catchthemes.com/themes/kids-camp/#compare' ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Compare free Vs Pro',  'kids-camp' ); ?></a>

					<a href="<?php echo esc_url( 'https://catchthemes.com/themes/kids-camp-pro' ); ?>" class="green button button-secondary" target="_blank"><?php esc_html_e( 'Upgrade to pro', 'kids-camp' ); ?></a>

					<a href="<?php echo esc_url( 'https://wordpress.org/support/theme/kids-camp/reviews/#new-post' ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Rate this theme', 'kids-camp' ); ?></a>
				</p>
			</div>

			<div class="theme-screenshot">
				<img src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
			</div>

		</div>

		<nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'kids-camp' ); ?>">
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'kids-camp-about' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'kids-camp-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'kids-camp' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'kids-camp-about', 'tab' => 'changelog' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Changelog', 'kids-camp' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'kids-camp-about', 'tab' => 'import_demo' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'import_demo' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Import Demo', 'kids-camp' ); ?></a>
		</nav>

		<?php
			kids_camp_main_screen();

			kids_camp_changelog_screen();

			kids_camp_import_demo();
		?>

		<div class="return-to-dashboard">
			<?php if ( current_user_can( 'update_core' ) && isset( $_GET['updated'] ) ) : ?>
				<a href="<?php echo esc_url( self_admin_url( 'update-core.php' ) ); ?>">
					<?php is_multisite() ? esc_html_e( 'Return to Updates', 'kids-camp' ) : esc_html_e( 'Return to Dashboard &rarr; Updates', 'kids-camp' ); ?>
				</a> |
			<?php endif; ?>
			<a href="<?php echo esc_url( self_admin_url() ); ?>"><?php is_blog_admin() ? esc_html_e( 'Go to Dashboard &rarr; Home', 'kids-camp' ) : esc_html_e( 'Go to Dashboard', 'kids-camp' ); ?></a>
		</div>
	</div>
	<?php
}

/**
 * Output the main about screen.
 */
function kids_camp_main_screen() {
	if ( isset( $_GET['page'] ) && 'kids-camp-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
	?>
		<div class="feature-section two-col">
			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Theme Customizer', 'kids-camp' ); ?></h2>
				<p><?php esc_html_e( 'All Theme Options are available via Customize screen.', 'kids-camp' ) ?></p>
				<p><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Customize', 'kids-camp' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Got theme support question?', 'kids-camp' ); ?></h2>
				<p><?php esc_html_e( 'Get genuine support from genuine people. Whether it\'s customization or compatibility, our seasoned developers deliver tailored solutions to your queries.', 'kids-camp' ) ?></p>
				<p><a href="<?php echo esc_url( 'https://catchthemes.com/support-forum' ); ?>" class="button button-primary"><?php esc_html_e( 'Support Forum', 'kids-camp' ); ?></a></p>
			</div>
		</div>
	<?php
	}
}

/**
 * Output the changelog screen.
 */
function kids_camp_changelog_screen() {
	if ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) {
		global $wp_filesystem;
	?>
		<div class="wrap about-wrap">

			<p class="about-description"><?php esc_html_e( 'View changelog below:', 'kids-camp' ); ?></p>

			<?php
				$changelog_file = apply_filters( 'kids_camp_changelog_file', get_template_directory() . '/readme.txt' );

				// Check if the changelog file exists and is readable.
				if ( $changelog_file && is_readable( $changelog_file ) ) {
					WP_Filesystem();
					$changelog = $wp_filesystem->get_contents( $changelog_file );
					$changelog_list = kids_camp_parse_changelog( $changelog );

					echo wp_kses_post( $changelog_list );
				}
			?>
		</div>
	<?php
	}
}

/**
 * Parse changelog from readme file.
 * @param  string $content
 * @return string
 */
function kids_camp_parse_changelog( $content ) {
	// Explode content with ==  to juse separate main content to array of headings.
	$content = explode ( '== ', $content );

	$changelog_isolated = '';

	// Get element with 'Changelog ==' as starting string, i.e isolate changelog.
	foreach ( $content as $key => $value ) {
		if (strpos( $value, 'Changelog ==') === 0) {
	    	$changelog_isolated = str_replace( 'Changelog ==', '', $value );
	    }
	}

	// Now Explode $changelog_isolated to manupulate it to add html elements.
	$changelog_array = explode( '= ', $changelog_isolated );

	// Unset first element as it is empty.
	unset( $changelog_array[0] );

	$changelog = '<pre class="changelog">';
		
	foreach ( $changelog_array as $value) {
		// Replace all enter (\n) elements with </span><span> , opening and closing span will be added in next process.
		$value = preg_replace( '/\n+/', '</span><span>', $value );

		// Add openinf and closing div and span, only first span element will have heading class.
		$value = '<div class="block"><span class="heading">= ' . $value . '</span></div>';

		// Remove empty <span></span> element which newr formed at the end.
		$changelog .= str_replace( '<span></span>', '', $value );
	}

	$changelog .= '</pre>';

	return wp_kses_post( $changelog );
}

/**
 * Import Demo data for theme using catch themes demo import plugin
 */
function kids_camp_import_demo() {
	if ( isset( $_GET['tab'] ) && 'import_demo' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap demo-import-wrap">
			<div class="feature-section one-col">
			<?php if ( class_exists( 'CatchThemesDemoImportPlugin' ) ) { ?>
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'Import Demo', 'kids-camp' ); ?></h2>
					<p><?php esc_html_e( 'You can easily import the demo content using the Catch Themes Demo Import Plugin.', 'kids-camp' ) ?></p>
					<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=catch-themes-demo-import' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Import Demo', 'kids-camp' ); ?></a></p>
				</div>
				<?php } 
				else {
					$action = 'install-plugin';
					$slug   = 'catch-themes-demo-import';
					$install_url = wp_nonce_url(
						    add_query_arg(
						        array(
						            'action' => $action,
						            'plugin' => $slug
						        ),
						        admin_url( 'update.php' )
						    ),
						    $action . '_' . $slug
						); ?>
					<div class="col card">
					<h2 class="title"><?php esc_html_e( 'Install Catch Themes Demo Import Plugin', 'kids-camp' ); ?></h2>
					<p><?php esc_html_e( 'You can easily import the demo content using the Catch Themes Demo Import Plugin.', 'kids-camp' ) ?></p>
					<p><a href="<?php echo esc_url( $install_url ); ?>" class="button button-primary"><?php esc_html_e( 'Install Plugin', 'kids-camp' ); ?></a></p>
				</div>
				<?php } ?>
			</div>
		</div>
	<?php
	}
}
