<?php
if( !class_exists( 'Medical_Hub_Font_Awesome_Class_Metabox') ){
    class Medical_Hub_Font_Awesome_Class_Metabox {

        public function __construct()
        {

            add_action( 'add_meta_boxes', array( $this, 'medical_hub_icon_metabox') );

            add_action( 'save_post', array( $this, 'medical_hub_save_icon_value') );
        }


        public function medical_hub_icon_metabox()
        {

            add_meta_box(
                'medical_hub_icon',
                esc_html__('Font Awesome class', 'medical-hub'),
                array(
                    $this, 'medical_hub_generate_icon'),
                'post',
                'side',
                'high'
            );


            add_meta_box(
                'medical_hub_icon',
                esc_html__('Font Awesome class', 'medical-hub'),
                array(
                    $this, 'medical_hub_generate_icon'),
                'page',
                'side',
                'high'
            );
        }

        public function medical_hub_generate_icon($post)
        {
            $values = get_post_meta( $post->ID, 'medical_hub_icon', true );
            wp_nonce_field( basename(__FILE__), 'medical_hub_fontawesome_fields_nonce');
            ?>
            <input type="text" name="icon" value="<?php echo esc_html($values) ?>" />
            <small>
                <?php

                printf( __( '%1$sRefer here%2$s for icon class. For example: %3$sfa-desktop%4$s', 'medical-hub' ),
              '<br /><a href="'.esc_url( 'http://fontawesome.io/cheatsheet/' ).'" target="_blank">','</a>',"<code>","
              </code>");
                ?>
            </small>
            <?php
        }

        public function medical_hub_save_icon_value($post_id)
        {

            /*
                * A Guide to Writing Secure Themes – Part 4: Securing Post Meta
                *https://make.wordpress.org/themes/2015/06/09/a-guide-to-writing-secure-themes-part-4-securing-post-meta/
                * */
            if (
                !isset($_POST['medical_hub_fontawesome_fields_nonce']) ||
                !wp_verify_nonce($_POST['medical_hub_fontawesome_fields_nonce'], basename(__FILE__)) || /*Protecting against unwanted requests*/
                (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || /*Dealing with autosaves*/
                !current_user_can('edit_post', $post_id)/*Verifying access rights*/
            ) {
                return;
            }

            //Execute this saving function
            if (isset($_POST['icon']) && !empty($_POST['icon'])) {
                $fontawesomeclass = sanitize_text_field( $_POST['icon'] );
                update_post_meta($post_id, 'medical_hub_icon', $fontawesomeclass);
            }
        }
    }
}
$productsMetabox = new medical_hub_Font_awesome_Class_Metabox;




