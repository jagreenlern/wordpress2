<div class="topbar">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-9 col-12">
				<!-- Contact -->
				<ul class="content">
					<?php
					for ($i=1;$i<=3;$i++) {
						$contact_items[$i]['icon'] = get_theme_mod( 'eduline_top_header_contact_info_icon_'.$i);
						$contact_items[$i]['title'] = get_theme_mod( 'eduline_top_header_contact_info_'.$i);
					}
					
					if( $contact_items  ){ 
						foreach( $contact_items as $contact ){ ?>
							<li><i class="<?php echo esc_attr($contact['icon']);?>"></i><?php echo esc_html($contact['title']);?></li>
							<?php
						}
					}?>
				</ul>
				<!-- End Contact -->
			</div>
		</div>
	</div>
</div>