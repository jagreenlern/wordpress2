<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @subpackage bizzmo
 * @since bizzmo 1.0
 */

?>

<?php
	if( ! is_front_page() ) {
?>             
			</div> 
		</div> 
	 </div> 
<?php
	}
/*
 * bizzmo_footer hooks
 * 
 * @hooked - bizzmo_footer_start - 5
 * @hooked - bizzmo_footer_site_info - 10
 * @hooked - bizzmo_footer_nav_menu - 15
 * @hooked - bizzmo_footer_end - 20
 *
 */
do_action( 'bizzmo_footer' );
 if( is_front_page() ){
		echo '</div>';
	} ?>

</div> 

<?php wp_footer(); ?>

</body>
</html>