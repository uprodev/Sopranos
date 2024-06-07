<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="text-default-bg"<?php if($id) echo ' id="' . $id . '"' ?>>

		<?php if ($background_image_left || $background_image_right): ?>
			<div class="bg">

				<?php if ($background_image_left): ?>
					<?php if (pathinfo($background_image_left['url'])['extension'] == 'svg'): ?>
						<img src="<?= $background_image_left['url'] ?>" alt="<?= $background_image_left['alt'] ?>" class="img img-1">
					<?php else: ?>
						<?= wp_get_attachment_image($background_image_left['ID'], 'full', false, array('class' => 'img img-1')) ?>
					<?php endif ?>
				<?php endif ?>
				
				<?php if ($background_image_right): ?>
					<?php if (pathinfo($background_image_right['url'])['extension'] == 'svg'): ?>
						<img src="<?= $background_image_right['url'] ?>" alt="<?= $background_image_right['alt'] ?>" class="img img-2">
					<?php else: ?>
						<?= wp_get_attachment_image($background_image_right['ID'], 'full', false, array('class' => 'img img-2')) ?>
					<?php endif ?>
				<?php endif ?>
				
			</div>
		<?php endif ?>

		<div class="container">
			<div class="row">
				<div class="content">

					<?php if ($title): ?>
						<h4><?= $title ?></h4>
					<?php endif ?>
					
					<?= $content ?>
					
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>