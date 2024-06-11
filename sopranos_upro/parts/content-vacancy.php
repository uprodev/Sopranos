<div class="item">

	<?php if ($args['image_id']): ?>
		<figure>
			<?= wp_get_attachment_image($args['image_id'], 'full') ?>
		</figure>
	<?php endif ?>

	<div class="text">

		<?php if ($args['title']): ?>
			<h6><?= $args['title'] ?></h6>
		<?php endif ?>

		<?php if ($args['content']): ?>
			<?= $args['content'] ?>
		<?php endif ?>

		<?php if ($args['icon_and_text']): ?>
			<?php foreach ($args['icon_and_text'] as $item): ?>
				<p class="time">

					<?php if ($item['icon']): ?>
						<i class="<?= $item['icon'] ?>"></i>
					<?php endif ?>

					<?php if ($item['text']): ?>
						<?= $item['text'] ?>
					<?php endif ?>

				</p>
			<?php endforeach ?>
		<?php endif ?>

		<?php if ($args['link_url'] && $args['link_title']): ?>
			<div class="btn-wrap">
				<a href="<?= $args['link_url'] ?>" class="btn-default"<?php if($args['link_target']) echo ' target="_blank"' ?>><?= $args['link_title'] ?></a>
			</div>
		<?php endif ?>

	</div>
</div>