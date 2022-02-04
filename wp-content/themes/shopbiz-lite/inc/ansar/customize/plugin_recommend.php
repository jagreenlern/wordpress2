<?php
/* Notify in customizer */
require get_template_directory() . '/inc/ansar/customizer-notify/shopbiz-customizer-notify.php';

$config_customizer = array(
	'recommended_plugins'       => array(
		'icyclub' => array(
			'recommended' => true,
			'description' => sprintf('Activate by installing <strong>ICYCLUB</strong> plugin to use front page and all theme features %s.', 'shopbiz-lite'),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'shopbiz-lite' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'shopbiz-lite' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'shopbiz-lite' ),
	'activate_button_label'     => esc_html__( 'Activate', 'shopbiz-lite' ),
	'deactivate_button_label'   => esc_html__( 'Deactivate', 'shopbiz-lite' ),
);
Shopbiz_Customizer_Notify::init( apply_filters( 'shopbiz_customizer_notify_array', $config_customizer ) );
?>