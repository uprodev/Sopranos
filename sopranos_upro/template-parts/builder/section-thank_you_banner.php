<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="banner-404">
		<div class="container">
			<div class="row">

				<?php if ($background_images): ?>
					<div class="bg">

						<?php if ($background_images['image_top_left']): ?>
							<?= wp_get_attachment_image($background_images['image_top_left']['ID'], 'full', false, array('class' => 'img img-1')) ?>
						<?php endif ?>

						<?php if ($background_images['image_bottom_left']): ?>
							<?= wp_get_attachment_image($background_images['image_bottom_left']['ID'], 'full', false, array('class' => 'img img-2')) ?>
						<?php endif ?>
						
						<?php if ($background_images['image_top_right']): ?>
							<?= wp_get_attachment_image($background_images['image_top_right']['ID'], 'full', false, array('class' => 'img img-3')) ?>
						<?php endif ?>
						
						<?php if ($background_images['image_bottom_right']): ?>
							<?= wp_get_attachment_image($background_images['image_bottom_right']['ID'], 'full', false, array('class' => 'img img-4')) ?>
						<?php endif ?>
						
					</div>
				<?php endif ?>
				
				<div class="content text-center">

					<?php if ($subtitle): ?>
						<h6 class="label"><?= $subtitle ?></h6>
					<?php endif ?>
					
					<?php if ($title): ?>
						<h1><?= $title ?></h1>
					<?php endif ?>
					
					<?php if ($description): ?>
						<div class="text-wrap"><?= $description ?></div>
					<?php endif ?>
					
					<?php if ($cta_button || $optional_second_button): ?>
						<div class="btn-wrap">

							<?php if ($cta_button): ?>
								
								<?php get_template_part('parts/button', null, ['button' => $cta_button, 'is_popup' => $is_popup, 'class' => 'btn-default', 'left_arrow' => 'fas fa-long-arrow-left']) ?>

								<?php get_template_part('parts/content', 'popup', ['is_popup' => $is_popup, 'popup_title' => $popup_title, 'popup_text' => $popup_text, 'popup_text_below_form' => $popup_text_below_form]) ?>

							<?php endif ?>
							
							<?php if ($optional_second_button): ?>
								<a href="<?= $optional_second_button['url'] ?>" class="link"<?php if($optional_second_button['target']) echo ' target="_blank"' ?>><?= $optional_second_button['title'] ?></a>
							<?php endif ?>

						</div>
					<?php endif ?>

				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>