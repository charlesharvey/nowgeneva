<?php $publicity = new WP_Query(array( 'post_type' => 'publicite', 'posts_per_page' =>  1 ));  ?>

<?php  if ($publicity->have_posts() ) :   while($publicity->have_posts()) : $publicity->the_post();   ?>
    <?php $image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'large') : ''; ?>
    <?php $caption = ( has_post_thumbnail()) ? get_the_post_thumbnail_caption(get_the_ID()) : ''; ?>
    <?php $captionclass =  (trim($caption) != '') ? '' : 'nocaption'; ?>


<div class="container">
  <a target="_blank" href="<?php echo get_field('link');?>">
      <div class="advert">
          <img src="<?php echo $image; ?>"  alt="<?php echo get_field('text'); ?>">
          <p class="wp-caption-text <?php echo $captionclass; ?>"><?php echo $caption; ?></p>
          <div class="advert_text">
              <h2 style="margin:0;"><?php echo get_field('text'); ?></h2>
          </div>
      </div>
    </a>

</div>

<?php   endwhile; endif; ?>
