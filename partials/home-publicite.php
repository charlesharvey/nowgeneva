<?php $publicity = new WP_Query(array( 'post_type' => 'publicite', 'posts_per_page' =>  1 ));  ?>

<?php  if ($publicity->have_posts() ) :   while($publicity->have_posts()) : $publicity->the_post();   ?>
    <?php $image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'large') : ''; ?>


<div class="container">
  <a target="_blank" href="<?php echo get_field('link');?>">
      <div class="advert">
          <img src="<?php echo $image; ?>"  alt="<?php echo get_field('text'); ?>">
          <div class="advert_text">
              <p><?php echo get_field('text'); ?></p>
          </div>
      </div>
    </a>

</div>

<?php   endwhile; endif; ?>
