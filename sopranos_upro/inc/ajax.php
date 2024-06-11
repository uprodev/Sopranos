<?php

$actions = [
	'load_vacancies',

];
foreach ($actions as $action) {
	add_action("wp_ajax_{$action}", $action);
	add_action("wp_ajax_nopriv_{$action}", $action);
}

function load_vacancies () {
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1;

	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) { 
			$query->the_post(); ?>

			<?php get_template_part('parts/content', 'vacancy', ['image_id' => get_post_thumbnail_id(), 'title' => get_the_title(), 'content' => get_the_excerpt(), 'icon_and_text' => get_field('contract_time'), 'link_url' => get_permalink(), 'link_title' => $_POST['read_more_text']]) ?>

		<?php }
	}
	wp_reset_query(); 
	die();
}