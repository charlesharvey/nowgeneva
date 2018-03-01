<?php /* Template Name: Home Page Template */ get_header(); ?>



<?php get_template_part('partials/home', 'publicite'); ?>
<?php get_template_part('partials/home', 'video'); ?>
<?php get_template_part('partials/home', 'posts'); ?>
<?php get_template_part('partials/home', 'featuredshop'); ?>
<?php get_template_part('partials/home', 'events'); ?>

<div class="instagram_container">
  <h5>Instagram</h5>
  <div id="instafeed"></div>
</div>

<?php get_footer(); ?>
