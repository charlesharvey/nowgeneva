<?php

$is_front_page = is_front_page();

// if on the custom page for events and vents
$posts_per_page = -1;


// if on the home page
if ( $is_front_page  ) {
    $posts_per_page = 3;
};
$today = date( 'Y-m-d' );
$evenements = new WP_Query(array(
    'post_type' => 'event',
    'posts_per_page' =>  $posts_per_page,
    'meta_key' => 'start_date',
    'orderby' => 'meta_value',
    'order' => 'ASC',
    'meta_query' => array(
        'relation' => 'OR',
        array(
            'key' => 'start_date', // Check the start date field is
            'value' => $today,
            'compare' => '>=',
            'type' => 'DATE'
        ),
        array(
            'key' => 'end_date', // Check the start date field is
            'value' => $today,
            'compare' => '>=',
            'type' => 'DATE'
        ),

    )
));

// build up slider with greyed out past events
// if we dont have at least 3 future events
$ev_count = $evenements->post_count;
if (  $ev_count  < 3) {

    $limit = 3 - $ev_count;
    $past_evenements = new WP_Query(array(
        'post_type' => 'event',
        'posts_per_page' =>  $limit,
        'meta_key' => 'start_date',
        'orderby' => 'meta_value',
        'order' => 'ASC',
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'start_date', // Check the start date field is
                'value' => $today,
                'compare' => '<',
                'type' => 'DATE'
            ),
            array(
                'key' => 'end_date', // Check the start date field is
                'value' => $today,
                'compare' => '<',
                'type' => 'DATE'
            ),

        )
    ));
};

?>


<?php  if ($evenements->have_posts() ) :  ?>
    <div class="container">

        <?php if ($is_front_page): ?>
            <h2 ><span>Events &amp; Vente</span></h2>
        <?php endif; ?>
        <p style="margin: -20px auto -20px; text-align: center; font-style: italic; font-size: 1.8em;"><a href="#newsletter">Inscrivez vous vite</a> pour recevoir en avant première les ventes privées, soldes ou offres privilégiées accordées aux abonnés(es) de Now Geneva.</p>
        <ul class="bxslider">


            <?php   while($evenements->have_posts()) : $evenements->the_post();  // future events  ?>
                <?php $image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'rectangle') : ''; ?>
                <?php $url = get_the_permalink(); ?>
                <?php $start_date = get_field('start_date'); ?>
                <?php $end_date = get_field('end_date'); ?>
                <?php $place = get_field('place'); ?>
                <?php $boutiques = get_field('boutiques'); ?>
                <li class="single_slide">
                    <div class="article_image_container">
                        <a href="<?php echo $url; ?>" class="">
                            <img src="<?php echo $image; ?>"/>
                        </a>
                    </div>
                    <h4><a href="<?php echo $url; ?>">
                        <?php if ($boutiques) echo $boutiques[0]->post_title; ?>
                        <?php if ($place) echo ' - ' . $place; ?>
                    </a></h4>
                    <?php if ($start_date){?>
                        <p class="time">
                            <?php echo $start_date; ?>
                            <?php if ($end_date && $start_date && $start_date != $end_date) echo ' - ' .  $end_date; ?>
                        </p>
                    <?php } ?>
                    <p class="home_tl time_location">
                        <?php echo get_the_title(); ?>
                    </p>
                    <p><?php //echo get_the_excerpt(); ?></p>
                    <!-- <p><a style="margin-top:-20px" href="<?php echo $url; ?>" class="button">Lire plus</a></p> -->
                </li>
            <?php  endwhile; ?>

            <?php   while($past_evenements->have_posts()) : $past_evenements->the_post();  // past events  ?>
                <?php $image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'rectangle') : ''; ?>
                <?php $url = get_the_permalink(); ?>
                <?php $start_date = get_field('start_date'); ?>
                <?php $end_date = get_field('end_date'); ?>
                <?php $place = get_field('place'); ?>
                <?php $boutiques = get_field('boutiques'); ?>
                <li class="single_slide past_event">
                    <div class="article_image_container">
                            <img src="<?php echo $image; ?>"/>
                    </div>
                    <h4>
                        <?php if ($boutiques) echo $boutiques[0]->post_title; ?>
                        <?php if ($place) echo ' - ' . $place; ?>
                    </h4>
                    <?php if ($start_date){?>
                        <p class="time">
                            <?php echo $start_date; ?>
                            <?php if ($end_date && $start_date && $start_date != $end_date) echo ' - ' .  $end_date; ?>
                        </p>
                    <?php } ?>
                    <p class="home_tl time_location">
                        <?php echo get_the_title(); ?>
                    </p>
                </li>
            <?php  endwhile; ?>



        </ul>


    </div>

<?php endif; wp_reset_query(); ?>
