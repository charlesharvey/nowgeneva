<?php get_header(); ?>

	<div class="container">


			<h1><span><?php echo sprintf( __( 'Résultats de recherche pour &ldquo;', 'webfactor' ), $wp_query->found_posts ); echo get_search_query(); ?>&rdquo;</span></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>



</div>

<?php get_footer(); ?>
