<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="menu-block"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content">
					<div class="text">

						<?php if ($title || $subtitle): ?>
							<div class="title-wrap d-flex flex-wrap align-items-center">

								<?php if ($title): ?>
									<h2><?= $title ?></h2>
								<?php endif ?>

								<?php if ($subtitle): ?>
									<h3 class="sub-title"><?= $subtitle ?></h3>
								<?php endif ?>

							</div>
						<?php endif ?>
						
						<?= $content ?>

						<?php if ($button || $ghost_button): ?>
							<div class="btn-wrap d-flex flex-wrap">

								<?php get_template_part('parts/button', null, ['button' => $button, 'is_popup' => $is_popup, 'class' => 'btn-default', 'index' => $args['index'] . '-1']) ?>

								<?php get_template_part('parts/button', null, ['button' => $ghost_button, 'is_popup' => $is_popup_ghost, 'class' => 'btn-border', 'index' => $args['index'] . '-2']) ?>

								<?php get_template_part('parts/content', 'popup', ['is_popup' => $is_popup, 'popup_title' => $popup_title, 'popup_text' => $popup_text, 'popup_form' => $popup_form, 'popup_text_below_form' => $popup_text_below_form, 'index' => $args['index'] . '-1']) ?>

								<?php get_template_part('parts/content', 'popup', ['is_popup' => $is_popup_ghost, 'popup_title' => $popup_title_ghost, 'popup_text' => $popup_text_ghost, 'popup_form' => $popup_form_ghost, 'popup_text_below_form' => $popup_text_below_form_ghost, 'index' => $args['index'] . '-2']) ?>

							</div>
						<?php endif ?>
						
					</div>

					<?php if ($image_right): ?>
						<figure>
							<?= wp_get_attachment_image($image_right['ID'], 'full') ?>
						</figure>
					<?php endif ?>
					
				</div>

				<?php if ($is_arrow_image): ?>
					<div class="arrow-wrap">
						<?= $text ?>
						<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-1.svg" alt="">
					</div>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>