<?php get_header(); ?>

<section class="banner-404">
	<div class="container">
		<div class="row">

			<?php if ($field = get_field('background_images_404', 'option')): ?>
				<div class="bg">

					<?php if ($field['image_top_left']): ?>
						<?= wp_get_attachment_image($field['image_top_left']['ID'], 'full', false, array('class' => 'img img-1')) ?>
					<?php endif ?>

					<?php if ($field['image_bottom_left']): ?>
						<?= wp_get_attachment_image($field['image_bottom_left']['ID'], 'full', false, array('class' => 'img img-2')) ?>
					<?php endif ?>
					
					<?php if ($field['image_top_right']): ?>
						<?= wp_get_attachment_image($field['image_top_right']['ID'], 'full', false, array('class' => 'img img-3')) ?>
					<?php endif ?>
					
					<?php if ($field['image_bottom_right']): ?>
						<?= wp_get_attachment_image($field['image_bottom_right']['ID'], 'full', false, array('class' => 'img img-4')) ?>
					<?php endif ?>
					
				</div>
			<?php endif ?>
			
			<div class="content text-center">

				<?php if ($field = get_field('subtitle_404', 'option')): ?>
					<h6 class="label"><?= $field ?></h6>
				<?php endif ?>
				
				<?php if ($field = get_field('title_404', 'option')): ?>
					<h1><?= $field ?></h1>
				<?php endif ?>
				
				<?php if ($field = get_field('description_404', 'option')): ?>
					<div class="text-wrap"><?= $field ?></div>
				<?php endif ?>
				
				<?php if (get_field('cta_button_404', 'option') || get_field('optional_second_button_404', 'option')): ?>
				<div class="btn-wrap">

					<?php if ($field = get_field('cta_button_404', 'option')): ?>
						<a href="<?= $field['url'] ?>" class="btn-default<?php if(get_field('is_popup_404', 'option')) echo ' fancybox button_popup' ?>"<?php if($field['target']) echo ' target="_blank"' ?>><i class="fas fa-long-arrow-left"></i><?= $field['title'] ?></a>
					<?php endif ?>

					<?php if ($field = get_field('optional_second_button_404', 'option')): ?>
						<a href="<?= $field['url'] ?>" class="link"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
					<?php endif ?>

					<?php get_template_part('parts/content', 'popup', ['is_popup' => get_field('is_popup_404', 'option'), 'popup_title' => get_field('popup_title_404', 'option'), 'popup_text' => get_field('popup_text_404', 'option'), 'popup_text_below_form' => get_field('popup_text_below_form_404', 'option')]) ?>

				</div>
			<?php endif ?>

		</div>
	</div>
</div>
</section>

<?php get_footer(); ?>