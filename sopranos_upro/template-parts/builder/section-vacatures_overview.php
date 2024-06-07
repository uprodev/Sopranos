<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php 
	$is_default = $custom_or_default_cards == 'Default' && $default;
	$is_custom = $custom_or_default_cards == 'Custom' && $custom;
	?>

	<section class="vacancies"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="top-wrap p-0 col-lg-6 col-12">

					<?php if ($subtitle): ?>
						<h6 class="label"><?= $subtitle ?></h6>
					<?php endif ?>
					
					<?php if ($title): ?>
						<h2><?= $title ?></h2>
					<?php endif ?>
					
					<?= $content ?>

				</div>

				<?php if ($is_default || $is_custom): ?>
					<div class="content p-0 d-flex flex-wrap">

						<?php if ($is_default): ?>
							<div class="btn-wrap-full text-center">
								<a href="#" class="btn-border"><?= $read_more ?></a>
							</div>
						<?php else: ?>
							<?php foreach ($custom as $item): ?>
								<div class="item">

									<?php if ($item['image']): ?>
										<figure>
											<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
										</figure>
									<?php endif ?>
									
									<div class="text">

										<?php if ($item['title']): ?>
											<h6><?= $item['title'] ?></h6>
										<?php endif ?>

										<?php if ($item['content']): ?>
											<?= $item['content'] ?>
										<?php endif ?>

										<?php if ($item['icon_and_text']): ?>
											<p class="time">

												<?php if ($item['icon_and_text']['icon']): ?>
													<i class="<?= $item['icon_and_text']['icon'] ?>"></i>
												<?php endif ?>

												<?php if ($item['icon_and_text']['text']): ?>
													<?= $item['icon_and_text']['text'] ?>
												<?php endif ?>

											</p>
										<?php endif ?>

										<?php if ($item['read_more_button']): ?>
											<div class="btn-wrap">
												<a href="<?= $item['read_more_button']['url'] ?>" class="btn-default"<?php if($item['read_more_button']['target']) echo ' target="_blank"' ?>><?= $item['read_more_button']['title'] ?></a>
											</div>
										<?php endif ?>

									</div>
								</div>
							<?php endforeach ?>
						<?php endif ?>
						
					</div>
				<?php endif ?>

				<?php if ($dotted_circle): ?>
					<div class="dot">
						<span><?= $dotted_circle ?></span>
					</div>
				<?php endif ?>
				
			</div>
		</div>
	</section>

	<?php endif; ?>