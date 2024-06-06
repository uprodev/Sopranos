<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="text-section"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content">

					<?php if ($subtitle): ?>
						<h6 class="label"><?= $subtitle ?></h6>
					<?php endif ?>
					
					<?php if ($title): ?>
						<h2><?= $title ?></h2>
					<?php endif ?>
					
					<?= $content ?>


					<?php if ($button || $text_link): ?>
						<div class="btn-wrap d-flex flex-wrap align-items-center w-100">

							<?php if ($button): ?>
								<?php get_template_part('parts/button', null, ['button' => $button, 'is_popup' => $is_popup, 'class' => 'btn-default']) ?>

								<?php get_template_part('parts/content', 'popup', ['is_popup' => $is_popup, 'popup_title' => $popup_title, 'popup_text' => $popup_text, 'popup_text_below_form' => $popup_text_below_form]) ?>
							<?php endif ?>

							<?php if ($text_link): ?>
								<a href="<?= $text_link['url'] ?>" class="link"<?php if($text_link['target']) echo ' target="_blank"' ?>><?= $text_link['title'] ?></a>
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
		</div>
	</section>

	<?php endif; ?>