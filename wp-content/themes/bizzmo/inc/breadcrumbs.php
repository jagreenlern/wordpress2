<?php
function bizzmo_breadcrumbs() {

       $bizzmo_showonhome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $bizzmo_showcurrent = 1;
    if (is_home() || is_front_page()) {

            echo '<ul id="breadcrumbs" class="banner-link text-center"><li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'bizzmo') . '</a></li></ul>';
    } else {

        echo '<ul id="breadcrumbs" class="banner-link text-center"><li><a href="' . esc_url(home_url('/')). '">' . esc_html__('Home', 'bizzmo') . '</a> ';
        if (is_category()) {
            $bizzmo_thisCat = get_category(get_query_var('cat'), false);
            if ($bizzmo_thisCat->parent != 0)
                echo esc_html(get_category_parents($bizzmo_thisCat->parent, TRUE, ' '));
            echo  esc_html__('Archive by category', 'bizzmo') . ' " ' . single_cat_title('', false) . ' "';
        }   elseif (is_search()) {
            echo  esc_html__('Search Results For ', 'bizzmo') . ' " ' . get_search_query() . ' "';
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
                $bizzmo_post_type = get_post_type_object(get_post_type());
                $bizzmo_slug = $bizzmo_post_type->rewrite;
                echo '<a href="' . esc_url(home_url('/'. $bizzmo_slug['slug'] . '/')) .'">' . esc_html($bizzmo_post_type->labels->singular_name) . '</a>';
                if ($bizzmo_showcurrent == 1)
                    echo  esc_html(get_the_title()) ;
            } else {
                $bizzmo_cat = get_the_category();
                $bizzmo_cat = $bizzmo_cat[0];
                $bizzmo_cats = get_category_parents($bizzmo_cat, TRUE, ' ');
                if ($bizzmo_showcurrent == 0)
                    $bizzmo_cats =
                            preg_replace("#^(.+)\s\s$#", "$1", $bizzmo_cats);
                echo $bizzmo_cats;
                if ($bizzmo_showcurrent == 1)
                    echo  esc_html(get_the_title());
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $bizzmo_post_type = get_post_type_object(get_post_type());
            echo esc_html($bizzmo_post_type->labels->singular_name );
        } elseif (is_page()) {
            if ($bizzmo_showcurrent == 1)
                echo esc_html(get_the_title());
        } elseif (is_page() && $post->post_parent) {
            $bizzmo_parent_id = $post->post_parent;
            $bizzmo_breadcrumbs = array();
            while ($bizzmo_parent_id) {
                $bizzmo_page = get_page($bizzmo_parent_id);
                $bizzmo_breadcrumbs[] = '<a href="' . esc_url(get_permalink($bizzmo_page->ID)) . '">' . esc_html(get_the_title($bizzmo_page->ID)) . '</a>';
                $bizzmo_parent_id = $bizzmo_page->post_parent;
            }
            $bizzmo_breadcrumbs = array_reverse($bizzmo_breadcrumbs);
            for ($bizzmo_i = 0; $bizzmo_i < count($bizzmo_breadcrumbs); $bizzmo_i++) {
                echo $bizzmo_breadcrumbs[$bizzmo_i];
                if ($bizzmo_i != count($bizzmo_breadcrumbs) - 1)
                    echo ' ';
            }
            if ($bizzmo_showcurrent == 1)
                echo esc_html(get_the_title());
        } elseif (is_tag()) {
            echo  esc_html__('Posts tagged', 'bizzmo') . ' " ' . esc_html(single_tag_title('', false)) . ' "';
        } elseif (is_author()) {
            global $author;
            $bizzmo_userdata = get_userdata($author);
            echo  esc_html__('Articles Published by', 'bizzmo') . ' " ' . esc_html($bizzmo_userdata->display_name ). ' "';
        } elseif (is_404()) {
            echo esc_html__('Error 404', 'bizzmo') ;
        }

        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
            printf( /* translators: %s is search query variable*/ esc_html__(' ( Page %s )', 'bizzmo'),esc_html(get_query_var('paged')) );
        }

        
        echo '</li></ul>';
    }
}