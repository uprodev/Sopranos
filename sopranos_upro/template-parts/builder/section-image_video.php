<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php 
	$is_image = $image_or_video == 'Image' && $image;
	$is_video = $image_or_video == 'Video' && $videolink;
	?>

	<section class="text-img-bg <?php if($is_video) echo ' bg-video' ?>"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content">

					<?php if ($is_image || $is_video): ?>
						<div class="bg">

							<?php if ($is_image): ?>
								<?= wp_get_attachment_image($image['ID'], 'full') ?>
							<?php endif ?>

							<?php if ($is_video): ?>
								<iframe src="<?= $videolink ?>?autoplay=1&mute=1&loop=1&color=white&controls=0&modestbranding=1&playsinline=1&rel=0&enablejsapi=1&playlist=WhY7uyc56ms" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<?php endif ?>

						</div>
					<?php endif ?>
					
					<div class="wrap">

						<?php if ($subtitle): ?>
							<h6 class="label"><?= $subtitle ?></h6>
						<?php endif ?>

						<?php if ($title): ?>
							<h2><?= $title ?></h2>
						<?php endif ?>

						<?php if ($video_popup && $video): ?>
							<div class="link-wrap">
								<a data-fancybox href="<?= $video ?>"><?= $video_popup ?> <i class="far fa-play"></i></a>
							</div>
						<?php endif ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>