<?php if ($args['is_popup']): ?>
	<div id="popup-<?= $args['index'] ?>" class="popup-default" style="display: none;">
		<div class="content">

			<?php if ($args['popup_title']): ?>
				<h3><?= $args['popup_title'] ?></h3>
			<?php endif ?>
			
			<?php if ($args['popup_text']): ?>
				<p><?= $args['popup_text'] ?></p>
			<?php endif ?>
			
			<?php if ($args['popup_form']): ?>
				<div class="from-wrap">
					<?= do_shortcode('[contact-form-7 id="' . $args['popup_form'] . '" html_class="default-form"]') ?>
				</div>
			<?php endif ?>
			
			<?php if ($args['popup_text_below_form']): ?>
				<div class="text-info"><?= $args['popup_text_below_form'] ?></div>
			<?php endif ?>
			
		</div>
	</div>
	<?php endif ?>