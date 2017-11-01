<?php get_header(); ?>


		<!-- section -->
		<section class="container">

			<h1><span><?php _e( 'Categories for ', 'webfactor' ); single_cat_title(); ?></span></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->




<?php get_footer(); ?>
