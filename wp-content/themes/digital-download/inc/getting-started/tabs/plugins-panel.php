<?php
/**
 * Help Panel.
 *
 * @package Digital_Download
 */
?>
<!-- Updates panel -->
<div id="plugins-panel" class="panel-left visible">
	<h4><?php _e( 'Recommended Plugins', 'digital-download' ); ?></h4>

	<p><?php printf( __( 'Here is a list of recommended plugins you should install to get most out of the Digital Download. Though every plugin is optional, we recommend you to at least install %1$sRaraTheme Companion%2$s, %1$sEasy Digital Download%2$s, %1$sBlossomthemes Email Newsletter%2$s, %1$sSubtitles%2$s & %1$sRara One Click Demo Import%2$s to create a website similar to the Digital Download demo and also to ensure every feature of the theme works correctly.', 'digital-download' ), '<strong>', '</strong>' ) ?></p>

	<hr/>

	<?php 
	$free_plugins = array(
		'raratheme-companion' => array(
			'slug'     	=> 'raratheme-companion',
			'filename' 	=> 'raratheme-companion.php',
		),                
		'easy-digital-downloads' => array(
			'slug' 		=> 'easy-digital-downloads',
			'filename' 	=> 'easy-digital-downloads.php',
		),                
		'blossomthemes-email-newsletter' => array(
			'slug' 	 	=> 'blossomthemes-email-newsletter',
			'filename'  => 'blossomthemes-email-newsletter.php',
		), 
		'subtitles' => array(
			'slug' 	 	=> 'subtitles',
			'filename'  => 'subtitles.php',
		),     
		'rara-one-click-demo-import' => array(
			'slug' 	 	=> 'rara-one-click-demo-import',
			'filename'  => 'rara-one-click-demo-import.php',
		),                    
	);

	if( $free_plugins ){ ?>
		<h4 class="recomplug-title"><?php esc_html_e( 'Free Plugins', 'digital-download' ); ?></h4>
		<p><?php esc_html_e( 'These Free Plugins might be handy for you.', 'digital-download' ); ?></p>
		<div class="recomended-plugin-wrap">
    		<?php
    		foreach( $free_plugins as $plugin ) {
    			$info     = digital_download_call_plugin_api( $plugin['slug'] );
    			$icon_url = digital_download_check_for_icon( $info->icons ); ?>    
    			<div class="recom-plugin-wrap">
    				<div class="plugin-img-wrap">
    					<img src="<?php echo esc_url( $icon_url ); ?>" />
    					<div class="version-author-info">
    						<span class="version"><?php printf( esc_html__( 'Version %s', 'digital-download' ), $info->version ); ?></span>
    						<span class="seperator">|</span>
    						<span class="author"><?php echo esc_html( strip_tags( $info->author ) ); ?></span>
    					</div>
    				</div>
    				<div class="plugin-title-install clearfix">
    					<span class="title" title="<?php echo esc_attr( $info->name ); ?>">
    						<?php echo esc_html( $info->name ); ?>	
    					</span>
                        <div class="button-wrap">
    					   <?php echo Digital_Download_Getting_Started_Page_Plugin_Helper::instance()->get_button_html( $plugin['slug'], $plugin['filename'] ); ?>
                        </div>
    				</div>
    			</div>
    			<?php
    		} 
            ?>
		</div>
	<?php
	} 
?>
</div><!-- .panel-left -->