<?php get_header(); ?>

<div class="container">

			<h1><span><?php _e( 'Archives', 'webfactor' ); ?></span></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

</div>



<?php get_footer(); ?>
