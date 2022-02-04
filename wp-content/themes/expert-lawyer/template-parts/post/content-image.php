<?php
/**
 * Template part for displaying posts
 * @package WordPress
 * @subpackage expert-lawyer
 * @since 1.0
 * @version 1.4
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="article_content">
    <?php if(has_post_thumbnail()) { ?>
      <?php the_post_thumbnail(); ?>  
    <?php }?>
    <h3><?php the_title(); ?></h3>
    <div class="metabox"> 
      <span class="entry-author"><i class="fas fa-user"></i><?php the_author(); ?></span>
      <span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date()); ?></span>
      <span class="entry-comments"><i class="fas fa-comments"></i><?php comments_number( __('0 Comments','expert-lawyer'), __('0 Comments','expert-lawyer'), __('% Comments','expert-lawyer') ); ?></span>
    </div>
    <p><?php the_excerpt(); ?></p>
    <div class="read-btn">
      <a href="<?php the_permalink();?>" title="<?php esc_attr_e( 'READ MORE', 'expert-lawyer' ); ?>"><?php esc_html_e('READ MORE','expert-lawyer'); ?>
      </a>
    </div>
    <div class="clearfix"></div> 
  </div>
</article>