<?php $meta_desc ="Chaque mois la rédaction met en lumière des personnalités qui font l’actualité dans la mode, la culture, le monde des affaires ou encore la politique."; get_header(); ?>

<div class="container">

			<h1><span><?php _e( 'Portraits', 'webfactor' ); ?></span></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

</div>



<?php get_footer(); ?>
