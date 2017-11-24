<?php $boutiquealaune = new WP_Query(array( 'post_type' => 'boutiquealaune', 'posts_per_page' =>  1 ));  ?>

<?php  if ($boutiquealaune->have_posts() ) :   while($boutiquealaune->have_posts()) : $boutiquealaune->the_post();   ?>
    <?php $image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'large') : ''; ?>
    <?php $caption = ( has_post_thumbnail()) ? get_the_post_thumbnail_caption(get_the_ID()) : ''; ?>
    <?php $captionclass =  (trim($caption) != '') ? '' : 'nocaption'; ?>


<div class="container">
    <div class="advert">
        <?php $boutique_link = get_field('boutique'); ?>

        <a target="_blank" href="<?php echo ($boutique_link); ?>">
        <img src="<?php echo $image; ?>"  alt="<?php echo get_the_title(); ?>">
        <p class="wp-caption-text <?php echo $captionclass; ?>"><?php echo $caption; ?></p>
        </a>
        <div class="advert_text">
            <h2 style="font-size:2em; margin:0;"><a href="<?php echo ($boutique_link); ?>"><?php echo get_the_title(); ?></a></h2>

        </div>
    </div>


</div>

<?php   endwhile; endif; ?>
