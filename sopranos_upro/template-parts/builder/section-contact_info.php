<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="contact-info"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content d-flex justify-content-between flex-wrap p-0">

					<?php if ($card_content): ?>
						<div class="form-wrap col-lg-7 col-12">

							<?php if ($card_content['subtitle']): ?>
								<h6 class="label"><?= $card_content['subtitle'] ?></h6>
							<?php endif ?>

							<?php if ($card_content['title']): ?>
								<h2><?= $card_content['title'] ?></h2>
							<?php endif ?>

							<?php if ($card_content['content']): ?>
								<?= $card_content['content'] ?>
							<?php endif ?>

							<?php if ($card_content['form']): ?>
								<?= do_shortcode('[contact-form-7 id="' . $card_content['form'] . '" html_class="default-form"]') ?>
							<?php endif ?>

							<?php if ($card_content['form_text']): ?>
								<div class="after-text"><?= $card_content['form_text'] ?></div>
							<?php endif ?>

						</div>
					<?php endif ?>

					<?php if ($location || $opening_times): ?>
						<div class="info-wrap col-lg-4 col-12">

							<?php if ($location): ?>

								<?php if ($location['title']): ?>
									<h3><?= $location['title'] ?></h3>
								<?php endif ?>
								
								<?php if ($location['text']): ?>
									<?= $location['text'] ?>
								<?php endif ?>
								
								<?php if ($location['button']): ?>
									<div class="btn-wrap">
										<a href="<?= $location['is_popup'] ? '#popup' : $location['button']['url'] ?>" class="btn-border<?php if($location['is_popup']) echo ' fancybox button_popup' ?>"<?php if($location['button']['target']) echo ' target="_blank"' ?>>
											<?= $location['button']['title'] ?>

											<?php if ($location['button_icon']): ?>
												<i class="<?= $location['button_icon'] ?>"></i>
											<?php endif ?>
											
										</a>

										<?php get_template_part('parts/content', 'popup', ['is_popup' => $location['is_popup'], 'popup_title' => $location['popup_title'], 'popup_text' => $location['popup_text'], 'popup_text_below_form' => $location['popup_text_below_form']]) ?>

									</div>
								<?php endif ?>

								<div class="line"></div>
							<?php endif ?>

							<?php if ($opening_times): ?>

								<?php if ($opening_times['title']): ?>
									<h3><?= $opening_times['title'] ?></h3>
								<?php endif ?>
								
								<?php if ($opening_times['items']): ?>
									<ul class="list-info">

										<?php foreach ($opening_times['items'] as $index => $item): ?>
											<li<?php if(date('w') - 1 == $index || (date('w') == 0 && $index == 6)) echo ' class="current"' ?>>

												<?php if ($item['day']): ?>
													<p><?= $item['day'] ?></p>
												<?php endif ?>
												
												<?php if ($item['time']): ?>
													<p><?= $item['time'] ?></p>
												<?php endif ?>
												
											</li>
										<?php endforeach ?>
										
									</ul>
								<?php endif ?>
								
							<?php endif ?>

						</div>
					<?php endif ?>
					
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>