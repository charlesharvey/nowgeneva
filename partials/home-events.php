<?php

$evenements = new WP_Query(array(
    'post_type' => 'event',
    'posts_per_page' =>  3
));
?>


<?php  if ($evenements->have_posts() ) :  ?>
    <div class="container">

        <h2><span>Events &amp; Vente</span></h2>

        <ul class="events">


            <?php  while($evenements->have_posts()) : $evenements->the_post();   ?>
                <?php $image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'medium') : ''; ?>
                <?php $url = get_the_permalink(); ?>
                <li class="event">
                    <div class="row">
                        <div class="col-sm-3 col-sm-push-1">
                            <a href="<?php echo $url; ?>" class="event_image" style="background-image:url('<?php echo $image; ?>')"></a>
                        </div>
                        <div class="col-sm-7 col-sm-push-1">
                            <h4><?php echo get_the_title(); ?></h4>
                            <p><?php echo get_the_excerpt(); ?></p>
                            <p><a href="<?php echo $url; ?>" class="button">Lire plus</a></p>
                        </div>
                    </div>
                </li>




            <?php  endwhile; ?>


        </ul>


    </div>

<?php endif; ?>
