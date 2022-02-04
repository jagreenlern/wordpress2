<?php
/**
 * Template part for displaying section of banner content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @subpackage bizzmo
 * @since 1.0 
 */

$bizzmo_enable_banner_section = get_theme_mod( 'bizzmo_enable_banner_section', true );
$bizzmo_banner_image = get_theme_mod( 'bizzmo_banner_image', esc_url(  get_template_directory_uri() . '/assets/images/banner.jpg' ) );

if($bizzmo_enable_banner_section == true ) {

$bizzmo_banner_title = get_theme_mod( 'bizzmo_banner_title','');
$bizzmo_banner_content = get_theme_mod( 'bizzmo_banner_content','');
$bizzmo_banner_button_label1 = get_theme_mod( 'bizzmo_banner_button_label1','');
$bizzmo_banner_button_link1 = get_theme_mod( 'bizzmo_banner_button_link1','');
$bizzmo_vidurl_title = get_theme_mod( 'bizzmo_vidurl_title','');
?>
<?php if($bizzmo_vidurl_title)
{?>
<!-- video background start -->
    <section class="jarallax" data-jarallax data-jarallax-video="<?php echo esc_url($bizzmo_vidurl_title); ?>">
        <div class="hero-sec">
            <div class="overlay">
                <div class="caption">
                    <h3><?php echo esc_html( $bizzmo_banner_content ); ?></h3>
                    <h1><?php echo esc_html( $bizzmo_banner_title ); ?></h1>
                    <?php if(!empty($bizzmo_banner_button_link1) && ($bizzmo_banner_button_label1)) { ?>
						<a class="btn btn-slide" href="<?php echo esc_url( $bizzmo_banner_button_link1 ); ?>"><?php echo esc_html( $bizzmo_banner_button_label1 ); ?></a>
					 <?php } ?>
                </div>
            </div>
        </div>
    </section>
   <!-- video background end -->
<?php } 
else
{?>
 <section style="background:transparent url('<?php echo esc_url( $bizzmo_banner_image );?>') no-repeat center center /cover">
	<div class="hero-sec">
		<div class="overlay">
			<div class="caption">
				<h3><?php echo esc_html( $bizzmo_banner_content ); ?></h3>
				<h1><?php echo esc_html( $bizzmo_banner_title ); ?></h1>
				<?php if(!empty($bizzmo_banner_button_link1) && ($bizzmo_banner_button_label1)) { ?>
					<a class="btn btn-slide" href="<?php echo esc_url( $bizzmo_banner_button_link1 ); ?>"><?php echo esc_html( $bizzmo_banner_button_label1 ); ?></a>
				 <?php } ?>
			</div>
		</div>
	</div>
</section>
<?php
}
?>
<?php } ?>