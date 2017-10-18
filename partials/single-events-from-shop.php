<?php $events_from_shop = get_events_from_shop_id(  get_the_ID()  );  ?>



<?php if ($events_from_shop->have_posts()): ?>

        <h2> <span>Evènements</span></h2>
    <ul class="events">
        <?php while ($events_from_shop->have_posts()) : $events_from_shop->the_post(); ?>
                    <?php $image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'full') : ''; ?>
                    <?php $url = get_the_permalink(); ?>
                    <?php $start_date = get_field('start_date'); ?>
                    <?php $end_date = get_field('end_date'); ?>
                    <?php $place = get_field('place'); ?>
                    <li class="event">
                        <div class="row">
                            <div class="col-sm-3 col-sm-push-1">
                                <a href="<?php echo $url; ?>" class="event_image">
                                    <img src="<?php echo $image; ?>"/>
                                </a>
                            </div>
                            <div class="col-sm-7 col-sm-push-1">
                                <h4><a href="<?php echo $url; ?>"><?php echo get_the_title(); ?></a></h4>

                                <p class="time_location">
                    <?php if ($start_date) echo $start_date; ?>
                    <?php if ($end_date && $start_date && $start_date != $end_date) echo ' - ' .  $end_date; ?>
                    <?php if ($place) echo ' - ' . $place; ?>
                                </p>



                                <p><?php echo get_the_excerpt(); ?></p>
                                <p><a href="<?php echo $url; ?>" class="button">Lire plus</a></p>
                            </div>
                        </div>
                    </li>





        <?php endwhile; ?>
    </ul>
<?php endif; wp_reset_query(); ?>
