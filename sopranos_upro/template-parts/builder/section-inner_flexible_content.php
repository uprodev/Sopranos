<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="text-default"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">

				<?php if ($left_content): ?>
					<div class="main col-lg-8">

						<?php foreach ($left_content as $item): ?>

							<?php 
							switch ($item['acf_fc_layout']) {

								case 'text_block': 
								?>

								<?php if ($item['title']): ?>
									<h2><?= $item['title'] ?></h2>
								<?php endif ?>

								<?php if ($item['text']): ?>
									<?= $item['text'] ?>
								<?php endif ?>
								
								<?php 
								break;

								case 'cta_block': 
								?>

								<div class="cta-block-inner d-flex flex-wrap justify-content-between align-items-center">
									<div class="wrap">

										<?php if ($item['title']): ?>
											<h4><?= $item['title'] ?></h4>
										<?php endif ?>

										<?php if ($item['text']): ?>
											<?= $item['text'] ?>
										<?php endif ?>

									</div>

									<?php if ($item['button']): ?>
										<div class="btn-wrap">
											<a href="<?= $item['button']['url'] ?>" class="btn-default btn-white"<?php if($item['button']['target']) echo ' target="_blank"' ?>><?= $item['button']['title'] ?></a>
										</div>
									<?php endif ?>

								</div>
								
								<?php 
								break;

								case 'share_block': 
								?>

								<div class="line"></div>
								<div class="link-line d-flex justify-content-between flex-wrap">

									<?php if ($item['back_link_text']): ?>
										<div class="link-wrap">
											<a href="#" onclick="history.back();"><i class="fas fa-chevron-left"></i><?= $item['back_link_text'] ?></a>
										</div>
									<?php endif ?>
									
									<div class="sos-wrap d-flex align-items-center">

										<?php if ($item['share_vacancy_text']): ?>
											<p><?= $item['share_vacancy_text'] ?></p>
										<?php endif ?>

										<?php if ($item['share_icons']): ?>
											<ul class="soc-list d-flex">

												<?php foreach ($item['share_icons'] as $item_2): ?>
													<?php if ($item_2['icon']): ?>
														<li>
															<a href="<?= $item_2['url'] ?>" target="_blank">
																<i class="<?= $item_2['icon'] ?>"></i>
															</a>
														</li>
													<?php endif ?>
												<?php endforeach ?>

											</ul>
										<?php endif ?>

									</div>
								</div>
								
								<?php 
								break;

								default:
								break;
							}
							?>

						<?php endforeach ?>

					</div>
				<?php endif ?>

				<?php if ($right_content_blocks): ?>
					<div class="aside col-lg-4">

						<?php foreach ($right_content_blocks as $item): ?>
							<div class="item<?php if($item['background_color'] == 'Red') echo ' bg-red' ?>">

								<?php if ($item['title']): ?>
									<h6 class="title"><?= $item['title'] ?></h6>
								<?php endif ?>
								
								<?= $item['content'] ?>

								<?php if ($item['link']): ?>
									<div class="btn-wrap">
										<a href="<?= $item['link']['url'] ?>" class="<?= $item['background_color'] == 'Red' ? 'btn-default btn-white' : 'btn-border' ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
									</div>
								<?php endif ?>

							</div>
						<?php endforeach ?>

					</div>
				<?php endif ?>
				
			</div>
		</div>
	</section>

	<?php endif; ?>