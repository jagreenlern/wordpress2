<?php get_header(); ?>
<!--==================== ti breadcrumb section ====================-->
<?php get_template_part('index','banner'); ?>
<!--==================== main content section ====================-->
<main id="content">
  <div class="container">
    <div class="row">
      <div class="<?php if( !is_active_sidebar('sidebar-1')) { echo "col-md-12"; } else { echo "col-md-9 col-sm-8"; } ?>"> 
      <?php while(have_posts()){the_post(); get_template_part('content',''); ?>
      <?php } ?>
      <div class="col-md-12 text-center">
        <?php //Previous / next page navigation
        the_posts_pagination( array(
        'prev_text' => '<i class="fa fa-angle-left"></i>',
        'next_text' => '<i class="fa fa-angle-right"></i>',
		'screen_reader_text' => ' ' ,
        ) ); ?>
      </div>
      </div>
	    <aside class="col-md-3 col-sm-4">
        <?php get_sidebar(); ?>
      </aside>
    </div>
  </div>
</main>
<?php get_footer(); ?>