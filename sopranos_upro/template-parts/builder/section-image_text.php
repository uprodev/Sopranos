<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php 
	$dot_class = '';
	if ($is_show_dotted_circle && $dotted_circle_text) {
		switch ($dotted_circle_position) {
			case 'Left Up':
			$dot_class = ' dot-left dot-top';
			break;
			case 'Left Down':
			$dot_class = ' dot-left dot-down';
			break;
			case 'Right Up':
			$dot_class = ' dot-right dot-top';
			break;
			case 'Right Down':
			$dot_class = ' dot-right dot-down';
			break;
			
			default:
			break;
		}
	}
	?>

	<section class="img-text<?php if($image_left_right == 'Right') echo ' img-text-revers'; echo $dot_class; if($image_to_the_left) echo ' figure-pl-0' ?>"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<figure class="col-lg-6 col-12">

					<?php if ($image): ?>
						<?= wp_get_attachment_image($image['ID'], 'full') ?>
					<?php endif ?>
					
					<?php if ($second_image): ?>
						<div class="mini-img">
							<?= wp_get_attachment_image($second_image['ID'], 'full') ?>
						</div>
					<?php endif ?>
					
					<?php if ($is_show_card): ?>
						<div class="text-info">

							<?php if ($card_title): ?>
								<h4 class="small-title"><?= $card_title ?></h4>
							<?php endif ?>
							
							<?= $card_text ?>

						</div>
					<?php endif ?>
					
				</figure>
				<div class="text-wrap col-lg-6 col-12">

					<?php if ($subtitle): ?>
						<h6 class="label"><?= $subtitle ?></h6>
					<?php endif ?>
					
					<?php if ($title): ?>
						<h2><?= $title ?></h2>
					<?php endif ?>
					
					<?= $content ?>

					<?php if ($button || $text_link): ?>
						<div class="btn-wrap d-flex align-items-center">

							<?php get_template_part('parts/button', null, ['button' => $button, 'is_popup' => $is_popup, 'class' => 'btn-default', 'index' => $args['index']]) ?>

							<?php get_template_part('parts/content', 'popup', ['is_popup' => $is_popup, 'popup_title' => $popup_title, 'popup_text' => $popup_text, 'popup_form' => $popup_form, 'popup_text_below_form' => $popup_text_below_form, 'index' => $args['index']]) ?>

							<?php if ($text_link): ?>
								<a href="<?= $text_link['url'] ?>" class="link"<?php if($text_link['target']) echo ' target="_blank"' ?>><?= $text_link['title'] ?></a>
							<?php endif ?>

						</div>
					<?php endif ?>

				</div>

				<?php if ($is_show_dotted_circle && $dotted_circle_text): ?>
					<div class="dot">
						<span><?= $dotted_circle_text ?></span>
					</div>
				<?php endif ?>
				
			</div>
		</div>
	</section>

	<?php endif; ?>