<?php
/**
 * Custom widgets.
 *
 * @package PT_Magazine
 */

if ( ! class_exists( 'PT_Magazine_Featured_Column_News' ) ) :

	/**
	 * Featured Column News widget class.
	 *
	 * @since 1.0.0
	 */
	class PT_Magazine_Featured_Column_News extends WP_Widget {

	    function __construct() {
	    	$opts = array(
				'classname'   => 'featured-news-section',
				'description' => esc_html__( 'Widget to display featured news in left side and remaining news at right with thumbnail', 'pt-magazine' ),
    		);

			parent::__construct( 'pt-magazine-featured-column-news', esc_html__( 'PT: Featured Column News', 'pt-magazine' ), $opts );
	    }


	    function widget( $args, $instance ) {

            $title 			= apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

			$mix_category 	= ! empty( $instance['mix_category'] ) ? $instance['mix_category'] : 0;

			$view_all_text	= !empty( $instance['view_all_text'] ) ? $instance['view_all_text'] : '';

			$excerpt_length = !empty( $instance['excerpt_length'] ) ? $instance['excerpt_length'] : 20;

			$post_number    = ! empty( $instance['post_number'] ) ? $instance['post_number'] : 5;

	        echo $args['before_widget']; ?>

	        <div class="featured-news-wrap">

        		<div class="section-title">

			        <?php 

			        if ( ! empty( $title ) ) {
                        echo $args['before_title'] . esc_html( $title ). $args['after_title'];
                    } 

                    if( ! empty( $view_all_text ) ){

						if( absint( $mix_category ) > 0 ){

							$cat_link = get_category_link( $mix_category );

						}else{

							$cat_link = '';

						} ?>

                    	<a href="<?php echo esc_url( $cat_link ); ?>"><?php echo esc_html( $view_all_text ); ?></a>

                    	<?php

                    } ?>
                    
		        </div>

                <div class="inner-wrapper">
        	        <?php

        	        $mix_args = array(
	        				        	'posts_per_page' 		=> absint( $post_number ),
	        				        	'no_found_rows'  		=> true,
	        				        	'post__not_in'          => get_option( 'sticky_posts' ),
	        				        	'ignore_sticky_posts'   => true,
	        			        	);

        	        if ( absint( $mix_category ) > 0 ) {

        	        	$mix_args['cat'] = absint( $mix_category );
        	        	
        	        }


        	        $mix_posts = new WP_Query( $mix_args );

        	        if ( $mix_posts->have_posts() ) :

        	        	$mix_col_count = 1;

						while ( $mix_posts->have_posts() ) :

                            $mix_posts->the_post(); 

                            if( 1 === $mix_col_count ){ ?>

                            	<div class="featured-large-item">
                                
	        	                    <div class="news-item">
	        							<div class="news-thumb">
	        								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('pt-magazine-tall'); ?></a>  
	        							</div><!-- .news-thumb --> 

	        	                       <div class="news-text-wrap">
	        	                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        	                            
	        	                            <span class="posted-date"><?php echo esc_html( get_the_date() ); ?></span>
	                                        <?php 

	                                        $feat_content = pt_magazine_get_the_excerpt( absint( $excerpt_length ) );
	                                        
	                                        echo wp_kses_post($feat_content) ? wpautop( wp_kses_post($feat_content) ) : '';

	                                        ?>

	        	                       </div><!-- .news-text-wrap -->
	        	                    </div><!-- .news-item -->

	        	                </div>

	        	                <div class="featured-small-items">

                            	<?php

                            }else{ ?>

	                                <div class="news-item layout-two">
	                                    <div class="news-thumb">
	                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('pt-magazine-thumbnail'); ?></a>   
	                                    </div><!-- .news-thumb --> 

	                                   <div class="news-text-wrap">
	                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	                                         <span class="posted-date"><?php echo esc_html( get_the_date() ); ?></span>
	                                        
	                                   </div><!-- .news-text-wrap -->
	                                </div><!-- .news-item -->

                            	<?php

                            } 

	                        $mix_col_count++;

						endwhile; 

                        wp_reset_postdata(); ?>

                        </div><!-- .featured-small-items -->

                    <?php endif; ?>
                    
                </div><!-- .inner-wrapper -->

	        </div><!-- .mix-column-news -->

	        <?php
	        echo $args['after_widget'];

	    }

	    function update( $new_instance, $old_instance ) {
	        $instance                    = $old_instance;
			$instance['title']           = sanitize_text_field( $new_instance['title'] );
			$instance['mix_category']    = absint( $new_instance['mix_category'] );
			$instance['view_all_text']   = sanitize_text_field( $new_instance['view_all_text'] );
			$instance['excerpt_length']  = absint( $new_instance['excerpt_length'] );
			$instance['post_number']     = absint( $new_instance['post_number'] );

	        return $instance;
	    }

	    function form( $instance ) {

	        $instance = wp_parse_args( (array) $instance, array(
				'title'         	=> '',
				'mix_category'  	=> '',
				'view_all_text'  	=> esc_html__( 'View All', 'pt-magazine' ),
				'excerpt_length'    => 20,
				'post_number'       => 5,

	        ) );
	        ?>

	        <p>
	            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Layout', 'pt-magazine' ); ?></label>
	            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/includes/widgets/images/featured-column.jpg" class="layout-img">
	        </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'pt-magazine' ); ?></label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
            </p>
	        
	        
	        <p>
	          <label for="<?php echo  esc_attr( $this->get_field_id( 'mix_category' ) ); ?>"><strong><?php esc_html_e( 'Category:', 'pt-magazine' ); ?></strong></label>
				<?php
	            $cat_args = array(
	                'orderby'         => 'name',
	                'hide_empty'      => 0,
	                'class' 		  => 'widefat',
	                'taxonomy'        => 'category',
	                'name'            => $this->get_field_name( 'mix_category' ),
	                'id'              => $this->get_field_id( 'mix_category' ),
	                'selected'        => absint( $instance['mix_category'] ),
	                'show_option_all' => esc_html__( 'All Categories','pt-magazine' ),
	              );
	            wp_dropdown_categories( $cat_args );
				?>
	        </p>

	        <p>
	        	<label for="<?php echo esc_attr( $this->get_field_id( 'view_all_text' ) ); ?>"><strong><?php esc_html_e( 'View All Text:', 'pt-magazine' ); ?></strong></label>
	        	<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'view_all_text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'view_all_text' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['view_all_text'] ); ?>" />
	        	<small>
	        		<?php esc_html_e('Leave this field empty if you want to hide it.', 'pt-magazine'); ?>	
	        	</small>
	        </p>

	        <p>
	            <label for="<?php echo esc_attr( $this->get_field_name('excerpt_length') ); ?>">
	                <?php esc_html_e('Excerpt Length:', 'pt-magazine'); ?>
	            </label>
	            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('excerpt_length') ); ?>" name="<?php echo esc_attr( $this->get_field_name('excerpt_length') ); ?>" type="number" value="<?php echo absint( $instance['excerpt_length'] ); ?>" />
	        </p>

	        <p>
	          <label for="<?php echo esc_attr( $this->get_field_id( 'post_number' ) ); ?>"><strong><?php esc_html_e( 'Number of Posts:', 'pt-magazine' ); ?></strong></label>
	            <?php
	            $this->dropdown_post_number( array(
	                'id'       => $this->get_field_id( 'post_number' ),
	                'name'     => $this->get_field_name( 'post_number' ),
	                'selected' => absint( $instance['post_number'] ),
	                )
	            );
	            ?>
	        </p>
	       
	        <?php
	    }

		function dropdown_post_number( $args ) {
		    $defaults = array(
		        'id'       => '',
		        'name'     => '',
		        'selected' => 0,
		    );

		    $r = wp_parse_args( $args, $defaults );
		    $output = '';

		    $choices = array(
		        '3' => 3,
		        '4' => 4,
		        '5' => 5,
		        '6' => 6,
		        '7' => 7,
		    );

		    if ( ! empty( $choices ) ) {

		        $output = "<select name='" . esc_attr( $r['name'] ) . "' id='" . esc_attr( $r['id'] ) . "'>\n";
		        foreach ( $choices as $key => $choice ) {
		            $output .= '<option value="' . esc_attr( $key ) . '" ';
		            $output .= selected( $r['selected'], $key, false );
		            $output .= '>' . esc_html( $choice ) . '</option>\n';
		        }
		        $output .= "</select>\n";
		    }

		    echo $output;
		}

	}

endif;