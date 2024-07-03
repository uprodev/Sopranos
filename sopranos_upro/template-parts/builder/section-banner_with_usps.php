<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="home-banner banner-ups"<?php if($id) echo ' id="' . $id . '"' ?>>

		<?php if ($background_image): ?>
			<div class="bg">
				<?= wp_get_attachment_image($background_image['ID'], 'full') ?>
			</div>
		<?php endif ?>

		<div class="container">
			<div class="row">
				<div class="content d-flex align-items-center flex-column justify-content-center">

					<?php if ($subtitle): ?>
						<p class="info"><?= $subtitle ?></p>
					<?php endif ?>

					<?php if ($title): ?>
						<h1><?= $title ?></h1>
					<?php endif ?>

					<?php if ($content): ?>
						<div class="text-wrap"><?= $content ?></div>
					<?php endif ?>

					<?php if ($button): ?>
						<div class="btn-wrap d-flex justify-content-center flex-wrap align-items-center w-100">

							<?php get_template_part('parts/button', null, ['button' => $button, 'is_popup' => $is_popup, 'class' => 'btn-default', 'index' => $args['index']]) ?>

							<?php get_template_part('parts/content', 'popup', ['is_popup' => $is_popup, 'popup_title' => $popup_title, 'popup_text' => $popup_text, 'popup_form' => $popup_form, 'popup_text_below_form' => $popup_text_below_form, 'index' => $args['index']]) ?>

						</div>
					<?php endif ?>

				</div>

				<?php if ($is_show_cards && $cards): ?>
					<div class="bottom d-flex justify-content-center p-0">

						<?php foreach ($cards as $item): ?>
							<div class="item">

								<?php if ($item['optional_card_link']): ?>
									<a href="<?= $item['optional_card_link']['url'] ?>"<?php if($item['optional_card_link']['target']) echo ' target="_blank"' ?>>
									<?php else: ?>
										<a href="" class="no-link">
										<?php endif ?>

										<?php if ($item['title']): ?>
											<h6><?= $item['title'] ?></h6>
										<?php endif ?>

										<?php if ($item['card_text']): ?>
											<?= $item['card_text'] ?>
										<?php endif ?>

									</a>
								</div>
							<?php endforeach ?>
							
						</div>
					<?php endif ?>

				</div>
			</div>


		</section>

		<?php endif; ?>