<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="slider-img-wrap"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="top text-center">

					<?php if ($subtitle): ?>
						<h6 class="label text-center"><?= $subtitle ?></h6>
					<?php endif ?>
					
					<?php if ($title): ?>
						<h2 class="text-center"><?= $title ?></h2>
					<?php endif ?>
					
					<?= $content ?>

				</div>
			</div>
		</div>
		<div class="slider-wrap">
			
			<?php if ($slider_circle): ?>
				<div class="circle">
					<p><?= $slider_circle ?></p>
				</div>
			<?php endif ?>
			
			<?php if($slider_images): ?>

				<div class="swiper img-slider">
					<div class="swiper-wrapper">

						<?php foreach($slider_images as $image): ?>

							<div class="swiper-slide">
								<?= wp_get_attachment_image($image['ID'], 'full') ?>
							</div>

						<?php endforeach; ?>

					</div>
				</div>

			<?php endif; ?>

		</div>
	</section>

	<?php endif; ?>