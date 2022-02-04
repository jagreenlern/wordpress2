<?php
if (!class_exists('Medical_Hub_Our_Work_Widget')) {
    class Medical_Hub_Our_Work_Widget extends WP_Widget
    {

        private function defaults()
        {

            $defaults = array(
                'title' => esc_html__('Our Work', 'medical-hub'),
                'sub-title' => '',
                'medical_hub_portfolio_filter_all' => esc_html__('All', 'medical-hub'),
                'cat_id' => array(),


            );
            return $defaults;
        }


        public function __construct()
        {
            parent::__construct(
                'medical-hub-our-work-widget',
                esc_html__('AT : Gallery Widget', 'medical-hub'),
                array('description' => esc_html__('Medical Gallery Section', 'medical-hub'))
            );
        }

        public function widget($args, $instance)
        {

            $instance = wp_parse_args((array)$instance, $this->defaults());

            if (!empty($instance)) {
                $subtitle = esc_html($instance['sub-title']);
                $title = apply_filters('widget_title', !empty($instance['title']) ? esc_html($instance['title']) : '', $instance, $this->id_base);
                $medical_hub_ad_title = esc_html($instance['medical_hub_portfolio_filter_all']);
                $medical_hub_selected_cat = '';

                if (!empty($instance['cat_id'])) {
                    $medical_hub_selected_cat = medical_hub_sanitize_multiple_category($instance['cat_id']);
                    if (is_array($medical_hub_selected_cat[0])) {
                        $medical_hub_selected_cat = $medical_hub_selected_cat[0];
                    }
                }

                echo $args['before_widget'];
                ?>
                <section id="medical-hub-theme-work" class="widget widget-medical-hub-theme-work">
                    <div class="container">
                        <?php
                        $sticky = get_option('sticky_posts');
                        $medical_hub_cat_post_args = array(
                            'posts_per_page' => 30,
                            'no_found_rows' => true,
                            'post_status' => 'publish',
                            'ignore_sticky_posts' => true,
                            'post__not_in' => $sticky,
                            'orderby' => 'post_date',
                            'order' => 'DESC',
                        );
                        if (-1 != $medical_hub_cat_post_args) {
                            $medical_hub_cat_post_args['category__in'] = $medical_hub_selected_cat;
                        }
                        $portfolio_filter_query = new WP_Query($medical_hub_cat_post_args);

                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-title wow fadeInDown" data-wow-duration="2s">
                                    <h2 class="widget-title"><?php echo esc_html($title); ?></h2>
                                    <span class="double-border"></span>
                                    <p><?php echo esc_html($subtitle); ?> </p>
                                </div>
                                <div class="portfolioFilter text-center">
                                    <?php
                                    if (!empty($medical_hub_ad_title)) {
                                        echo '<a href="#" data-filter="*" class="current">' . $medical_hub_ad_title . '</a>';
                                    }

                                    if (!empty($medical_hub_selected_cat) && is_array($medical_hub_selected_cat)) {
                                        foreach ($medical_hub_selected_cat as $medical_hub_selected_single_cat) {

                                            echo ' <a href="#" data-filter=".' . esc_attr($medical_hub_selected_single_cat) . '">' . esc_html(get_cat_name($medical_hub_selected_single_cat)) . '</a>';
                                        }
                                    }

                                    ?>
                                </div>
                                <div class="col-md-12 extend-div">
                                    <div class="row">
                                        <div class="portfolioContainer wow slideInUp text-left" data-wow-duration="2s">


                                        <?php
                                            if ($portfolio_filter_query->have_posts()):
                                            while ($portfolio_filter_query->have_posts()):
                                            $portfolio_filter_query->the_post();
                                            $categories = get_the_category(get_the_ID());
                                            if (!empty($categories)) {
                                            foreach ($categories as $category) {
                                             $select_cat = $category->term_id;
                                           ?>


                                            <div class="col-xs-12 col-sm-4 col-md-3 <?php echo esc_attr($select_cat); ?>">
                                                <?php
                                            }
                                            }
                                                ?>
                                                <div class="workimgoverlay">
                                                    <a href="">
                                                        <?php
                                                        if (has_post_thumbnail()) {
                                                            $image_id = get_post_thumbnail_id();
                                                            $image_url = wp_get_attachment_image_src($image_id, 'medium', true);
                                                            ?>
                                                            <img src="<?php echo esc_url($image_url[0]); ?>"
                                                                 class="img-responsive">
                                                        <?php } ?>
                                                        <div class="workoverlay">
                                                            <div class="workdetails">
                                                                <div class="border-hover">
                                                                    <h5 class="work-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>


                                    <?php
                                    endwhile;
                                    endif;
                                    wp_reset_postdata();
                                    ?>
                                        </div>
                                    </div>
                                </div><!--portfolioContainer-->
                            </div><!--col-md-12-->
                        </div><!--.row-->
                    </div><!--.container-->
                </section><!--section-->
                <?php
                echo $args['after_widget'];
            }
        }

        public function update($new_instance, $old_instance)
        {
            $instance = $old_instance;
            $instance['cat_id'] = (isset($new_instance['cat_id'])) ? medical_hub_sanitize_multiple_category($new_instance['cat_id']) : array();
            $instance['medical_hub_portfolio_filter_all'] = sanitize_text_field($new_instance['medical_hub_portfolio_filter_all']);
            $instance['title'] = sanitize_text_field($new_instance['title']);
            $instance['sub-title'] = sanitize_text_field($new_instance['sub-title']);

            return $instance;
        }

        public function form($instance)
        {

            $instance = wp_parse_args((array )$instance, $this->defaults());
            $title = esc_attr($instance['title']);
            $subtitle = esc_attr($instance['sub-title']);
            $medical_hub_ad_title = esc_attr($instance['medical_hub_portfolio_filter_all']);
            $medical_hub_selected_cat = '';
            if (!empty($instance['cat_id'])) {
                $medical_hub_selected_cat = $instance['cat_id'];
                if (is_array($medical_hub_selected_cat[0])) {
                    $medical_hub_selected_cat = $medical_hub_selected_cat[0];
                }
            }
            ?>
            <p>
                <label
                    for="<?php echo esc_attr($this->get_field_id('title')); ?>"><strong><?php esc_html_e('Title:', 'medical-hub'); ?></strong></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                       name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
                       value="<?php echo $title; ?>"/>
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('sub-title') ); ?>">
                    <?php esc_html_e( 'Sub Title', 'medical-hub'); ?>
                </label><br/>
                <input type="text" name="<?php echo esc_attr($this->get_field_name('sub-title')); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('sub-title')); ?>" value="<?php echo $subtitle; ?>">
            </p>

            <p>
                <label
                    for="<?php echo esc_attr($this->get_field_id('medical_hub_portfolio_filter_all')); ?>"><strong><?php esc_html_e('Our Work Filter All Text', 'medical-hub'); ?></strong></label>
                <input class="widefat"
                       id="<?php echo esc_attr($this->get_field_id('medical_hub_portfolio_filter_all')); ?>"
                       name="<?php echo esc_attr($this->get_field_name('medical_hub_portfolio_filter_all')); ?>"
                       type="text" value="<?php echo $medical_hub_ad_title; ?>"/>
            </p>

            <p>
                <label
                    for="<?php echo esc_attr($this->get_field_id('cat_id')); ?>"><strong><?php esc_html_e('Select Category', 'medical-hub'); ?></strong></label>
                <select class="widefat" name="<?php echo $this->get_field_name('cat_id'); ?>[]"
                        id="<?php echo esc_attr($this->get_field_id('post_number')); ?>" multiple="multiple">
                    <?php
                    $option = '';
                    $categories = get_categories();
                    if ($categories) {
                        foreach ($categories as $category) {
                            $result = in_array($category->term_id, $medical_hub_selected_cat) ? 'selected=selected' : '';
                            $option .= '<option value="' . esc_attr($category->term_id) . '"' . esc_attr($result) . '>';
                            $option .= esc_html($category->cat_name);
                            $option .= esc_html(' (' . $category->category_count . ')');
                            $option .= '</option>';
                        }
                    }
                    echo $option;
                    ?>
                </select>
            </p>
            <hr>





            <?php

        }
    }
}

add_action('widgets_init', 'medical_hub_our_work_widget');
function medical_hub_our_work_widget()
{
    register_widget('Medical_Hub_Our_Work_Widget');

}















