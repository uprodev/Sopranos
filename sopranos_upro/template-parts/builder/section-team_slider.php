<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="vacancies-slider-wrap"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="top-wrap d-flex flex-wrap justify-content-between align-items-end p-0">
					<div class="title col-md-6 col-12 p-0">

						<?php if ($subtitle): ?>
							<h6 class="label"><?= $subtitle ?></h6>
						<?php endif ?>
						
						<?php if ($title): ?>
							<h2><?= $title ?></h2>
						<?php endif ?>
						
					</div>

					<?php if ($button): ?>
						<div class="btn-wrap p-0">

							<?php get_template_part('parts/button', null, ['button' => $button, 'is_popup' => $is_popup, 'class' => 'btn-default']) ?>

							<?php get_template_part('parts/content', 'popup', ['is_popup' => $is_popup, 'popup_title' => $popup_title, 'popup_text' => $popup_text, 'popup_text_below_form' => $popup_text_below_form]) ?>

						</div>
					<?php endif ?>

				</div>

				<?php if ($slider_items): ?>
					<div class="slider-wrap p-0">
						<div class="swiper vacancies-slider">
							<div class="swiper-wrapper">

								<?php foreach ($slider_items as $item): ?>
									<div class="swiper-slide">

										<?php if ($item['image']): ?>
											<figure>
												<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
											</figure>
										<?php endif ?>

										<div class="text">

											<?php if ($item['title']): ?>
												<h6><?= $item['title'] ?></h6>
											<?php endif ?>

											<?php if ($item['text']): ?>
												<div class="text-wrap"><?= $item['text'] ?></div>
											<?php endif ?>

											<?php if ($item['name'] || $item['position']): ?>
												<div class="user">

													<?php if ($item['name']): ?>
														<p class="name"><?= $item['name'] ?></p>
													<?php endif ?>

													<?php if ($item['position']): ?>
														<p><?= $item['position'] ?></p>
													<?php endif ?>

												</div>
											<?php endif ?>
											
										</div>
									</div>
								<?php endforeach ?>
								
							</div>
						</div>
						<div class="nav-wrap d-flex justify-content-between flex-wrap fd">
							<div class="wrap d-flex justify-content-between">
								<div class="swiper-button-next vacancies-next"></div>
								<div class="swiper-button-prev vacancies-prev"></div>
							</div>
							<div class="p-wrap d-flex align-items-center">
								<div class="swiper-pagination vacancies-pagination"></div>
							</div>
						</div>
					</div>
				<?php endif ?>
				
			</div>
		</div>
	</section>

	<?php endif; ?>