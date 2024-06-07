<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="cta-block">
		<div class="bg">
			<img src="<?= get_stylesheet_directory_uri() ?>/img/bg-3.png" alt="">
		</div>
		<div class="container">

			<div class="row">
				<div class="wrap-content">

					<?php if ($images): ?>
						<div class="bg bg-content">

							<?php if ($images['image_top_left']): ?>
								<?= wp_get_attachment_image($images['image_top_left']['ID'], 'full', false, array('class' => 'img img-1')) ?>
							<?php endif ?>

							<?php if ($images['image_bottom_left']): ?>
								<?= wp_get_attachment_image($images['image_bottom_left']['ID'], 'full', false, array('class' => 'img img-2')) ?>
							<?php endif ?>

							<?php if ($images['image_top_right']): ?>
								<?= wp_get_attachment_image($images['image_top_right']['ID'], 'full', false, array('class' => 'img img-3')) ?>
							<?php endif ?>

							<?php if ($images['image_bottom_right']): ?>
								<?= wp_get_attachment_image($images['image_bottom_right']['ID'], 'full', false, array('class' => 'img img-4')) ?>
							<?php endif ?>

						</div>
					<?php endif ?>
					
					<div class="bg-color"></div>
					<div class="content">
						<div class="wrap">

							<?php if ($subtitle): ?>
								<h6 class="label text-center"><?= $subtitle ?></h6>
							<?php endif ?>
							
							<?php if ($title): ?>
								<h2 class="text-center"><?= $title ?></h2>
							<?php endif ?>
							
							<?= $content ?>

							<?php if ($button): ?>
								<div class="btn-wrap">
									<a href="<?= $is_popup ? '#popup' : $button['url'] ?>" class="btn-reserve<?php if($is_popup) echo ' fancybox button_popup' ?>"<?php if($button['target']) echo ' target="_blank"' ?>>

										<?php if ($button_icon): ?>
											<span class="img">

												<?php if (pathinfo($button_icon['url'])['extension'] == 'svg'): ?>
													<img src="<?= $button_icon['url'] ?>" alt="<?= $button_icon['alt'] ?>">
												<?php else: ?>
													<?= wp_get_attachment_image($button_icon['ID'], 'full') ?>
												<?php endif ?>

											</span>
										<?php endif ?>
										
										<span><?= $button['title'] ?></span>
									</a>
								</div>

								<?php get_template_part('parts/content', 'popup', ['is_popup' => $is_popup, 'popup_title' => $popup_title, 'popup_text' => $popup_text, 'popup_text_below_form' => $popup_text_below_form]) ?>

							<?php endif ?>
							
							<?php if ($dotted_circle): ?>
								<div class="dot">
									<span><?= $dotted_circle ?></span>
								</div>
							<?php endif ?>
							
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<?php endif; ?>