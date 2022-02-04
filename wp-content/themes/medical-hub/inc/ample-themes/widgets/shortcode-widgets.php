<?php
if (!class_exists('Medical_Hub_do_Short_Code_Widget')) {
    class Medical_Hub_do_Short_Code_Widget extends WP_Widget
    {

        private function defaults()
        {

            $defaults = array(
                'cat_id' => 0,
                'title' => esc_html__('provide a title', 'medical-hub'),
                'features_background' => '',
                'post_number' => 3

            );
            return $defaults;
        }

        public function __construct()
        {
            parent::__construct(
                'business-doshortcode-widget',
                esc_html__('AT : Shortcode Widget', 'medical-hub'),
                array('description' => esc_html__('Medical shortcode use Section', 'medical-hub'))
            );
        }
        public function form($instance)
        {
            $instance = wp_parse_args((array )$instance, $this->defaults());

            $title = esc_attr($instance['title']);
            $features_background   = esc_url( $instance['features_background'] );

            $shortcode = esc_attr( $instance[ 'shortcode' ] );

            ?>
            <p>
                <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
                    <?php esc_html_e('Title', 'medical-hub'); ?>
                </label><br/>
                <input type="text" name="<?php echo esc_attr($this->get_field_name('title')); ?>" class="widefat"
                       id="<?php echo esc_attr($this->get_field_id('title')); ?>" value="<?php echo $title; ?>">
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'shortcode' ); ?>"><?php _e( 'Enter Shortcode', 'medical-hub' ); ?>:</label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'shortcode' ); ?>" name="<?php echo $this->get_field_name( 'shortcode' ); ?>" type="text" value="<?php echo $shortcode; ?>" />
                <small>
                    <?php
                    printf( __( 'Download contact form 7 from %1$shere%2$s', 'medical-hub' ), "<a target='_blank' href='".esc_url( 'https://wordpress.org/plugins/contact-form-7/' )."''>","</a>" );
                    ?>
                </small>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('features_background'); ?>">
                    <?php _e('Select Background Image', 'medical-hub'); ?>:
                </label>
                <span class="img-preview-wrap" <?php if (empty($features_background)) { ?> style="display:none;" <?php } ?>>
                    <img class="widefat" src="<?php echo esc_url($features_background); ?>"
                         alt="<?php esc_attr_e('Image preview', 'medical-hub'); ?>"/>
                </span><!-- .img-preview-wrap -->
                <input type="text" class="widefat" name="<?php echo $this->get_field_name('features_background'); ?>"
                       id="<?php echo $this->get_field_id('features_background'); ?>"
                       value="<?php echo esc_url($features_background); ?>"/>
                <input type="button" id="custom_media_button"
                       value="<?php esc_attr_e('Upload Image', 'medical-hub'); ?>" class="button media-image-upload"
                       data-title="<?php esc_attr_e('Select Background Image', 'medical-hub'); ?>"
                       data-button="<?php esc_attr_e('Select Background Image', 'medical-hub'); ?>"/>
                <input type="button" id="remove_media_button"
                       value="<?php esc_attr_e('Remove Image', 'medical-hub'); ?>"
                       class="button media-image-remove"/>
            </p>
            <hr>

            <?php


        }

        public function update($new_instance, $old_instance)
        {
            $instance = $old_instance;
            $instance['title'] = sanitize_text_field($new_instance['title']);
            $instance[ 'shortcode' ] = wp_kses_post( $new_instance[ 'shortcode' ] );
            $instance['features_background'] = esc_url_raw($new_instance['features_background']);

            return $instance;

        }
        public function widget($args, $instance)
        {

            if (!empty($instance)) {
                $instance = wp_parse_args((array )$instance, $this->defaults());
                echo $args['before_widget'];

                $title = apply_filters('widget_title', !empty($instance['title']) ? esc_html($instance['title']) : '', $instance, $this->id_base);

                $shortcode = wp_kses_post($instance['shortcode']);
                $features_background = esc_url($instance['features_background']);

                echo $args['before_widget'];
                ?>
                <section id="medical-hub-theme-testimonial" class="widget widget-medical-hub-theme-testimonial"
                         style="background-image: url(<?php echo  $features_background;?>);">
                    <div class="container">
                        <div class="main-title wow fadeInDown" data-wow-duration="2s"
                             style="visibility: visible; animation-duration: 2s; animation-name: fadeInDown;">
                            <h2 class="widget-title whitetext"><?php echo $title; ?></h2>
                            
                        </div>
                        </div>
                        <div class="col-xs-12 col-sm-10 col-xs-offset-0 col-sm-offset-1">

                            <?php echo do_shortcode( $shortcode ); ?>


                        </div>
                    </div>
                </section>
                <?php
                echo $args['after_widget'];
            }
        }

    }
}
add_action('widgets_init', 'medical_hub_do_Short_Code_widget');
function medical_hub_do_Short_Code_widget()
{
    register_widget('Medical_Hub_do_Short_Code_Widget');

}