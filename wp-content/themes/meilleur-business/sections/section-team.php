<?php 
/**
 * Template part for displaying team Section
 *
 *@package Meilleur Business
 */

    $team_title             = meilleur_business_get_option( 'team_title' );
    $team_subtitle          = meilleur_business_get_option( 'team_subtitle' );
    $ts_content_type        = meilleur_business_get_option( 'ts_content_type' );
    $number_of_ts_column    = meilleur_business_get_option( 'number_of_ts_column' );
    $number_of_ts_items     = meilleur_business_get_option( 'number_of_ts_items' );

    for( $i=1; $i<=$number_of_ts_items; $i++ ) :
        $teams_page_posts[] = absint(meilleur_business_get_option( 'teams_page_'.$i ) );
    endfor;
    ?>

    <?php if(!empty($team_title)):?>
        <div class="section-header">
            <h2 class="section-title"><?php echo esc_html($team_title);?></h2>
            <h3 class="section-subtitle"><?php echo esc_html($team_subtitle);?></h3>
        </div><!-- .section-header -->
    <?php endif;?>
    <?php if( $ts_content_type == 'ts_page' ) : ?>
    <div class="section-content col-<?php echo esc_attr( $number_of_ts_column ); ?>">
        <?php $args = array (
            'post_type'     => 'page',
            'post_per_page' => count( $teams_page_posts ),
            'post__in'      => $teams_page_posts,
            'orderby'       =>'post__in',
        );        
        $loop = new WP_Query($args);                        
        if ( $loop->have_posts() ) :
        $i=-1;  
            while ($loop->have_posts()) : $loop->the_post(); $i++;?>
            
            <article>
                <div class="team-wrapper">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="featured-image">
                            <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url(); ?>"/></a>
                        </div><!-- .featured-image -->
                    <?php endif; ?>

                    <div class="entry-container">
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                        </header>

                        <div class="entry-content">
                            <?php
                                $excerpt = meilleur_business_the_excerpt( 15 );
                                echo wp_kses_post( wpautop( $excerpt ) );
                            ?>
                        </div><!-- .entry-content -->
                    </div><!-- .entry-container -->
                </div><!-- .team-wrapper -->
            </article>

          <?php endwhile;?>
          <?php wp_reset_postdata(); ?>
        <?php endif;?>
    </div>
    <?php endif;