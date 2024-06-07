<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="text-form"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content d-flex justify-content-between flex-wrap">
					<div class="text">

						<?php if ($subtitle): ?>
							<h6 class="label"><?= $subtitle ?></h6>
						<?php endif ?>
						
						<?php if ($title): ?>
							<h2><?= $title ?></h2>
						<?php endif ?>
						
						<?= $content ?>

					</div>
					<div class="form-wrap">

						<?php if ($form): ?>
							<?= do_shortcode('[contact-form-7 id="' . $form . '" html_class="default-form"]') ?>
						<?php endif ?>
						
						<?php if ($form_text): ?>
							<div class="after-text"><?= $form_text ?></div>
						<?php endif ?>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>