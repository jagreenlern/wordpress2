<?php
/*
* Template Name: Contact page
*/	
get_header();
?>
<!-- Contact Us -->
<section id="contact" class="contact section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
         <?php
         $contact_title = absint( get_theme_mod('eduline_contact_page_title') );
         $queried_post = get_post($contact_title);
         ?>
         <h2><?php echo esc_html($queried_post->post_title); ?></h2>
         <p><?php echo esc_html($queried_post->post_content); ?></p>
         <?php wp_reset_postdata(); ?>
       </div>
     </div>
   </div>
 </div>
 <div class="container">
  <div class="contact-head">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <div class="info overlay">
          <div class="info-inner">
            <h2 class="title"><?php the_title();?></h2>
            <?php 
            $address = get_theme_mod('eduline_contact_main_address');
            $phone = get_theme_mod('eduline_contact_phone_number');
            $email = get_theme_mod('eduline_contact_email_address');
            ?>
            <div class="single-info">
              <div class="icon"><i class="fa fa-map"></i></div>
              <div class="content">
                <p><?php echo esc_html($address);?></p>
              </div>
            </div>
            <div class="single-info">
              <div class="icon"><i class="fa fa-phone"></i></div>
              <div class="content">
                <p><?php echo esc_html($phone);?></p>
              </div>
            </div>
            <div class="single-info">
              <div class="icon"><i class="fa fa-envelope"></i></div>
              <div class="content">
                <p><a href="mailto:<?php echo esc_url( 'mailto:' . sanitize_email( $email ) );?>"><?php echo esc_html($email);?></a></p>
              </div>
            </div>
            <!-- Social -->
            <?php 
              $facebook_url   = get_theme_mod('eduline_footer_facebook_url');
              $twitter_url    = get_theme_mod('eduline_footer_twitter_url');
              $linkedin_url   = get_theme_mod('eduline_footer_linkedin_url');
              $pinterest_url  = get_theme_mod('eduline_footer_pinterest_url');
              $youtube_url    = get_theme_mod('eduline_footer_youtube_url');
              if(get_theme_mod('eduline_footer_social_media_enable')):
            ?>
            <ul class="social">
              <?php if($facebook_url):?>
              <li><a href="<?php echo esc_url($facebook_url);?>"><i class="fa fa-facebook"></i></a></li>
              <?php endif;?>

              <?php if($twitter_url):?>
              <li><a href="<?php echo esc_url($twitter_url);?>"><i class="fa fa-twitter"></i></a></li>
              <?php endif;?>

              <?php if($linkedin_url):?>  
              <li><a href="<?php echo esc_url($linkedin_url);?>"><i class="fa fa-linkedin"></i></a></li>
              <?php endif;?>

              <?php if($pinterest_url):?>
              <li><a href="<?php echo esc_url($pinterest_url);?>"><i class="fa fa-pinterest"></i></a></li>
              <?php endif;?>

              <?php if($youtube_url):?>
              <li><a href="<?php echo esc_url($youtube_url);?>"><i class="fa fa-youtube-play"></i></a></li>
              <?php endif;?>

            </ul>
            <!-- End Social -->
          <?php endif;?>
           
            <?php $quotes = get_theme_mod('eduline_contact_page_quotes_text');?>
            <p class="text"><i><?php echo esc_html($quotes);?></i></p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <div class="head-top">
          <?php 
          $getInTouch = get_theme_mod('eduline_contact_page_git_text');
          ?>
          <h2 class="get"><?php echo esc_html($getInTouch);?></h2>
          <div class="form-head">
            <!-- Form -->
            <?php if (get_theme_mod('eduline_contact_form_option')):
              echo do_shortcode(esc_html(get_theme_mod('eduline_contact_form_option')));
            endif; ?> 
            <!--/ End Form -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!--/ End Contact Us -->

<?php 
get_footer(); 
?>