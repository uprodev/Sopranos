<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="img-card"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content d-flex justify-content-between flex-wrap p-0">
					<div class="text">

						<?php if ($subtitle): ?>
							<h6 class="label"><?= $subtitle ?></h6>
						<?php endif ?>

						<?php if ($title): ?>
							<h3><?= $title ?></h3>
						<?php endif ?>

						<?= $content ?>

						<?php if ($button): ?>
							<div class="btn-wrap">

								<?php get_template_part('parts/button', null, ['button' => $button, 'is_popup' => $is_popup, 'class' => 'btn-border']) ?>

								<?php get_template_part('parts/content', 'popup', ['is_popup' => $is_popup, 'popup_title' => $popup_title, 'popup_text' => $popup_text, 'popup_text_below_form' => $popup_text_below_form]) ?>

							</div>
						<?php endif ?>

					</div>

					<?php if ($image): ?>
						<figure>
							<?= wp_get_attachment_image($image['ID'], 'full') ?>
						</figure>
					<?php endif ?>

				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>