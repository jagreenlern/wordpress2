<?php
/**
 * Template part for displaying section of About Us content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @subpackage bizblack
 * @since 1.0 
 */

$bizblack_enable_about_us_section = get_theme_mod( 'bizblack_enable_about_us_section', true );
$bizblack_about_button_label1 = get_theme_mod( 'bizblack_about_button_label1');
$bizblack_about_button_link1 = get_theme_mod( 'bizblack_about_button_link1');

if($bizblack_enable_about_us_section==true ) {
 

$bizblack_about_page = get_theme_mod( 'bizblack_about_page' );

if( !empty( $bizblack_about_page ) ) {

	$page_args['page_id'] = absint( $bizblack_about_page );

	$page_query = new WP_Query( $page_args );

	if( $page_query->have_posts() ) {
?>
 
	 <!--  about start-->
  <section class="about-2 bg-w sp-100">
	<?php
		while( $page_query->have_posts() ) {
		$page_query->the_post();
	?>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="all-title text-left">
            <h3 class="sec-title text-center">
              <?php the_title(); ?>
            </h3>
          </div>
          <?php the_content(); ?>
		  <?php if($bizblack_about_button_label1): ?>
			<a href="<?php echo esc_url($bizblack_about_button_link1); ?>" class="btn btn-one mt-3"><?php echo esc_html($bizblack_about_button_label1); ?></a>
		  <?php endif; ?>		
        </div>
        <div class="col-lg-6">
          <div class="video-2">
            <div class="vid-box2">
              <?php if(has_post_thumbnail()) {
		        echo the_post_thumbnail(); 
			  }
			  else
			  {?>
				  <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/bg.jpg">
				<?php
			  }
			  ?>
            </div>
          </div>
        </div>
      </div>
    </div>
	<?php
		}
	wp_reset_postdata();
	?>
  </section>
	
	
	
<?php
	}
}
}

if(have_posts()) : 
  while(have_posts()) : the_post();
    if(get_the_content()!= "")
    {
    ?>
      <section class="blog sp-100">
          <div class="container">
            <div class="row">
          <?php the_content(); ?> 
        </div>
        </div> 
      </section>  
    <?php 
    } 
  endwhile;
endif; 

?>