<?php
	$innofit_actions = $this->recommended_actions;
	$innofit_actions_todo = get_option( 'recommended_actions', false );
?>
<div id="recommended_actions" class="innofit-tab-pane panel-close">
<div class="action-list">
	<?php if($innofit_actions): foreach ($innofit_actions as $key => $val): ?>
	<div class="action" id="<?php echo esc_attr($val['id']); ?>">
		<div class="action-watch">
		<?php if(!$val['is_done']): ?>
			<?php if(!isset($innofit_actions_todo[$val['id']]) || !$innofit_actions_todo[$val['id']]): ?>
				<span class="dashicons dashicons-visibility"></span>
			<?php else: ?>
				<span class="dashicons dashicons-hidden"></span>
			<?php endif; ?>
		<?php else: ?>
			<span class="dashicons dashicons-yes"></span>
		<?php endif; ?>
		</div>
		<div class="action-inner">
			<h3 class="action-title"><?php echo esc_html($val['title']); ?></h3>
			<div class="action-desc"><?php echo esc_html($val['desc']); ?></div>
			<?php echo wp_kses_post($val['link']); ?>
		</div>
	</div>
	<?php endforeach; endif; ?>
</div>
</div>
