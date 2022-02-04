<?php
function bizblack_breadcrumbs() {

       $bizblack_showonhome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $bizblack_showcurrent = 1;
    if (is_home() || is_front_page()) {

            echo '<ul id="breadcrumbs" class="banner-link text-center"><li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'bizblack') . '</a></li></ul>';
    } else {

        echo '<ul id="breadcrumbs" class="banner-link text-center"><li><a href="' . esc_url(home_url('/')). '">' . esc_html__('Home', 'bizblack') . '</a> ';
        if (is_category()) {
            $bizblack_thisCat = get_category(get_query_var('cat'), false);
            if ($bizblack_thisCat->parent != 0)
                echo esc_html(get_category_parents($bizblack_thisCat->parent, TRUE, ' '));
            echo  esc_html__('Archive by category', 'bizblack') . ' " ' . single_cat_title('', false) . ' "';
        }   elseif (is_search()) {
            echo  esc_html__('Search Results For ', 'bizblack') . ' " ' . get_search_query() . ' "';
        } elseif (is_day()) {
            echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a> ';
            echo '<a href="' . esc_url(get_month_link(get_the_time('Y'), get_the_time('m'))) . '">' . esc_html(get_the_time('F') ). '</a> ';
            echo  esc_html(get_the_time('d'));
        } elseif (is_month()) {
            echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a> ';
            echo  esc_html(get_the_time('F')) ;
        } elseif (is_year()) {
            echo esc_html(get_the_time('Y')) ;
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $bizblack_post_type = get_post_type_object(get_post_type());
                $bizblack_slug = $bizblack_post_type->rewrite;
                echo '<a href="' . esc_url(home_url('/'. $bizblack_slug['slug'] . '/')) .'">' . esc_html($bizblack_post_type->labels->singular_name) . '</a>';
                if ($bizblack_showcurrent == 1)
                    echo  esc_html(get_the_title()) ;
            } else {
                $bizblack_cat = get_the_category();
                $bizblack_cat = $bizblack_cat[0];
                $bizblack_cats = get_category_parents($bizblack_cat, TRUE, ' ');
                if ($bizblack_showcurrent == 0)
                    $bizblack_cats =
                            preg_replace("#^(.+)\s\s$#", "$1", $bizblack_cats);
                echo $bizblack_cats;
                if ($bizblack_showcurrent == 1)
                    echo  esc_html(get_the_title());
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $bizblack_post_type = get_post_type_object(get_post_type());
            echo esc_html($bizblack_post_type->labels->singular_name );
        } elseif (is_page()) {
            if ($bizblack_showcurrent == 1)
                echo esc_html(get_the_title());
        } elseif (is_page() && $post->post_parent) {
            $bizblack_parent_id = $post->post_parent;
            $bizblack_breadcrumbs = array();
            while ($bizblack_parent_id) {
                $bizblack_page = get_page($bizblack_parent_id);
                $bizblack_breadcrumbs[] = '<a href="' . esc_url(get_permalink($bizblack_page->ID)) . '">' . esc_html(get_the_title($bizblack_page->ID)) . '</a>';
                $bizblack_parent_id = $bizblack_page->post_parent;
            }
            $bizblack_breadcrumbs = array_reverse($bizblack_breadcrumbs);
            for ($bizblack_i = 0; $bizblack_i < count($bizblack_breadcrumbs); $bizblack_i++) {
                echo $bizblack_breadcrumbs[$bizblack_i];
                if ($bizblack_i != count($bizblack_breadcrumbs) - 1)
                    echo ' ';
            }
            if ($bizblack_showcurrent == 1)
                echo esc_html(get_the_title());
        } elseif (is_tag()) {
            echo  esc_html__('Posts tagged', 'bizblack') . ' " ' . esc_html(single_tag_title('', false)) . ' "';
        } elseif (is_author()) {
            global $author;
            $bizblack_userdata = get_userdata($author);
            echo  esc_html__('Articles Published by', 'bizblack') . ' " ' . esc_html($bizblack_userdata->display_name ). ' "';
        } elseif (is_404()) {
            echo esc_html__('Error 404', 'bizblack') ;
        }

        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
            printf( /* translators: %s is search query variable*/ esc_html__(' ( Page %s )', 'bizblack'),esc_html(get_query_var('paged')) );
        }

        
        echo '</li></ul>';
    }
}