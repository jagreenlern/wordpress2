<?php 
$bizzmo_enable_service_section = get_theme_mod( 'bizzmo_enable_service_section', false );
$bizzmo_service_title = get_theme_mod( 'bizzmo_service_title');
$bizzmo_service_subtitle = get_theme_mod( 'bizzmo_service_subtitle' );
if($bizzmo_enable_service_section==true ) {


        $bizzmo_services_no        = 8;
        $bizzmo_services_pages      = array();
        for( $i = 1; $i <= $bizzmo_services_no; $i++ ) {
             $bizzmo_services_pages[] = get_theme_mod('bizzmo_service_page'.$i); 

        }
        $bizzmo_services_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $bizzmo_services_pages ),
        'posts_per_page' => absint($bizzmo_services_no),
        'orderby' => 'post__in'
        ); 
        $bizzmo_services_query = new WP_Query( $bizzmo_services_args );
      

?>
	<!-- service start-->
	
		<div class="col-12 sp-100-70">
			<div class="all-title">
				<?php
				if(!empty( $bizzmo_service_title ) ) {
				?>
					<h3 class="sec-title">
						<?php echo esc_html( $bizzmo_service_title ); ?>
					</h3>
					<span class="title-line">
						<i></i>
						<i></i>
						<i></i>
					</span>
					<p><?php echo esc_html($bizzmo_service_subtitle); ?></p>
			<?php } ?>
			</div>
		</div>
  
	
    <section class="service-3">
        <div class="service-3slider owl-carousel owl-theme">
            <?php
				$count = 0;
				while($bizzmo_services_query->have_posts() && $count <= 8 ) :
				$bizzmo_services_query->the_post();
			 ?> 
			<div class="service-box3">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="gym">
                <h5><?php the_title(); ?></h5>
            </div>
            <?php
				$count = $count + 1;
				endwhile;
				wp_reset_postdata();
			?> 
        </div>
    </section>
    <!-- service start-->
<?php } ?>