<?php
/**
 * Displays footer site info
 */

?>
<?php if( get_theme_mod( 'finance_accounting_hide_show_scroll',true) != '' || get_theme_mod( 'finance_accounting_enable_disable_scrolltop', true) != '') { ?>
    <?php $finance_accounting_theme_lay = get_theme_mod( 'finance_accounting_footer_options','Right');
        if($finance_accounting_theme_lay == 'Left align'){ ?>
            <a href="#" class="scrollup left"><i class="fas fa-long-arrow-alt-up"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'finance-accounting' ); ?></span></a>
        <?php }else if($finance_accounting_theme_lay == 'Center align'){ ?>
            <a href="#" class="scrollup center"><i class="fas fa-long-arrow-alt-up"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'finance-accounting' ); ?></span></a>
        <?php }else{ ?>
            <a href="#" class="scrollup"><i class="fas fa-long-arrow-alt-up"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'finance-accounting' ); ?></span></a>
    <?php }?>
<?php }?>
<div class="site-info">
	<div class="container">
		<span><?php finance_accounting_credit(); ?> <?php echo esc_html(get_theme_mod('finance_accounting_footer_text',__('By ThemesEye','finance-accounting'))); ?> </span>
		<span class="footer_text"><?php echo esc_html_e('Powered By WordPress','finance-accounting') ?></span>
	</div>
</div>