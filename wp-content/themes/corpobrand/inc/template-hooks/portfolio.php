<?php
/**
 * Portfolio hook
 *
 * @package corpobrand
 */

if ( ! function_exists( 'corpobrand_add_portfolio_section' ) ) :
    /**
    * Add portfolio section
    *
    *@since Corpobrand 1.0.0
    */
    function corpobrand_add_portfolio_section() {

        // Check if portfolio is enabled on frontpage
        $portfolio_enable = apply_filters( 'corpobrand_section_status', 'enable_portfolio', 'portfolio_entire_site' );

        if ( ! $portfolio_enable )
            return false;

        // Get portfolio section details
        $section_details = array();
        $section_details = apply_filters( 'corpobrand_filter_portfolio_section_details', $section_details );

        if ( empty( $section_details ) ) 
            return;

        // Render portfolio section now.
        corpobrand_render_portfolio_section( $section_details );
    }
endif;
add_action( 'corpobrand_primary_content_action', 'corpobrand_add_portfolio_section', 60 );


if ( ! function_exists( 'corpobrand_get_portfolio_section_details' ) ) :
    /**
    * portfolio section details.
    *
    * @since Corpobrand 1.0.0
    * @param array $input portfolio section details.
    */
    function corpobrand_get_portfolio_section_details( $input ) {

        $content = array();
        $cat_id = corpobrand_theme_option( 'portfolio_content_category', '' );
        
        $args = array(
            'post_type'         => 'post',
            'cat'               =>  $cat_id,
            'posts_per_page'    => 4,
            'ignore_sticky_posts' => true,
            );                    

        // Run The Loop.
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) : 
            $i = 0;
            while ( $query->have_posts() ) : $query->the_post();
                $page_post['title']     = get_the_title();
                $page_post['url']       = get_the_permalink();
                $page_post['excerpt']   = corpobrand_trim_content( 15 );
                $page_post['image']     = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'post-thumbnail' ) : '';

                // Push to the main array.
                array_push( $content, $page_post );
                $i++;
            endwhile;
        endif;
        wp_reset_postdata();
            
        if ( ! empty( $content ) )
            $input = $content;
       
        return $input;
    }
endif;
// portfolio section content details.
add_filter( 'corpobrand_filter_portfolio_section_details', 'corpobrand_get_portfolio_section_details' );


if ( ! function_exists( 'corpobrand_render_portfolio_section' ) ) :
  /**
   * Start portfolio section
   *
   * @return string portfolio content
   * @since Corpobrand 1.0.0
   *
   */
   function corpobrand_render_portfolio_section( $content_details = array() ) {
        if ( empty( $content_details ) )
            return;

        $title = corpobrand_theme_option( 'portfolio_title', '' );
        $portfolio_auto_slide = corpobrand_theme_option( 'portfolio_auto_slide' );
        $read_more = corpobrand_theme_option( 'portfolio_btn_label', esc_html__( 'Read More', 'corpobrand' ) );

        ?>
    	<div id="portfolio" class="page-section relative">
            <div class="wrapper">
                <?php if ( ! empty( $title ) ) : ?>
                    <div class="section-header align-center">
                        <h2 class="section-title"><?php echo esc_html( $title ); ?></h2>
                    </div><!-- .section-header -->
                <?php endif; ?>

                <div class="section-content portfolio-slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "infinite": true, "speed": 1200, "dots": false, "arrows": true, "autoplay": <?php echo $portfolio_auto_slide ? 'true' : 'false'; ?>, "fade": false, "draggable": true }'>

                        <?php foreach ( $content_details as $content ) : ?>
                            <article class="hentry">
                                <div class="post-wrapper">
                                    <div class="gallery">
                                        <?php if ( ! empty( $content['image'] ) ) : ?>
                                            <div class="featured-image">
                                                <a href="<?php echo esc_url( $content['url'] ); ?>">
                                                    <img src="<?php echo esc_url( $content['image'] ); ?>" alt="<?php echo esc_attr( $content['title'] ); ?>">
                                                </a>
                                                <div class="overlay"></div>
                                                    
                                                <a class="more-btn" href="<?php echo esc_url( $content['url'] ); ?>">
                                                    <span class="screen-reader-text"><?php echo esc_html( $content['title'] ); ?></span>
                                                    <?php echo esc_html( $read_more ); ?>
                                                </a>
                                            </div>
                                        <?php endif; ?> 

                                        <div class="entry-container">
                                            <?php if ( ! empty( $content['title'] ) ) : ?>
                                                <header class="entry-header">
                                                    <h2 class="entry-title"><a href="<?php echo esc_url( $content['url'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h2>
                                                </header>
                                            <?php endif;

                                            if ( ! empty( $content['excerpt'] ) ) : ?>
                                                <div class="entry-content">
                                                    <?php echo esc_html( $content['excerpt'] ); ?>
                                                </div><!-- .entry-content -->
                                            <?php endif; ?>
                                        </div>
                                    </div><!-- .gallery -->
                                </div><!-- .post-wrapper -->
                            </article>
                        <?php endforeach; ?>
                </div><!-- .portfolio-slider -->
            </div><!-- .wrapper -->
        </div><!-- #gallery -->
    <?php 
    }
endif;