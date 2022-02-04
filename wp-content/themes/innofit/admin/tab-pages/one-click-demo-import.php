<div id="one_click_demo" class="innofit-tab-pane panel-close">
    <?php
	$innofit_actions = $this->recommended_actions;
	$innofit_actions_todo = get_option( 'recommended_actions', false );
	$innofit_spicebox = $innofit_actions[0];
?>
<div class="action-list">
	<?php if($innofit_spicebox):?>
	<div class="action" id="">
		<div class="action-watch">
		<?php if(!$innofit_spicebox['is_done']): ?>
			<?php if(!isset($innofit_actions_todo[$innofit_spicebox['id']]) || !$innofit_actions_todo[$innofit_spicebox['id']]): ?>
				<span class="dashicons dashicons-visibility"></span>
			<?php else: ?>
				<span class="dashicons dashicons-hidden"></span>
			<?php endif; ?>
		<?php else: ?>
			<span class="dashicons dashicons-yes"></span>
		<?php endif; ?>
		</div>
		<div class="action-inner">
			<h3 class="action-title"><?php echo esc_html($innofit_spicebox['title']); ?></h3>
			<div class="action-desc"><?php echo esc_html($innofit_spicebox['desc']); ?></div>
			<?php echo wp_kses_post($innofit_spicebox['link']); ?>
		</div>
	</div>
	<?php endif; ?>
</div>
</div>
