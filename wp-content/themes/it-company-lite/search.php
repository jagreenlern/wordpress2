<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package IT Company Lite
 */

get_header(); ?>

<main id="maincontent" role="main">
    <div class="middle-align container">
        <?php
            $it_company_lite_theme_lay = get_theme_mod( 'it_company_lite_theme_options','Right Sidebar');
            if($it_company_lite_theme_lay == 'Left Sidebar'){ ?>
                <div class="row m-0">
                    <div class="col-lg-4 col-md-4 sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div id="our-services" class="services col-lg-8 col-md-8">
                        <h1 class="entry-title"><?php /* translators: %s: search term */
                        printf( esc_html__( 'Results For: %s','it-company-lite'), esc_html( get_search_query() ) ); ?></h1> 
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format()); 
                            endwhile;

                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'it_company_lite_blog_pagination_hide_show',true) != '') { ?>
                            <div class="navigation">
                              <?php it_company_lite_blog_posts_pagination(); ?>
                              <div class="clearfix"></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="clearfix"></div>
            <?php }else if($it_company_lite_theme_lay == 'Right Sidebar'){ ?>
                <div class="row m-0">
                    <div id="our-services" class="services col-lg-8 col-md-8"> 
                        <h1 class="entry-title"><?php /* translators: %s: search term */
                        printf( esc_html__( 'Results For: %s','it-company-lite'), esc_html( get_search_query() ) ); ?></h1>
                        <?php if ( have_posts() ) :
                        /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format()); 
                            endwhile;

                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'it_company_lite_blog_pagination_hide_show',true) != '') { ?>
                            <div class="navigation">
                              <?php it_company_lite_blog_posts_pagination(); ?>
                              <div class="clearfix"></div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-lg-4 col-md-4 sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
                </div>
            <?php }else if($it_company_lite_theme_lay == 'One Column'){ ?>
                <div id="our-services" class="services">
                    <h1 class="entry-title"><?php /* translators: %s: search term */
                        printf( esc_html__( 'Results For: %s','it-company-lite'), esc_html( get_search_query() ) ); ?></h1> 
                    <?php if ( have_posts() ) :
                    /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content',get_post_format()); 
                        endwhile;

                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'it_company_lite_blog_pagination_hide_show',true) != '') { ?>
                        <div class="navigation">
                          <?php it_company_lite_blog_posts_pagination(); ?>
                          <div class="clearfix"></div>
                        </div>
                    <?php } ?>
                </div>
            <?php }else if($it_company_lite_theme_lay == 'Three Columns'){ ?>
                <div class="row m-0">
                    <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div id="our-services" class="services col-lg-6 col-md-6">
                        <h1 class="entry-title"><?php /* translators: %s: search term */
                        printf( esc_html__( 'Results For: %s','it-company-lite'), esc_html( get_search_query() ) ); ?></h1> 
                        <?php if ( have_posts() ) :
                        /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format()); 
                            endwhile;

                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'it_company_lite_blog_pagination_hide_show',true) != '') { ?>
                            <div class="navigation">
                              <?php it_company_lite_blog_posts_pagination(); ?>
                              <div class="clearfix"></div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
                </div>
            <?php }else if($it_company_lite_theme_lay == 'Four Columns'){ ?>
                <div class="row m-0">
                    <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div id="our-services" class="services col-lg-3 col-md-3">
                        <h1 class="entry-title"><?php /* translators: %s: search term */
                        printf( esc_html__( 'Results For: %s','it-company-lite'), esc_html( get_search_query() ) ); ?></h1> 
                        <?php if ( have_posts() ) :
                        /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format()); 
                            endwhile;

                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'it_company_lite_blog_pagination_hide_show',true) != '') { ?>
                            <div class="navigation">
                              <?php it_company_lite_blog_posts_pagination(); ?>
                              <div class="clearfix"></div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
                    <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-3');?></div>
                </div>
            <?php }else if($it_company_lite_theme_lay == 'Grid Layout'){ ?>
                <div class="row m-0">
                    <div id="our-services" class="services col-lg-9">
                        <h1 class="entry-title"><?php /* translators: %s: search term */
                        printf( esc_html__( 'Results For: %s','it-company-lite'), esc_html( get_search_query() ) ); ?></h1> 
                        <div class="row m-0">
                            <?php if ( have_posts() ) :
                            /* Start the Loop */
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/grid-layout' ); 
                                endwhile;

                                else :
                                    get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                        </div>
                        <?php if( get_theme_mod( 'it_company_lite_blog_pagination_hide_show',true) != '') { ?>
                            <div class="navigation">
                              <?php it_company_lite_blog_posts_pagination(); ?>
                              <div class="clearfix"></div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-lg-3 sidebar" ><?php dynamic_sidebar('sidebar-1');?></div>
                </div>
            <?php }else{ ?>
               <div class="row m-0">
                    <div id="our-services" class="services col-lg-8 col-md-8"> 
                        <h1 class="entry-title"><?php /* translators: %s: search term */
                        printf( esc_html__( 'Results For: %s','it-company-lite'), esc_html( get_search_query() ) ); ?></h1>
                        <?php if ( have_posts() ) :
                        /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format()); 
                            endwhile;

                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'it_company_lite_blog_pagination_hide_show',true) != '') { ?>
                            <div class="navigation">
                              <?php it_company_lite_blog_posts_pagination(); ?>
                              <div class="clearfix"></div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-lg-4 col-md-4 sidebar" ><?php dynamic_sidebar('sidebar-1');?></div>
                </div>
            <?php } ?>
        <div class="clearfix"></div>
    </div>
</main>

<?php get_footer(); ?>