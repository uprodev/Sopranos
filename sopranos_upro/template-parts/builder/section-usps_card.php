<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="card-4x"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="title-wrap text-center">

					<?php if ($subtitle): ?>
						<h6 class="label text-center"><?= $subtitle ?></h6>
					<?php endif ?>
					
					<?php if ($title): ?>
						<h3><?= $title ?></h3>
					<?php endif ?>
					
					<?= $content ?>

				</div>

				<?php if ($cards): ?>
					<div class="content d-flex justify-content-center p-0">

						<?php foreach ($cards as $item): ?>
							<div class="item">

								<?php if ($item['link']): ?>
									<a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>
									<?php else: ?>
										<a class="no-link">
										<?php endif ?>

										<?php if ($item['title']): ?>
											<h6><?= $item['title'] ?></h6>
										<?php endif ?>

										<?php if ($item['content']): ?>
											<?= $item['content'] ?>
										<?php endif ?>

									</a>
								</div>
							<?php endforeach ?>

						</div>
					<?php endif ?>

					<?php if ($button): ?>
						<div class="btn-wrap text-center">

							<?php get_template_part('parts/button', null, ['button' => $button, 'is_popup' => $is_popup, 'class' => 'btn-default']) ?>

							<?php get_template_part('parts/content', 'popup', ['is_popup' => $is_popup, 'popup_title' => $popup_title, 'popup_text' => $popup_text, 'popup_text_below_form' => $popup_text_below_form]) ?>

						</div>
					<?php endif ?>

				</div>
			</div>
		</section>

		<?php endif; ?>