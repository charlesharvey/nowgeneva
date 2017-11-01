<?php

$is_front_page = is_front_page();

// if on the custom page for events and vents
$posts_per_page = -1;


// if on the home page
if ( $is_front_page  ) {
    $posts_per_page = 3;
};

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
?>


<?php  if ($evenements->have_posts() ) :  ?>
    <div class="container">

        <?php if ($is_front_page): ?>
        <h2 ><span>Events &amp; Vente</span></h2>
        <?php endif; ?>
        <ul class="events">


            <?php  while($evenements->have_posts()) : $evenements->the_post();   ?>
                <?php $image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'full') : ''; ?>
                <?php $url = get_the_permalink(); ?>
                <?php $start_date = get_field('start_date'); ?>
                <?php $end_date = get_field('end_date'); ?>
                <?php $place = get_field('place'); ?>
                <?php $boutiques = get_field('boutiques'); ?>
                <li class="event">
                    <div class="row">
                        <div class="col-sm-3">
                            <a href="<?php echo $url; ?>" class="event_image">
                                <img src="<?php echo $image; ?>"/>
                            </a>
                        </div>
                        <div class="col-sm-9">
                            <h4><a href="<?php echo $url; ?>">
                              <?php if ($boutiques) echo $boutiques[0]->post_title; ?>
                              <?php if ($start_date) echo ' - ' . $start_date; ?>
                              <?php if ($end_date && $start_date && $start_date != $end_date) echo ' - ' .  $end_date; ?>
                              <?php if ($place) echo ' - ' . $place; ?>
                            </a></h4>

                            <p style="font-size:1.7em" class="time_location">
                              <?php echo get_the_title(); ?>
                            </p>



                            <p><?php //echo get_the_excerpt(); ?></p>
                            <p><a style="margin-top:-20px" href="<?php echo $url; ?>" class="button">Lire plus</a></p>
                        </div>
                    </div>
                </li>




            <?php  endwhile; ?>


        </ul>


    </div>

<?php endif; wp_reset_query(); ?>
