<?php
/**
 * Template for displaying search forms
 *
 * @package Kids Online Store
 */

?>

<form role="search" method="get" class="search-from" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="form-group mx-sm-1 mb-2 search-div">
    	<input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'kids-online-store' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php esc_attr_x( 'Search for:', 'label', 'kids-online-store' ); ?>">
    </div>
    <input type="submit" class="search-submit btn btn-primary mb-2" value="<?php echo esc_attr_x( 'Search', 'submit button', 'kids-online-store' ); ?>">
</form>