<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="grid-section"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content d-flex flex-wrap justify-content-between p-0">
					<div class="left p-0 ">

						<?php if ($image_1_l || $image_1_content_l): ?>
							<div class="item-1 ">

								<?php if ($image_1_l): ?>
									<figure class="">
										<?= wp_get_attachment_image($image_1_l['ID'], 'full') ?>
									</figure>
								<?php endif ?>

								<?php if ($image_1_content_l): ?>
									<div class="text<?php if($image_1_content_l['background_color'] == 'Red') echo ' bg-red' ?>">

										<?php if ($image_1_content_l['title']): ?>
											<h6><?= $image_1_content_l['title'] ?></h6>
										<?php endif ?>

										<?php if ($image_1_content_l['inner_content']): ?>
											<?= $image_1_content_l['inner_content'] ?>
										<?php endif ?>

										<?php if ($image_1_content_l['link']): ?>
											<a href="<?= $image_1_content_l['link']['url'] ?>" class="link-round"<?php if($image_1_content_l['link']['target']) echo ' target="_blank"' ?>><i class="fas fa-chevron-right"></i></a>
										<?php endif ?>

									</div>
								<?php endif ?>
								
							</div>
						<?php endif ?>
						
						<?php if ($image_2_l || $image_2_content_l): ?>
							<div class="item-2">

								<?php if ($image_2_content_l): ?>
									<div class="text<?php if($image_2_content_l['background_color'] == 'Red') echo ' bg-red' ?>">

										<?php if ($image_2_content_l['title']): ?>
											<h6><?= $image_2_content_l['title'] ?></h6>
										<?php endif ?>

										<?php if ($image_2_content_l['inner_content']): ?>
											<?= $image_2_content_l['inner_content'] ?>
										<?php endif ?>

										<?php if ($image_2_content_l['link']): ?>
											<a href="<?= $image_2_content_l['link']['url'] ?>" class="link-round"<?php if($image_2_content_l['link']['target']) echo ' target="_blank"' ?>><i class="fas fa-chevron-right"></i></a>
										<?php endif ?>

									</div>
								<?php endif ?>
								
								<?php if ($image_2_l): ?>
									<figure class="">
										<?= wp_get_attachment_image($image_2_l['ID'], 'full') ?>
									</figure>
								<?php endif ?>

							</div>
						<?php endif ?>
						
						<?php if ($image_3_l): ?>
							<div class="item-3">
								<figure class="">
									<?= wp_get_attachment_image($image_3_l['ID'], 'full') ?>
								</figure>
							</div>
						<?php endif ?>

					</div>
					<div class="right p-0 ">

						<?php if ($image_r || $content_r || $link_r): ?>
							<div class="item-4">
								
								<?php if ($image_r): ?>
									<figure class="">
										<?= wp_get_attachment_image($image_r['ID'], 'full') ?>
									</figure>
								<?php endif ?>

								<?php if ($content_r): ?>
									<div class="text bg-red text-link">

										<?php if ($content_r['title']): ?>
											<h6><?= $content_r['title'] ?></h6>
										<?php endif ?>
										
										<?php if ($content_r['content']): ?>
											<?= $content_r['content'] ?>
										<?php endif ?>
										
										<?php if ($content_r['link']): ?>
											<a href="<?= $content_r['link']['url'] ?>" class="link-round"<?php if($content_r['link']['target']) echo ' target="_blank"' ?>><i class="fas fa-chevron-right"></i></a>
										<?php endif ?>

									</div>
								<?php endif ?>

							</div>
						<?php endif ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>