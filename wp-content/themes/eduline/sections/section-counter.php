<?php if(get_theme_mod('eduline_counter_enable')):?>
<!-- Fun Facts -->
<div class="fun-facts">
	<div class="container">
		<div class="row">
			<?php for ($i=1;$i<=4;$i++) {
			$counter_items[$i]['icon'] = get_theme_mod( 'eduline_counter_icon_'.$i);
			$counter_items[$i]['number'] = get_theme_mod( 'eduline_counter_number_'.$i);
			$counter_items[$i]['title'] = get_theme_mod( 'eduline_counter_title_'.$i);
		}
		if( $counter_items  ){ 
			foreach( $counter_items as $counter ){ ?>
				<div class="col-lg-3 col-md-3 col-12">
					<!-- Single Fact -->
					<div class="single-fact">
						<i class="<?php echo esc_attr( $counter['icon'] );?>"></i>
						<div class="content">
							<div class="number"><span class="counter"><?php echo absint( $counter['number'] );?></span><?php esc_html_e( 'k+', 'eduline' );?></div>
							<p><?php echo esc_html( $counter['title'] );?></p>
						</div>
					</div>
					<!--/ End Single Fact -->
				</div>
				<?php
			}
		}?>
		</div>
	</div>
</div>
<!--/ End Fun Facts -->
<?php endif;?>