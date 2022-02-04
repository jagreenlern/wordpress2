<?php
/**
 * The template part for top header
 *
 * @package VW Dentist 
 * @subpackage vw_dentist
 * @since VW Dentist 1.0
 */
?>

<?php if( get_theme_mod( 'vw_dentist_topbar_hide_show', false) != '' || get_theme_mod( 'vw_dentist_resp_topbar_hide_show', false) != '') { ?>
  <?php if( get_theme_mod( 'vw_dentist_header_call',true) != '' || get_theme_mod( 'vw_dentist_header_email',true) != '' || get_theme_mod( 'vw_dentist_header_address',true) != '') { ?>
    <div id="topbar">
      <div class="row m-0">
        <div class="col-lg-8 col-md-8">
          <?php if( get_theme_mod( 'vw_dentist_header_call') != '') { ?>
            <span><i class="<?php echo esc_attr(get_theme_mod('vw_dentist_call_icon','fas fa-phone')); ?>"></i><?php echo esc_html(get_theme_mod('vw_dentist_header_call',''));?></span>
          <?php }?>
          <?php if( get_theme_mod( 'vw_dentist_header_email') != '') { ?>
            <span><i class="<?php echo esc_attr(get_theme_mod('vw_dentist_email_icon','fas fa-envelope')); ?>"></i><?php echo esc_html(get_theme_mod('vw_dentist_header_email',''));?></span>
          <?php }?>
          <?php if( get_theme_mod( 'vw_dentist_header_address') != '') { ?>
            <span><i class="<?php echo esc_attr(get_theme_mod('vw_dentist_location_address_icon','fas fa-hospital')); ?>"></i><?php echo esc_html(get_theme_mod('vw_dentist_header_address',''));?></span>
          <?php }?>
        </div>
        <div class="col-lg-4 col-md-4">
          <?php dynamic_sidebar('social-links'); ?>
        </div>
      </div>
    </div>
  <?php } ?>
<?php } ?>