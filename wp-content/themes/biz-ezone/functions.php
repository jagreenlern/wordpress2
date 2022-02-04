<?php
/**
 * Biz Ezone Functions
*/

add_action( 'wp_enqueue_scripts', 'biz_ezone_enqueue_styles' );
function biz_ezone_enqueue_styles() {
    wp_enqueue_style( 'biz-ezone', get_template_directory_uri() . '/style.css' );
}

function biz_ezone_scripts(){
    
    wp_register_script( 'biz-ezone-custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery', 'business-ezone-custom-js' ), '20160929', true );
    
    wp_enqueue_script( 'biz-ezone-custom-js' );
    
}
add_action( 'wp_enqueue_scripts', 'biz_ezone_scripts' );

/**
 * Use parent theme setting in child theme without loosing already set options.
 * @link https://core.trac.wordpress.org/ticket/27177#comment:3
*/
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
         update_option( 'theme_mods_' . get_template(), $value );
         return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

/** Template function */

if( ! function_exists( 'business_ezone_slider' ) ) :
/**
 * Home Page Slider Section
 * 
 * @since 1.0.1
*/
function business_ezone_slider(){
    global $business_ezone_default_post;
    
    $slider_enable      = get_theme_mod( 'business_ezone_ed_slider','1' );
    $slider_caption     = get_theme_mod( 'business_ezone_slider_caption', '1' );
    $slider_readmore    = get_theme_mod( 'business_ezone_slider_readmore', __( 'Learn More', 'biz-ezone' ) );
    $slider_contact     = get_theme_mod( 'business_ezone_slider_contact_text', __( 'Contact Us', 'biz-ezone' ) );
    $slider_contact_url = get_theme_mod( 'business_ezone_slider_contact_url', '#' );
   
    if( $slider_enable ){
        echo '<section id="banner" class="banner">';
            echo '<div class="fadeout owl-carousel owl-theme clearfix">';
            for( $i=1; $i<=3; $i++){  
                $business_ezone_slider_post_id = get_theme_mod( 'business_ezone_slider_post_'.$i, $business_ezone_default_post ); 
                if( $business_ezone_slider_post_id ){
                    $qry = new WP_Query ( array( 'p' => absint( $business_ezone_slider_post_id ) ) );            
                    if( $qry->have_posts() ){ 
                        while( $qry->have_posts() ){
                        $qry->the_post();
                            ?>
                            <div class="item">
                                <?php 
                                if( has_post_thumbnail() ){ 
                                    the_post_thumbnail( 'business-ezone-slider' );
                                }else{
                                    echo '<img src="'. esc_url( get_template_directory_uri() ).'/images/banner.png">';
                                } 
                                        if( $slider_caption ){ ?>
                                            <div class="banner-text">
                                                <div class="banner-item-holder">
                                                    <strong class="title"><h1><?php the_title(); ?></h1></strong>
                                                    <?php the_excerpt(); ?>
                                                    <div class="button-holder">
                                                        <?php if( $slider_readmore ){ ?> 
                                                            <a class="btn blank" href="<?php the_permalink(); ?>">
                                                            <?php echo esc_html( $slider_readmore );?></a>
                                                        <?php } 
                                                            if( $slider_contact && $slider_contact_url ){ ?> 
                                                            <a class="btn white" href="<?php echo esc_url( $slider_contact_url);  ?>">
                                                            <?php echo esc_html( $slider_contact ); ?></a>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php } ?>
                                </div>
                        <?php 
                        }
                    }
                }
            }
            wp_reset_postdata();  
            echo '</div>';
        echo '</section>';
    }    
}
endif;



if( ! function_exists( 'business_ezone_welcome' ) ) :
/**
 * Home Page welcome Section
 * 
 * @since 1.0.1
*/
function business_ezone_welcome(){
    global $business_ezone_default_page;
    
    $welcome_enable     = get_theme_mod( 'business_ezone_ed_welcome_section','1' );
    if( $welcome_enable ){
        echo '<section id="about" class="about">';
            echo '<div class="container">';
                if( have_posts() ){
                    echo '<div class="row">';
                        while( have_posts() ){
                            the_post();
                        ?>
                            <div class="about-item">
                                <?php 
                                    if( has_post_thumbnail() ){ the_post_thumbnail( 'business-ezone-welcome' ); } 

                                    the_title('<h1 class="section-title">', '</h1>');
                                    the_content(); 
                                ?>
                            </div>
                            
                        <?php
                        }
                    echo '</div>'; 
                }
                wp_reset_postdata();  
                
            echo '</div>'; 
        echo '</section>';     
    }    
    
}

endif;

if( ! function_exists( 'business_ezone_testimonial' ) ) :
/**
 * Home Page testimonials Section
 * 
 * @since 1.0.1
*/
function business_ezone_testimonial(){
    global $business_ezone_default_page;
    
    $testimonial_enable    = get_theme_mod( 'business_ezone_ed_testimonials_section', '1' );
    $testimonial_title     = get_theme_mod( 'business_ezone_testimonials_section_title', $business_ezone_default_page );  
    $testimonial_category  = get_theme_mod( 'business_ezone_testimonial_category' ); 
   
    if( $testimonial_enable ){
        $args = array( 
            'post_type'          => 'post', 
            'post_status'        => 'publish',
            'posts_per_page'     => 6,        
            'ignore_sticky_post' => true  
        );

        if( $testimonial_category ){
            $args[ 'cat' ] = absint( $testimonial_category );
        }
        $qry = new WP_Query( $args );

        echo '<section id="testimonial">';
            echo '<div class="container">';

            if( $testimonial_title ) {  business_ezone_template_header( $testimonial_title ); }
           
                echo '<div class="row">';
                    echo '<div class="testimonial-slider owl-carousel owl-theme clearfix">';
                    if( $qry->have_posts() ){ 
                        while( $qry->have_posts() ){
                            $qry->the_post(); 
                        ?>
                        
                        <div class="item">
                            <div class="testimonial-text">
                                <blockquote>
                                   <?php the_content(); ?>
                                </blockquote>
                            </div>
                            <div class="testimonial-thumbnail">
                                <?php if( has_post_thumbnail() ){ the_post_thumbnail( 'thumbnail' ); }
                                else{
                                    echo '<img src="'. esc_url( get_template_directory_uri() ) .'/images/team-profile-non.jpg">';
                                } ?>
                                <div class="testimonial-info">
                                    <h3><?php the_title(); ?></h3>
                                    <span class="testimonial-designation"><?php if( has_excerpt() ){ the_excerpt(); } ?></span>
                                </div>
                            </div>
                        </div>

                        <?php
                        }
                    }
                    wp_reset_postdata();  
                    echo '</div>'; 
                echo '</div>'; 
            echo '</div>'; 
        echo '</section>';     
    }    
 
}
endif;



if( ! function_exists( 'business_ezone_featured' ) ) :
/**
 * Home Page featured Section
 * 
 * @since 1.0.1
*/
function business_ezone_featured(){
global $business_ezone_default_post;
    
    $featured_enable     = get_theme_mod( 'business_ezone_ed_featured_section', '1' );
    $featured_post_icon   = get_theme_mod( 'business_ezone_ed_featured_icon', '1' );

    if( $featured_enable ){
        echo '<section id="featured" class="featured">';
            echo '<div class="container">';
                echo '<div class="row">';
                for( $i = 1; $i <= 3; $i++ ){
                    $business_ezone_featured_post_id = get_theme_mod( 'business_ezone_feature_post_'.$i, $business_ezone_default_post ); 
                    $business_ezone_featured_page_icon = get_theme_mod( 'business_ezone_feature_icon_'.$i, 'fa-bell');

                    if( $business_ezone_featured_post_id ){
                    $qry = new WP_Query ( array( 'p' => absint( $business_ezone_featured_post_id ) ) );
                        if( $qry->have_posts() ){
                            while( $qry->have_posts() ){
                                $qry->the_post();
                            ?>
                                <div class="col-4 featured-item">
                                    <?php
                                        if( has_post_thumbnail() &&  ! $featured_post_icon ){ 
                                            echo '<a href="' . esc_url( get_the_permalink() ) .'">';
                                                the_post_thumbnail( 'business-ezone-recent-post' ); 
                                            echo '</a>';
                                        }else{
                                            echo '<a href="' . esc_url( get_the_permalink() ) .'">';
                                                echo '<i class="fa ' . esc_attr( $business_ezone_featured_page_icon ) .'"></i>';
                                            echo '</a>';
                                        } 
                                    ?>
                                        <a href="<?php the_permalink(); ?>"><?php the_title('<h3>','</h3>'); ?></a>
                                        <?php the_excerpt(); ?>
                                </div>
                            <?php
                            }
                        }
                        wp_reset_postdata();  
                    }
                } 
                echo '</div>'; 
            echo '</div>'; 
        echo '</section>';  
    }   

}

endif;

if( ! function_exists( 'business_ezone_cta' ) ) :
/**
 * Home Page cta Section
 * 
 * @since 1.0.1
*/
function business_ezone_cta(){
    global $business_ezone_default_page;
    $cta_enable  = get_theme_mod( 'business_ezone_ed_cta_section', '1' );
    $cta_page    = get_theme_mod( 'business_ezone_cta_section_page', $business_ezone_default_page ); 
    $cta_one     = get_theme_mod( 'business_ezone_cta_section_button_one', __( 'About Us', 'biz-ezone' ) ); 
    $cta_one_url = get_theme_mod( 'business_ezone_cta_button_one_url', '#' ); 
    $cta_two     = get_theme_mod( 'business_ezone_cta_section_button_two', __( 'Contact Us', 'biz-ezone' )); 
    $cta_two_url = get_theme_mod( 'business_ezone_cta_button_two_url', '#' ); 

    if( $cta_page && $cta_enable ){
        $qry = new WP_Query ( array( 
            'post_type'     => 'page', 
            'p'             => absint( $cta_page ) 
        ) );

            if( $qry->have_posts() ){
                while( $qry->have_posts() ){
                    $qry->the_post();
                ?>
               <section id="cta" class="cta" <?php if( has_post_thumbnail() ) echo 'style="background: url(' . esc_url( get_the_post_thumbnail_url() ) . ')no-repeat; background-size: cover; background-position: center; background-attachment: fixed;"';?> >
                    <div class="container">
                        <div class="row">
                            <?php
                                the_title('<h1>', '</h1>');
                                the_content(); 
                            ?>
                            <div class="cta-btn">
                                <?php 
                                    if( $cta_one && $cta_one_url ) { 
                                        echo '<a class="btn blue" href="' . esc_url( $cta_one_url ) . '">';
                                            echo esc_html( $cta_one ); 
                                        echo '</a>';
                                    } 
                                    if( $cta_two && $cta_two_url ) { 
                                        echo '<a class="btn green" href="' . esc_url( $cta_two_url ) . '">';
                                            echo esc_html( $cta_two ); 
                                        echo '</a>';
                                    } 
                                ?>
                            </div>
                            
                        </div>
                    </div> 
                </section>          
                <?php
                }
            }
        wp_reset_postdata();  
    }    
}

endif;