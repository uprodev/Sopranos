<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="lading-banner"<?php if($id) echo ' id="' . $id . '"' ?>>

		<?php if ($image): ?>
			<div class="bg">
				<?= wp_get_attachment_image($image['ID'], 'full') ?>
			</div>
		<?php endif ?>
		
		<div class="container">
			<div class="row">
				<div class="content d-flex justify-content-between p-0 flex-wrap">
					<div class="left col-lg-6 d-flex flex-column justify-content-center text-start col-12">

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
							<div class="btn-wrap text-start">

								<?php get_template_part('parts/button', null, ['button' => $button, 'is_popup' => $is_popup, 'class' => 'btn-default']) ?>

								<?php get_template_part('parts/content', 'popup', ['is_popup' => $is_popup, 'popup_title' => $popup_title, 'popup_text' => $popup_text, 'popup_text_below_form' => $popup_text_below_form]) ?>

							</div>
						<?php endif ?>

					</div>

					<?php if ($card_title || $card_links): ?>
						<div class="right col-lg-6 col-12">
							<div class="text">

								<?php if ($card_title): ?>
									<h6><?= $card_title ?></h6>
								<?php endif ?>

								<?php if ($card_links): ?>
									<ul>

										<?php foreach ($card_links as $item): ?>
											<?php if ($item['link']): ?>
												<li>
													<a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>
														<i class="far fa-chevron-right"></i>
														<?= $item['link']['title'] ?>
													</a>
												</li>
											<?php endif ?>
										<?php endforeach ?>

									</ul>
								<?php endif ?>

							</div>
						</div>
					<?php endif ?>

				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>