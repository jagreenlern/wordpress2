<?php
/**
 * Template part for displaying posts
 */

?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="blogger">
    <?php $finance_accounting_blog_layout = get_theme_mod( 'finance_accounting_blog_post_layout','Default');
    if($finance_accounting_blog_layout == 'Default' || $finance_accounting_blog_layout == 'Left'){ ?>
      <div class="category">
        <a href="<?php echo esc_url( get_permalink() ); ?>"><?php foreach((get_the_category()) as $category) { echo esc_html($category->cat_name) . ' '; } ?><span class="screen-reader-text"><?php esc_html_e( 'Category','finance-accounting' );?></span></a>
      </div>
      <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if( get_theme_mod( 'finance_accounting_date_hide',true) != '' || get_theme_mod( 'finance_accounting_comment_hide',true) != '' || get_theme_mod( 'finance_accounting_author_hide',true) != '') { ?>
        <div class="post-info">
          <?php if( get_theme_mod( 'finance_accounting_date_hide',true) != '') { ?>
            <i class="fa fa-calendar"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('finance_accounting_blog_post_metabox_seperator') ); ?>
          <?php } ?>
          <?php if( get_theme_mod( 'finance_accounting_author_hide',true) != '') { ?>
            <i class="fa fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><?php echo esc_html( get_theme_mod('finance_accounting_blog_post_metabox_seperator') ); ?>
          <?php } ?>
          <?php if( get_theme_mod( 'finance_accounting_comment_hide',true) != '') { ?>
            <i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','finance-accounting'), __('0 Comments','finance-accounting'), __('% Comments','finance-accounting') ); ?></span>
          <?php } ?>
        </div>
      <?php } ?>
      <div class="post-image">
        <?php 
          if(has_post_thumbnail()) { 
            the_post_thumbnail(); 
          }
        ?>
      </div>
      <?php if(get_theme_mod('finance_accounting_blog_description') == 'Post Content'){ ?>
        <?php the_content(); ?>
      <?php }
      if(get_theme_mod('finance_accounting_blog_description', 'Post Excerpt') == 'Post Excerpt'){ ?>
        <?php if(get_the_excerpt()) { ?>
          <div class="text"><?php $excerpt = get_the_excerpt(); echo esc_html( finance_accounting_string_limit_words( $excerpt, esc_attr(get_theme_mod('finance_accounting_excerpt_number','20')))); ?><?php echo esc_html( get_theme_mod('finance_accounting_post_excerpt_suffix','{...}') ); ?></div>
        <?php } ?>
      <?php }?>
      <?php if( get_theme_mod('finance_accounting_button_text','Continue Reading....') != ''){ ?>
        <a class="post-link" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html(get_theme_mod('finance_accounting_button_text','Continue Reading....'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('finance_accounting_button_text','Continue Reading....'));?></span></a>
      <?php }?>
    <?php }elseif($finance_accounting_blog_layout == 'Image and Content'){ ?>
      <div class="row m-0">
        <?php if(has_post_thumbnail()) { ?>
          <div class="post-image col-lg-6 col-md-12">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php }?>
        <div class="<?php if(has_post_thumbnail()) { ?>col-lg-6 col-md-12 pl-0" <?php } else { ?>col-lg-12 col-md-12" <?php } ?>>
          <div class="category">
            <a href="<?php echo esc_url( get_permalink() ); ?>"><?php foreach((get_the_category()) as $category) { echo esc_html($category->cat_name) . ' '; } ?><span class="screen-reader-text"><?php esc_html_e( 'Category','finance-accounting' );?></span></a>
          </div>
          <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
          <?php if( get_theme_mod( 'finance_accounting_date_hide',true) != '' || get_theme_mod( 'finance_accounting_comment_hide',true) != '' || get_theme_mod( 'finance_accounting_author_hide',true) != '') { ?>
            <div class="post-info">
              <?php if( get_theme_mod( 'finance_accounting_date_hide',true) != '') { ?>
                <i class="fa fa-calendar"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('finance_accounting_blog_post_metabox_seperator') ); ?>
              <?php } ?>
              <?php if( get_theme_mod( 'finance_accounting_author_hide',true) != '') { ?>
                <i class="fa fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><?php echo esc_html( get_theme_mod('finance_accounting_blog_post_metabox_seperator') ); ?>
              <?php } ?>
              <?php if( get_theme_mod( 'finance_accounting_comment_hide',true) != '') { ?>
                <i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','finance-accounting'), __('0 Comments','finance-accounting'), __('% Comments','finance-accounting') ); ?></span>
              <?php } ?>
            </div>
          <?php } ?>
          <?php if(get_theme_mod('finance_accounting_blog_description') == 'Post Content'){ ?>
            <?php the_content(); ?>
          <?php }
          if(get_theme_mod('finance_accounting_blog_description', 'Post Excerpt') == 'Post Excerpt'){ ?>
            <?php if(get_the_excerpt()) { ?>
              <div class="text"><?php $excerpt = get_the_excerpt(); echo esc_html( finance_accounting_string_limit_words( $excerpt, esc_attr(get_theme_mod('finance_accounting_excerpt_number','20')))); ?><?php echo esc_html( get_theme_mod('finance_accounting_post_excerpt_suffix','{...}') ); ?></div>
            <?php } ?>
          <?php }?>
          <?php if( get_theme_mod('finance_accounting_button_text','Continue Reading....') != ''){ ?>
            <a class="post-link" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html(get_theme_mod('finance_accounting_button_text','Continue Reading....'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('finance_accounting_button_text','Continue Reading....'));?></span></a>
          <?php }?>
        </div>
      </div>
    <?php } ?>
  </div>
</article>