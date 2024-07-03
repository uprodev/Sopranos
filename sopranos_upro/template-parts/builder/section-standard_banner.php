<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="home-banner<?php if($banner_height == 'Full height') echo ' full-section' ?>"<?php if($id) echo ' id="' . $id . '"' ?>>

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
					
					<?php if ($links || $buttons): ?>
						<div class="btn-wrap d-flex justify-content-center flex-wrap align-items-center w-100">

							<?php if ($links_or_buttons == 'Links' && $links): ?>
								<?php foreach ($links as $item): ?>
									<?php if ($item['link']): ?>
										<a href="<?= $item['link']['url'] ?>" class="link"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
									<?php endif ?>
								<?php endforeach ?>
							<?php endif ?>

							<?php if ($links_or_buttons == 'Buttons' && $buttons): ?>
								<?php foreach ($buttons as $index => $item): ?>
									<?php if ($item['link']): ?>
										<a href="<?= $item['is_popup'] ? '#popup-' . $args['index'] . '-' . ($index + 1) : $item['link']['url'] ?>" class="<?= $index == 0 ? 'btn-default' : 'btn-border' ?><?php if($item['is_popup']) echo ' fancybox button_popup' ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
										
										<?php get_template_part('parts/content', 'popup', ['is_popup' => $item['is_popup'], 'popup_title' => $item['popup_title'], 'popup_text' => $item['popup_text'], 'popup_form' => $item['popup_form'], 'popup_text_below_form' => $item['popup_text_below_form'], 'index' => $args['index'] . '-' . ($index + 1)]) ?>
										
									<?php endif ?>
								<?php endforeach ?>
							<?php endif ?>

						</div>
					<?php endif ?>
					
				</div>
			</div>
		</div>

		<?php if ($is_scroll_down_button && $scroll_down_button_link): ?>
			<div class="btn-down">
				<a href="<?= $scroll_down_button_link['url'] ?>" class="scroll"><i class="fas fa-chevron-down"></i></a>
			</div>
		<?php endif ?>
		
	</section>

	<?php endif; ?>