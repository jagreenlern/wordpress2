<?php 
/**
 * Template part for displaying additional_infos Section
 *
 *@package Meilleur Business
 */

$ad_content_type                    = meilleur_business_get_option( 'ad_content_type' );
$number_of_column                   = meilleur_business_get_option( 'number_of_column' );
$number_of_items                    = meilleur_business_get_option( 'number_of_items' );
$additional_info_section_title      = meilleur_business_get_option( 'additional_info_section_title' );
$additional_info_section_subtitle   = meilleur_business_get_option( 'additional_info_section_subtitle' );

for( $i=1; $i<=$number_of_items; $i++ ) :
    $additional_info_posts[] = absint(meilleur_business_get_option( 'additional_info_'.$i ) );
endfor;
?>

    <?php if(!empty($additional_info_section_title)):?>
        <div class="section-header">
            <h2 class="section-title"><?php echo esc_html($additional_info_section_title);?></h2>
            <h3 class="section-subtitle"><?php echo esc_html($additional_info_section_subtitle);?></h3>
        </div><!-- .section-header -->
    <?php endif;?>
    <?php if( $ad_content_type == 'ad_page' ) : ?>
        <div class="section-content clear col-<?php echo esc_attr( $number_of_column ); ?>">
            <?php $args = array (
                'post_type' => 'page',
                'post_per_page'  => count( $additional_info_posts ),
                'post__in'       => $additional_info_posts,
                'orderby'        =>'post__in',
            );
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1; $j=0;  
                while ($loop->have_posts()) : $loop->the_post(); $i++; $j++;
                $additional_info_icons[$j] = meilleur_business_get_option( 'additional_info_icon_'.$j ); ?>        
                
                <article>
                    <div class="additional-info-item clear">
                        <?php if( !empty( $additional_info_icons[$j] ) ) : ?>
                            <div class="icon-container">
                                <a href="<?php the_permalink();?>"><i class="<?php echo esc_attr( $additional_info_icons[$j] )?>"></i></a>
                            </div><!-- .icon-container -->
                        <?php endif; ?>
                        
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                        </header>

                        <div class="entry-content">
                            <?php
                                $excerpt = meilleur_business_the_excerpt( 15 );
                                echo wp_kses_post( wpautop( $excerpt ) );
                            ?>
                        </div><!-- .entry-content -->
                    </div><!-- .additional-info-item -->
                </article>

              <?php endwhile;?>
              <?php wp_reset_postdata(); ?>
            <?php endif;?>
        </div>
    <?php endif;