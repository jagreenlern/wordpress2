<?php

/*for repeter feild For Customizer */

if (class_exists('WP_Customize_control')) {

    class Medical_Hub_Repeater_Controler extends WP_Customize_Control
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'repeater';

        public $medical_hub_box_label = '';

        public $medical_hub_box_add_control = '';

        private $cats = '';

        /**
         * The fields that each container row will contain.
         *
         * @access public
         * @var array
         */
        public $fields = array();

        /**
         * Repeater drag and drop controler
         *
         * @since  1.0.0
         */
        public function __construct($manager, $id, $args = array(), $fields = array())
        {
            $this->fields = $fields;
            $this->medical_hub_box_label = $args['medical_hub_box_label'];
            $this->medical_hub_box_add_control = $args['medical_hub_box_add_control'];
            $this->cats = get_categories(array('hide_empty' => false));
            parent::__construct($manager, $id, $args);
        }

        public function render_content()
        {

            $values = json_decode($this->value());
            ?>
            <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>

            <?php if ($this->description) { ?>
            <span class="description customize-control-description">
			<?php echo wp_kses_post($this->description); ?>
			</span>
        <?php } ?>

            <ul class="medical_hub-repeater-field-control-wrap">
                <?php
                $this->medical_hub_get_fields();
                ?>
            </ul>

            <input type="hidden" <?php $this->link(); ?> class="medical_hub-repeater-collector"
                   value="<?php echo esc_attr($this->value()); ?>"/>
            <button type="button"
                    class="button medical_hub-add-control-field"><?php echo esc_html($this->medical_hub_box_add_control); ?></button>
            <?php
        }

        private function medical_hub_get_fields()
        {
            $fields = $this->fields;
            $values = json_decode($this->value());

            if (is_array($values)) {
                foreach ($values as $value) {
                    ?>
                    <li class="medical_hub-repeater-field-control">
                        <h3 class="medical_hub-repeater-field-title"><?php echo esc_html($this->medical_hub_box_label); ?></h3>

                        <div class="medical_hub-repeater-fields">
                            <?php
                            foreach ($fields as $key => $field) {
                                $class = isset($field['class']) ? $field['class'] : '';
                                ?>
                                <div
                                        class="medical_hub-fields medical_hub-type-<?php echo esc_attr($field['type']) . ' ' . $class ?>">

                                    <?php
                                    $label = isset($field['label']) ? $field['label'] : '';
                                    $description = isset($field['description']) ? $field['description'] : '';
                                    if ($field['type'] != 'checkbox') { ?>
                                        <span class="customize-control-title"><?php echo esc_html($label); ?></span>
                                        <span
                                                class="description customize-control-description"><?php echo esc_html($description) ?></span>
                                        <?php
                                    }

                                    $new_value = isset($value->$key) ? $value->$key : '';
                                    $default = isset($field['default']) ? $field['default'] : '';

                                    switch ($field['type']) {
                                        case 'text':
                                            echo '<input data-default="' . esc_attr($default) . '" data-name="' . esc_attr($key) . '" type="text" value="' . esc_attr($new_value) . '"/>';
                                            break;

                                        case 'textarea':
                                            echo '<textarea data-default="' . esc_attr($default) . '"  data-name="' . esc_attr($key) . '">' . esc_textarea($new_value) . '</textarea>';
                                            break;

                                        case 'upload':
                                            $image = $image_class = "";
                                            if ($new_value) {
                                                $image = '<img src="' . esc_url($new_value) . '" style="max-width:100%;"/>';
                                                $image_class = ' hidden';
                                            }
                                            echo '<div class="medical_hub-fields-wrap">';
                                            echo '<div class="attachment-media-view">';
                                            echo '<div class="placeholder' . $image_class . '">';
                                            esc_html__('No image selected', 'medical-hub');
                                            echo '</div>';
                                            echo '<div class="thumbnail thumbnail-image">';
                                            echo $image;
                                            echo '</div>';
                                            echo '<div class="actions clearfix">';
                                            echo '<button type="button" class="button medical_hub-delete-button align-left">' . esc_html__('Remove', 'medical-hub') . '</button>';
                                            echo '<button type="button" class="button medical_hub-upload-button alignright">' . esc_html__('Select Image', 'medical-hub') . '</button>';
                                            echo '<input data-default="' . esc_attr($default) . '" class="upload-id" data-name="' . esc_attr($key) . '" type="hidden" value="' . esc_attr($new_value) . '"/>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '</div>';
                                            break;

                                        case 'category':
                                            echo '<select data-default="' . esc_attr($default) . '"  data-name="' . esc_attr($key) . '">';
                                            echo '<option value="0">' . esc_html__('Select Category', 'medical-hub') . '</option>';
                                            echo '<option value="-1">' . esc_html__('Latest Posts', 'medical-hub') . '</option>';
                                            foreach ($this->cats as $cat) {
                                                printf('<option value="%s" %s>%s</option>', esc_attr($cat->term_id), selected($new_value, $cat->term_id, false), esc_html($cat->name));
                                            }
                                            echo '</select>';
                                            break;

                                        case 'select':
                                            $options = $field['options'];
                                            echo '<select  data-default="' . esc_attr($default) . '"  data-name="' . esc_attr($key) . '">';
                                            foreach ($options as $option => $val) {
                                                printf('<option value="%s" %s>%s</option>', esc_attr($option), selected($new_value, $option, false), esc_html($val));
                                            }
                                            echo '</select>';
                                            break;

                                        case 'checkbox':
                                            echo '<label>';
                                            echo '<input data-default="' . esc_attr($default) . '" value="' . $new_value . '" data-name="' . esc_attr($key) . '" type="checkbox" ' . checked($new_value, 'yes', false) . '/>';
                                            echo esc_html($label);
                                            echo '<span class="description customize-control-description">' . esc_html($description) . '</span>';
                                            echo '</label>';
                                            break;

                                        case 'colorpicker':
                                            echo '<input data-default="' . esc_attr($default) . '" class="medical_hub-color-picker" data-alpha="true" data-name="' . esc_attr($key) . '" type="text" value="' . esc_attr($new_value) . '"/>';
                                            break;

                                        case 'selector':
                                            $options = $field['options'];
                                            echo '<div class="selector-labels">';
                                            foreach ($options as $option => $val) {
                                                $class = ($new_value == $option) ? 'selector-selected' : '';
                                                echo '<label class="' . $class . '" data-val="' . esc_attr($option) . '">';
                                                echo '<img src="' . esc_url($val) . '"/>';
                                                echo '</label>';
                                            }
                                            echo '</div>';
                                            echo '<input data-default="' . esc_attr($default) . '" type="hidden" value="' . esc_attr($new_value) . '" data-name="' . esc_attr($key) . '"/>';
                                            break;

                                        case 'radio':
                                            $options = $field['options'];
                                            echo '<div class="radio-labels">';
                                            foreach ($options as $option => $val) {
                                                echo '<label>';
                                                echo '<input value="' . esc_attr($option) . '" type="radio" ' . checked($new_value, $option, false) . '/>';
                                                echo $val;
                                                echo '</label>';
                                            }
                                            echo '</div>';
                                            echo '<input data-default="' . esc_attr($default) . '" type="hidden" value="' . esc_attr($new_value) . '" data-name="' . esc_attr($key) . '"/>';
                                            break;

                                        case 'switch':
                                            $switch = $field['switch'];
                                            $switch_class = ($new_value == 'on') ? 'switch-on' : '';
                                            echo '<div class="onoffswitch ' . $switch_class . '">';
                                            echo '<div class="onoffswitch-inner">';
                                            echo '<div class="onoffswitch-active">';
                                            echo '<div class="onoffswitch-switch">' . esc_html($switch["on"]) . '</div>';
                                            echo '</div>';
                                            echo '<div class="onoffswitch-inactive">';
                                            echo '<div class="onoffswitch-switch">' . esc_html($switch["off"]) . '</div>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<input data-default="' . esc_attr($default) . '" type="hidden" value="' . esc_attr($new_value) . '" data-name="' . esc_attr($key) . '"/>';
                                            break;

                                        case 'range':
                                            $options = $field['options'];
                                            $new_value = $new_value ? $new_value : $options['val'];
                                            echo '<div class="medical_hub-range-slider" >';
                                            echo '<div class="range-input" data-defaultvalue="' . esc_attr($options['val']) . '" data-value="' . esc_attr($new_value) . '" data-min="' . esc_attr($options['min']) . '" data-max="' . esc_attr($options['max']) . '" data-step="' . esc_attr($options['step']) . '"></div>';
                                            echo '<input  class="range-input-selector" type="text" value="' . esc_attr($new_value) . '"  data-name="' . esc_attr($key) . '"/>';
                                            echo '<span class="unit">' . esc_html($options['unit']) . '</span>';
                                            echo '</div>';
                                            break;

                                        case 'icon':
                                            echo '<div class="medical_hub-selected-icon">';
                                            echo '<i class="' . esc_attr($new_value) . '"></i>';
                                            echo '<span><i class="fa fa-angle-down"></i></span>';
                                            echo '</div>';
                                            echo '<ul class="medical_hub-icon-list clearfix">';
                                            $medical_hub_font_awesome_icon_array = medical_hub_font_awesome_icon_array();
                                            foreach ($medical_hub_font_awesome_icon_array as $medical_hub_font_awesome_icon) {
                                                $icon_class = $new_value == $medical_hub_font_awesome_icon ? 'icon-active' : '';
                                                echo '<li class=' . $icon_class . '><i class="' . $medical_hub_font_awesome_icon . '"></i></li>';
                                            }
                                            echo '</ul>';
                                            echo '<input data-default="' . esc_attr($default) . '" type="hidden" value="' . esc_attr($new_value) . '" data-name="' . esc_attr($key) . '"/>';
                                            break;

                                        case 'multicategory':
                                            $new_value_array = !is_array($new_value) ? explode(',', $new_value) : $new_value;
                                            echo '<ul class="medical_hub-multi-category-list">';
                                            echo '<li><label><input type="checkbox" value="-1" ' . checked('-1', $new_value, false) . '/>' . esc_html_e('Latest Posts', 'medical-hub') . '</label></li>';
                                            foreach ($this->cats as $cat) {
                                                $checked = in_array($cat->term_id, $new_value_array) ? 'checked="checked"' : '';
                                                echo '<li>';
                                                echo '<label>';
                                                echo '<input type="checkbox" value="' . esc_attr($cat->term_id) . '" ' . $checked . '/>';
                                                echo esc_html($cat->name);
                                                echo '</label>';
                                                echo '</li>';
                                            }
                                            echo '</ul>';
                                            echo '<input data-default="' . esc_attr($default) . '" type="hidden" value="' . esc_attr(implode(',', $new_value_array)) . '" data-name="' . esc_attr($key) . '"/>';
                                            break;

                                        default:
                                            break;
                                    }
                                    ?>
                                </div>
                                <?php
                            } ?>

                            <div class="clearfix medical_hub-repeater-footer">
                                <div class="alignright">
                                    <a class="medical_hub-repeater-field-remove"
                                       href="#remove"><?php esc_html_e('Delete', 'medical-hub') ?></a> |
                                    <a class="medical_hub-repeater-field-close"
                                       href="#close"><?php esc_html_e('Close', 'medical-hub') ?></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                }
            }
        }

    }
}

/*===============for loading font awesome class======================*/

if (!function_exists('medical_hub_font_awesome_icon_array')) {
    function medical_hub_font_awesome_icon_array()
    {
        return array("fa fa-glass", "fa fa-music", "fa fa-search", "fa fa-envelope-o", "fa fa-heart", "fa fa-star", "fa fa-star-o", "fa fa-user", "fa fa-film", "fa fa-th-large", "fa fa-th", "fa fa-th-list", "fa fa-check", "fa fa-remove", "fa fa-close", "fa fa-times", "fa fa-search-plus", "fa fa-search-minus", "fa fa-power-off", "fa fa-signal", "fa fa-gear", "fa fa-cog", "fa fa-trash-o", "fa fa-home", "fa fa-file-o", "fa fa-clock-o", "fa fa-road", "fa fa-download", "fa fa-arrow-circle-o-down", "fa fa-arrow-circle-o-up", "fa fa-inbox", "fa fa-play-circle-o", "fa fa-rotate-right", "fa fa-repeat", "fa fa-refresh", "fa fa-list-alt", "fa fa-lock", "fa fa-flag", "fa fa-headphones", "fa fa-volume-off", "fa fa-volume-down", "fa fa-volume-up", "fa fa-qrcode", "fa fa-barcode", "fa fa-tag", "fa fa-tags", "fa fa-book", "fa fa-bookmark", "fa fa-print", "fa fa-camera", "fa fa-font", "fa fa-bold", "fa fa-italic", "fa fa-text-height", "fa fa-text-width", "fa fa-align-left", "fa fa-align-center", "fa fa-align-right", "fa fa-align-justify", "fa fa-list", "fa fa-dedent", "fa fa-outdent", "fa fa-indent", "fa fa-video-camera", "fa fa-photo", "fa fa-image", "fa fa-picture-o", "fa fa-pencil", "fa fa-map-marker", "fa fa-adjust", "fa fa-tint", "fa fa-edit", "fa fa-pencil-square-o", "fa fa-share-square-o", "fa fa-check-square-o", "fa fa-arrows", "fa fa-step-backward", "fa fa-fast-backward", "fa fa-backward", "fa fa-play", "fa fa-pause", "fa fa-stop", "fa fa-forward", "fa fa-fast-forward", "fa fa-step-forward", "fa fa-eject", "fa fa-chevron-left", "fa fa-chevron-right", "fa fa-plus-circle", "fa fa-minus-circle", "fa fa-times-circle", "fa fa-check-circle", "fa fa-question-circle", "fa fa-info-circle", "fa fa-crosshairs", "fa fa-times-circle-o", "fa fa-check-circle-o", "fa fa-ban", "fa fa-arrow-left", "fa fa-arrow-right", "fa fa-arrow-up", "fa fa-arrow-down", "fa fa-mail-forward", "fa fa-share", "fa fa-expand", "fa fa-compress", "fa fa-plus", "fa fa-minus", "fa fa-asterisk", "fa fa-exclamation-circle", "fa fa-gift", "fa fa-leaf", "fa fa-fire", "fa fa-eye", "fa fa-eye-slash", "fa fa-warning", "fa fa-exclamation-triangle", "fa fa-plane", "fa fa-calendar", "fa fa-random", "fa fa-comment", "fa fa-magnet", "fa fa-chevron-up", "fa fa-chevron-down", "fa fa-retweet", "fa fa-shopping-cart", "fa fa-folder", "fa fa-folder-open", "fa fa-arrows-v", "fa fa-arrows-h", "fa fa-bar-chart-o", "fa fa-bar-chart", "fa fa-twitter-square", "fa fa-facebook-square", "fa fa-camera-retro", "fa fa-key", "fa fa-gears", "fa fa-cogs", "fa fa-comments", "fa fa-thumbs-o-up", "fa fa-thumbs-o-down", "fa fa-star-half", "fa fa-heart-o", "fa fa-sign-out", "fa fa-linkedin-square", "fa fa-thumb-tack", "fa fa-external-link", "fa fa-sign-in", "fa fa-trophy", "fa fa-github-square", "fa fa-upload", "fa fa-lemon-o", "fa fa-phone", "fa fa-square-o", "fa fa-bookmark-o", "fa fa-phone-square", "fa fa-twitter", "fa fa-facebook-f", "fa fa-facebook", "fa fa-github", "fa fa-unlock", "fa fa-credit-card", "fa fa-feed", "fa fa-rss", "fa fa-hdd-o", "fa fa-bullhorn", "fa fa-bell", "fa fa-certificate", "fa fa-hand-o-right", "fa fa-hand-o-left", "fa fa-hand-o-up", "fa fa-hand-o-down", "fa fa-arrow-circle-left", "fa fa-arrow-circle-right", "fa fa-arrow-circle-up", "fa fa-arrow-circle-down", "fa fa-globe", "fa fa-wrench", "fa fa-tasks", "fa fa-filter", "fa fa-briefcase", "fa fa-arrows-alt", "fa fa-group", "fa fa-users", "fa fa-chain", "fa fa-link", "fa fa-cloud", "fa fa-flask", "fa fa-cut", "fa fa-scissors", "fa fa-copy", "fa fa-files-o", "fa fa-paperclip", "fa fa-save", "fa fa-floppy-o", "fa fa-square", "fa fa-navicon", "fa fa-reorder", "fa fa-bars", "fa fa-list-ul", "fa fa-list-ol", "fa fa-strikethrough", "fa fa-underline", "fa fa-table", "fa fa-magic", "fa fa-truck", "fa fa-pinterest", "fa fa-pinterest-square", "fa fa-google-plus-square", "fa fa-google-plus", "fa fa-money", "fa fa-caret-down", "fa fa-caret-up", "fa fa-caret-left", "fa fa-caret-right", "fa fa-columns", "fa fa-unsorted", "fa fa-sort", "fa fa-sort-down", "fa fa-sort-desc", "fa fa-sort-up", "fa fa-sort-asc", "fa fa-envelope", "fa fa-linkedin", "fa fa-rotate-left", "fa fa-undo", "fa fa-legal", "fa fa-gavel", "fa fa-dashboard", "fa fa-tachometer", "fa fa-comment-o", "fa fa-comments-o", "fa fa-flash", "fa fa-bolt", "fa fa-sitemap", "fa fa-umbrella", "fa fa-paste", "fa fa-clipboard", "fa fa-lightbulb-o", "fa fa-exchange", "fa fa-cloud-download", "fa fa-cloud-upload", "fa fa-user-md", "fa fa-stethoscope", "fa fa-suitcase", "fa fa-bell-o", "fa fa-coffee", "fa fa-cutlery", "fa fa-file-text-o", "fa fa-building-o", "fa fa-hospital-o", "fa fa-ambulance", "fa fa-medkit", "fa fa-fighter-jet", "fa fa-beer", "fa fa-h-square", "fa fa-plus-square", "fa fa-angle-double-left", "fa fa-angle-double-right", "fa fa-angle-double-up", "fa fa-angle-double-down", "fa fa-angle-left", "fa fa-angle-right", "fa fa-angle-up", "fa fa-angle-down", "fa fa-desktop", "fa fa-laptop", "fa fa-tablet", "fa fa-mobile-phone", "fa fa-mobile", "fa fa-circle-o", "fa fa-quote-left", "fa fa-quote-right", "fa fa-spinner", "fa fa-circle", "fa fa-mail-reply", "fa fa-reply", "fa fa-github-alt", "fa fa-folder-o", "fa fa-folder-open-o", "fa fa-smile-o", "fa fa-frown-o", "fa fa-meh-o", "fa fa-gamepad", "fa fa-keyboard-o", "fa fa-flag-o", "fa fa-flag-checkered", "fa fa-terminal", "fa fa-code", "fa fa-mail-reply-all", "fa fa-reply-all", "fa fa-star-half-empty", "fa fa-star-half-full", "fa fa-star-half-o", "fa fa-location-arrow", "fa fa-crop", "fa fa-code-fork", "fa fa-unlink", "fa fa-chain-broken", "fa fa-question", "fa fa-info", "fa fa-exclamation", "fa fa-superscript", "fa fa-subscript", "fa fa-eraser", "fa fa-puzzle-piece", "fa fa-microphone", "fa fa-microphone-slash", "fa fa-shield", "fa fa-calendar-o", "fa fa-fire-extinguisher", "fa fa-rocket", "fa fa-maxcdn", "fa fa-chevron-circle-left", "fa fa-chevron-circle-right", "fa fa-chevron-circle-up", "fa fa-chevron-circle-down", "fa fa-html5", "fa fa-css3", "fa fa-anchor", "fa fa-unlock-alt", "fa fa-bullseye", "fa fa-ellipsis-h", "fa fa-ellipsis-v", "fa fa-rss-square", "fa fa-play-circle", "fa fa-ticket", "fa fa-minus-square", "fa fa-minus-square-o", "fa fa-level-up", "fa fa-level-down", "fa fa-check-square", "fa fa-pencil-square", "fa fa-external-link-square", "fa fa-share-square", "fa fa-compass", "fa fa-toggle-down", "fa fa-caret-square-o-down", "fa fa-toggle-up", "fa fa-caret-square-o-up", "fa fa-toggle-right", "fa fa-caret-square-o-right", "fa fa-euro", "fa fa-eur", "fa fa-gbp", "fa fa-dollar", "fa fa-usd", "fa fa-rupee", "fa fa-inr", "fa fa-cny", "fa fa-rmb", "fa fa-yen", "fa fa-jpy", "fa fa-ruble", "fa fa-rouble", "fa fa-rub", "fa fa-won", "fa fa-krw", "fa fa-bitcoin", "fa fa-btc", "fa fa-file", "fa fa-file-text", "fa fa-sort-alpha-asc", "fa fa-sort-alpha-desc", "fa fa-sort-amount-asc", "fa fa-sort-amount-desc", "fa fa-sort-numeric-asc", "fa fa-sort-numeric-desc", "fa fa-thumbs-up", "fa fa-thumbs-down", "fa fa-youtube-square", "fa fa-youtube", "fa fa-xing", "fa fa-xing-square", "fa fa-youtube-play", "fa fa-dropbox", "fa fa-stack-overflow", "fa fa-instagram", "fa fa-flickr", "fa fa-adn", "fa fa-bitbucket", "fa fa-bitbucket-square", "fa fa-tumblr", "fa fa-tumblr-square", "fa fa-long-arrow-down", "fa fa-long-arrow-up", "fa fa-long-arrow-left", "fa fa-long-arrow-right", "fa fa-apple", "fa fa-windows", "fa fa-android", "fa fa-linux", "fa fa-dribbble", "fa fa-skype", "fa fa-foursquare", "fa fa-trello", "fa fa-female", "fa fa-male", "fa fa-gittip", "fa fa-gratipay", "fa fa-sun-o", "fa fa-moon-o", "fa fa-archive", "fa fa-bug", "fa fa-vk", "fa fa-weibo", "fa fa-renren", "fa fa-pagelines", "fa fa-stack-exchange", "fa fa-arrow-circle-o-right", "fa fa-arrow-circle-o-left", "fa fa-toggle-left", "fa fa-caret-square-o-left", "fa fa-dot-circle-o", "fa fa-wheelchair", "fa fa-vimeo-square", "fa fa-turkish-lira", "fa fa-try", "fa fa-plus-square-o", "fa fa-space-shuttle", "fa fa-slack", "fa fa-envelope-square", "fa fa-wordpress", "fa fa-openid", "fa fa-institution", "fa fa-bank", "fa fa-university", "fa fa-mortar-board", "fa fa-graduation-cap", "fa fa-yahoo", "fa fa-google", "fa fa-reddit", "fa fa-reddit-square", "fa fa-stumbleupon-circle", "fa fa-stumbleupon", "fa fa-delicious", "fa fa-digg", "fa fa-pied-piper-pp", "fa fa-pied-piper-alt", "fa fa-drupal", "fa fa-joomla", "fa fa-language", "fa fa-fax", "fa fa-building", "fa fa-child", "fa fa-paw", "fa fa-spoon", "fa fa-cube", "fa fa-cubes", "fa fa-behance", "fa fa-behance-square", "fa fa-steam", "fa fa-steam-square", "fa fa-recycle", "fa fa-automobile", "fa fa-car", "fa fa-cab", "fa fa-taxi", "fa fa-tree", "fa fa-spotify", "fa fa-deviantart", "fa fa-soundcloud", "fa fa-database", "fa fa-file-pdf-o", "fa fa-file-word-o", "fa fa-file-excel-o", "fa fa-file-powerpoint-o", "fa fa-file-photo-o", "fa fa-file-picture-o", "fa fa-file-image-o", "fa fa-file-zip-o", "fa fa-file-archive-o", "fa fa-file-sound-o", "fa fa-file-audio-o", "fa fa-file-movie-o", "fa fa-file-video-o", "fa fa-file-code-o", "fa fa-vine", "fa fa-codepen", "fa fa-jsfiddle", "fa fa-life-bouy", "fa fa-life-buoy", "fa fa-life-saver", "fa fa-support", "fa fa-life-ring", "fa fa-circle-o-notch", "fa fa-ra", "fa fa-resistance", "fa fa-rebel", "fa fa-ge", "fa fa-empire", "fa fa-git-square", "fa fa-git", "fa fa-y-combinator-square", "fa fa-yc-square", "fa fa-hacker-news", "fa fa-tencent-weibo", "fa fa-qq", "fa fa-wechat", "fa fa-weixin", "fa fa-send", "fa fa-paper-plane", "fa fa-send-o", "fa fa-paper-plane-o", "fa fa-history", "fa fa-circle-thin", "fa fa-header", "fa fa-paragraph", "fa fa-sliders", "fa fa-share-alt", "fa fa-share-alt-square", "fa fa-bomb", "fa fa-soccer-ball-o", "fa fa-futbol-o", "fa fa-tty", "fa fa-binoculars", "fa fa-plug", "fa fa-slideshare", "fa fa-twitch", "fa fa-yelp", "fa fa-newspaper-o", "fa fa-wifi", "fa fa-calculator", "fa fa-paypal", "fa fa-google-wallet", "fa fa-cc-visa", "fa fa-cc-mastercard", "fa fa-cc-discover", "fa fa-cc-amex", "fa fa-cc-paypal", "fa fa-cc-stripe", "fa fa-bell-slash", "fa fa-bell-slash-o", "fa fa-trash", "fa fa-copyright", "fa fa-at", "fa fa-eyedropper", "fa fa-paint-brush", "fa fa-birthday-cake", "fa fa-area-chart", "fa fa-pie-chart", "fa fa-line-chart", "fa fa-lastfm", "fa fa-lastfm-square", "fa fa-toggle-off", "fa fa-toggle-on", "fa fa-bicycle", "fa fa-bus", "fa fa-ioxhost", "fa fa-angellist", "fa fa-cc", "fa fa-shekel", "fa fa-sheqel", "fa fa-ils", "fa fa-meanpath", "fa fa-buysellads", "fa fa-connectdevelop", "fa fa-dashcube", "fa fa-forumbee", "fa fa-leanpub", "fa fa-sellsy", "fa fa-shirtsinbulk", "fa fa-simplybuilt", "fa fa-skyatlas", "fa fa-cart-plus", "fa fa-cart-arrow-down", "fa fa-diamond", "fa fa-ship", "fa fa-user-secret", "fa fa-motorcycle", "fa fa-street-view", "fa fa-heartbeat", "fa fa-venus", "fa fa-mars", "fa fa-mercury", "fa fa-intersex", "fa fa-transgender", "fa fa-transgender-alt", "fa fa-venus-double", "fa fa-mars-double", "fa fa-venus-mars", "fa fa-mars-stroke", "fa fa-mars-stroke-v", "fa fa-mars-stroke-h", "fa fa-neuter", "fa fa-genderless", "fa fa-facebook-official", "fa fa-pinterest-p", "fa fa-whatsapp", "fa fa-server", "fa fa-user-plus", "fa fa-user-times", "fa fa-hotel", "fa fa-bed", "fa fa-viacoin", "fa fa-train", "fa fa-subway", "fa fa-medium", "fa fa-yc", "fa fa-y-combinator", "fa fa-optin-monster", "fa fa-opencart", "fa fa-expeditedssl", "fa fa-battery-4", "fa fa-battery-full", "fa fa-battery-3", "fa fa-battery-three-quarters", "fa fa-battery-2", "fa fa-battery-half", "fa fa-battery-1", "fa fa-battery-quarter", "fa fa-battery-0", "fa fa-battery-empty", "fa fa-mouse-pointer", "fa fa-i-cursor", "fa fa-object-group", "fa fa-object-ungroup", "fa fa-sticky-note", "fa fa-sticky-note-o", "fa fa-cc-jcb", "fa fa-cc-diners-club", "fa fa-clone", "fa fa-balance-scale", "fa fa-hourglass-o", "fa fa-hourglass-1", "fa fa-hourglass-start", "fa fa-hourglass-2", "fa fa-hourglass-half", "fa fa-hourglass-3", "fa fa-hourglass-end", "fa fa-hourglass", "fa fa-hand-grab-o", "fa fa-hand-rock-o", "fa fa-hand-stop-o", "fa fa-hand-paper-o", "fa fa-hand-scissors-o", "fa fa-hand-lizard-o", "fa fa-hand-spock-o", "fa fa-hand-pointer-o", "fa fa-hand-peace-o", "fa fa-trademark", "fa fa-registered", "fa fa-creative-commons", "fa fa-gg", "fa fa-gg-circle", "fa fa-tripadvisor", "fa fa-odnoklassniki", "fa fa-odnoklassniki-square", "fa fa-get-pocket", "fa fa-wikipedia-w", "fa fa-safari", "fa fa-chrome", "fa fa-firefox", "fa fa-opera", "fa fa-internet-explorer", "fa fa-tv", "fa fa-television", "fa fa-contao", "fa fa-500px", "fa fa-amazon", "fa fa-calendar-plus-o", "fa fa-calendar-minus-o", "fa fa-calendar-times-o", "fa fa-calendar-check-o", "fa fa-industry", "fa fa-map-pin", "fa fa-map-signs", "fa fa-map-o", "fa fa-map", "fa fa-commenting", "fa fa-commenting-o", "fa fa-houzz", "fa fa-vimeo", "fa fa-black-tie", "fa fa-fonticons", "fa fa-reddit-alien", "fa fa-edge", "fa fa-credit-card-alt", "fa fa-codiepie", "fa fa-modx", "fa fa-fort-awesome", "fa fa-usb", "fa fa-product-hunt", "fa fa-mixcloud", "fa fa-scribd", "fa fa-pause-circle", "fa fa-pause-circle-o", "fa fa-stop-circle", "fa fa-stop-circle-o", "fa fa-shopping-bag", "fa fa-shopping-basket", "fa fa-hashtag", "fa fa-bluetooth", "fa fa-bluetooth-b", "fa fa-percent", "fa fa-gitlab", "fa fa-wpbeginner", "fa fa-wpforms", "fa fa-envira", "fa fa-universal-access", "fa fa-wheelchair-alt", "fa fa-question-circle-o", "fa fa-blind", "fa fa-audio-description", "fa fa-volume-control-phone", "fa fa-braille", "fa fa-assistive-listening-systems", "fa fa-asl-interpreting", "fa fa-american-sign-language-interpreting", "fa fa-deafness", "fa fa-hard-of-hearing", "fa fa-deaf", "fa fa-glide", "fa fa-glide-g", "fa fa-signing", "fa fa-sign-language", "fa fa-low-vision", "fa fa-viadeo", "fa fa-viadeo-square", "fa fa-snapchat", "fa fa-snapchat-ghost", "fa fa-snapchat-square", "fa fa-pied-piper", "fa fa-first-order", "fa fa-yoast", "fa fa-themeisle", "fa fa-google-plus-circle", "fa fa-google-plus-official", "fa fa-fa", "fa fa-font-awesome");
    }
}