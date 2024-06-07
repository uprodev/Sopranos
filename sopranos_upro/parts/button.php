<?php if ($args['button']): ?>
	<a href="<?= $args['is_popup'] ? '#popup' : $args['button']['url'] ?>" class="<?= $args['class'] ?><?php if($args['is_popup']) echo ' fancybox button_popup' ?>"<?php if($args['button']['target']) echo ' target="_blank"' ?>><?= $args['button']['title'] ?></a>
	<?php endif ?>