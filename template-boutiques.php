<?php /* Template Name: Boutiques Page Template */ $meta_desc ="NOW Geneva : magazine boutiques magasins à Genève"; get_header(); ?>

    <h1><span><?php the_title(); ?></span></h1>

<?php  get_template_part('partials/boutiques', 'categories'); ?>
<?php  get_template_part('partials/boutiques', 'loop'); ?>


<?php get_footer(); ?>
