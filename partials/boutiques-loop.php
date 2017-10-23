<?php


$args = array(
    'post_type' => 'boutique',
    'posts_per_page' =>  -1
);

// if there is a category in the url, only show those shops that belong to category
if (isset($_GET['cat']) && $_GET['cat'] != '') {
    $args['tax_query'] = array(
		array(
			'taxonomy' => 'boutique_cat',
			'field'    => 'slug',
			'terms'    =>  $_GET['cat']
		),
	);
}


$boutiques = new WP_Query( $args );

$default_image = get_template_directory_uri()  . '/img/default.png';

 ?>
<div class="other_articles shuffle_container">
<div class="container ">
    <div class="row">
        <?php $bb = 0; if ($boutiques->have_posts()):  while ($boutiques->have_posts()) : $boutiques->the_post(); ?>
        <div  class="col-sm-4">

            <article class="single_boutique" >
                <?php $title = get_the_title(); ?>
                <?php $logo = get_field('logo'); ?>
                <?php //$image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'medium') : $default_image; ?>
                <!-- <a   class="boutique_image" href="<?php the_permalink(); ?>"  title="<?php $title; ?>">
                    <img class="lazyload" data-original="<?php echo $image; ?>"  alt="<?php echo $title; ?>">

                    <?php// if ($logo): ?>
                        <div class="logo" style="background-image:url(<?php echo $logo['sizes']['medium']; ?>);"></div>
                    <?php //endif; // end of if logo ?>
                </a> -->

                <a href="<?php the_permalink(); ?>"  title="<?php $title; ?>">
                  <img class="logo_boutique" src="<?php echo $logo['sizes']['medium']; ?>">
                </a>

                <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo $title; ?></a></h3>
                <?php $categories = wp_get_post_terms( get_the_ID(), 'boutique_cat');   ?>
                <?php if (sizeof($categories) > 0) : ?>
                    <p class="category"><?php echo ($categories[0]->name); ?></p>
                <?php endif; ?>
                <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
            </article>
        </div>

        <?php if ($bb % 3 == 2)  echo '</div><!--  END OF ROW --><div class="row">'; ?>
        <?php $bb++; endwhile; endif; wp_reset_query(); ?>
    </div>

</div>
</div>
