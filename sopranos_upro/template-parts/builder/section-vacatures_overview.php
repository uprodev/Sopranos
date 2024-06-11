<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php 
	$is_default = $custom_or_default_cards == 'Default' && $default;
	$is_custom = $custom_or_default_cards == 'Custom' && $custom;
	?>

	<section class="vacancies"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="top-wrap p-0 col-lg-6 col-12">

					<?php if ($subtitle): ?>
						<h6 class="label"><?= $subtitle ?></h6>
					<?php endif ?>
					
					<?php if ($title): ?>
						<h2><?= $title ?></h2>
					<?php endif ?>
					
					<?= $content ?>

				</div>

				<?php if ($is_default): ?>

					<div class="content p-0 d-flex flex-wrap" id="response_vacancies">

						<?php 
						$args = array(
							'post_type' => 'vacature', 
							'posts_per_page' => 3,
							'post_status' => 'publish',
							'post__in' => wp_list_pluck($default, 'ID'),
							'orderby' => 'post__in',
							'paged' => get_query_var('paged')
						);
						$wp_query = new WP_Query($args); 
						?>
						<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
							<?php get_template_part('parts/content', 'vacancy', ['image_id' => get_post_thumbnail_id(), 'title' => get_the_title(), 'content' => get_the_excerpt(), 'icon_and_text' => get_field('contract_time'), 'link_url' => get_permalink(), 'link_title' => $read_more]) ?>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

					</div>

					<?php if ( $wp_query->max_num_pages > 1 ) { ?>
						<script> var this_page = 1; </script>

						<div class="btn-wrap-full text-center">
							<a href="#" class="btn-border load_vacancies" data-param-posts='<?php echo serialize($wp_query->query_vars); ?>' data-max-pages='<?php echo $wp_query->max_num_pages; ?>'><?= $load_more_button_text ?></a>
						</div>
					<?php }  ?>


				<?php else: ?>

					<div class="content p-0 d-flex flex-wrap">

						<?php foreach ($custom as $item): ?>
							<?php 
							$image_id = $item['image'] ? $item['image']['ID'] : '';
							$link_url = $item['read_more_button'] ? $item['read_more_button']['url'] : '';
							$link_title = $item['read_more_button'] ? $item['read_more_button']['title'] : '';
							$link_target = $item['read_more_button'] ? $item['read_more_button']['target'] : '';

							get_template_part('parts/content', 'vacancy', ['image_id' => $image_id, 'title' => $item['title'], 'content' => $item['content'], 'icon_and_text' => $item['icon_and_text'], 'link_url' => $link_url, 'link_title' => $link_title, 'link_target' => $link_target]); 
							?>
						<?php endforeach ?>

					</div>

				<?php endif ?>

				<?php if ($dotted_circle): ?>
					<div class="dot">
						<span><?= $dotted_circle ?></span>
					</div>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>