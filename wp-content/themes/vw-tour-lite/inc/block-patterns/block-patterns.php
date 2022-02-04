<?php
/**
 * VW Tour Lite: Block Patterns
 *
 * @package VW Tour Lite
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'vw-tour-lite',
		array( 'label' => __( 'VW Tour Lite', 'vw-tour-lite' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'vw-tour-lite/banner-section',
		array(
			'title'      => __( 'Banner Section', 'vw-tour-lite' ),
			'categories' => array( 'vw-tour-lite' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\",\"id\":511,\"minHeight\":550,\"align\":\"full\",\"className\":\"banner-section\"} -->\n<div class=\"wp-block-cover alignfull has-background-dim banner-section\" style=\"background-image:url(" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png);min-height:550px\"><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"wide\",\"className\":\"m-0\"} -->\n<div class=\"wp-block-columns alignwide m-0\"><!-- wp:column {\"width\":\"20%\",\"className\":\"\\\\\\u0022wp-block-column\\\\\\u0022\"} -->\n<div class=\"wp-block-column \\&quot;wp-block-column\\&quot;\" style=\"flex-basis:20%\"></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"\\\\\\u0022wp-block-column\"} -->\n<div class=\"wp-block-column \\&quot;wp-block-column\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"className\":\"mb-2\",\"textColor\":\"white\",\"style\":{\"typography\":{\"fontSize\":40}}} -->\n<h1 class=\"has-text-align-center mb-2 has-white-color has-text-color\" style=\"font-size:40px\">LOREM IPSUM IS SIMPLY DUMMY</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"className\":\"text-center\"} -->\n<p class=\"has-text-align-center text-center\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"className\":\"text-center mt-4\"} -->\n<div class=\"wp-block-buttons text-center mt-4\"><!-- wp:button {\"borderRadius\":0,\"style\":{\"color\":{\"background\":\"#0f77e9\"}},\"textColor\":\"black\",\"className\":\"is-style-fill\"} -->\n<div class=\"wp-block-button is-style-fill\"><a class=\"wp-block-button__link has-black-color has-text-color has-background no-border-radius\" style=\"background-color:#0f77e9\">READ MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"20%\",\"className\":\"\\\\\\u0022wp-block-column\\\\\\u0022\"} -->\n<div class=\"wp-block-column \\&quot;wp-block-column\\&quot;\" style=\"flex-basis:20%\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'vw-tour-lite/service-section',
		array(
			'title'      => __( 'Services Section', 'vw-tour-lite' ),
			'categories' => array( 'vw-tour-lite' ),
			'content'    => "<!-- wp:group {\"align\":\"wide\",\"className\":\"services-section py-5 mx-0\"} -->\n<div class=\"wp-block-group alignwide services-section py-5 mx-0\"><div class=\"wp-block-group__inner-container\"><!-- wp:heading {\"textAlign\":\"center\",\"className\":\"mb-2 mt-0\",\"style\":{\"typography\":{\"fontSize\":35}}} -->\n<h2 class=\"has-text-align-center mb-2 mt-0\" style=\"font-size:35px\">OUR SERVICES</h2>\n<!-- /wp:heading -->\n\n<!-- wp:image {\"align\":\"wide\",\"id\":504,\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"className\":\"mx-0\"} -->\n<figure class=\"wp-block-image alignwide size-large mx-0\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/img-border.png\" alt=\"\" class=\"wp-image-504\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:columns {\"align\":\"wide\",\"className\":\"m-0\"} -->\n<div class=\"wp-block-columns alignwide m-0\"><!-- wp:column {\"className\":\"mb-3\"} -->\n<div class=\"wp-block-column mb-3\"><!-- wp:image {\"id\":529,\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"className\":\"text-center mb-0\"} -->\n<figure class=\"wp-block-image size-large text-center mb-0\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/service1.png\" alt=\"\" class=\"wp-image-529\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"textColor\":\"black\",\"fontSize\":\"medium\"} -->\n<h3 class=\"has-text-align-center has-black-color has-text-color has-medium-font-size\">Service Title 1</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"className\":\"text-center m-0\",\"style\":{\"typography\":{\"fontSize\":14},\"color\":{\"text\":\"#747474\"}}} -->\n<p class=\"has-text-align-center text-center m-0 has-text-color\" style=\"color:#747474;font-size:14px\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"mb-3\"} -->\n<div class=\"wp-block-column mb-3\"><!-- wp:image {\"id\":530,\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"className\":\"text-center mb-0\"} -->\n<figure class=\"wp-block-image size-large text-center mb-0\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/service2.png\" alt=\"\" class=\"wp-image-530\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"textColor\":\"black\",\"fontSize\":\"medium\"} -->\n<h3 class=\"has-text-align-center has-black-color has-text-color has-medium-font-size\">Service Title 2</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"className\":\"text-center m-0\",\"style\":{\"typography\":{\"fontSize\":14},\"color\":{\"text\":\"#747474\"}}} -->\n<p class=\"has-text-align-center text-center m-0 has-text-color\" style=\"color:#747474;font-size:14px\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"mb-3\"} -->\n<div class=\"wp-block-column mb-3\"><!-- wp:image {\"id\":531,\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"className\":\"text-center mb-0\"} -->\n<figure class=\"wp-block-image size-large text-center mb-0\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/service3.png\" alt=\"\" class=\"wp-image-531\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"textColor\":\"black\",\"fontSize\":\"medium\"} -->\n<h3 class=\"has-text-align-center has-black-color has-text-color has-medium-font-size\">Service Title 3</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"className\":\"text-center m-0\",\"style\":{\"typography\":{\"fontSize\":14},\"color\":{\"text\":\"#747474\"}}} -->\n<p class=\"has-text-align-center text-center m-0 has-text-color\" style=\"color:#747474;font-size:14px\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:group -->",
		)
	);
}