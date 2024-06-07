<?php if ($args['is_popup']): ?>
	<div style="display:none;">
		<p class="popup_title"><?= $args['popup_title'] ?></p>
		<p class="popup_text"><?= $args['popup_text'] ?></p>
		<div class="popup_text_below"><?= $args['popup_text_below_form'] ?></div>
	</div>
	<?php endif ?>