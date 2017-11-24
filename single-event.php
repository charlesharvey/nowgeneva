<?php get_header(); ?>




<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



        <div class="container">


            <h1><span><?php the_title(); ?></span></h1>

            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <?php the_post_thumbnail();?>
                </div>
                <div class="col-sm-6 col-md-6">
                  <?php if ($boutiques OR $place){ ?>
                    <p class="event_place">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <?php if ($boutiques) echo $boutiques[0]->post_title; ?>
                      <?php if ($boutiques AND $place) echo ' - '; ?>
                      <?php if ($place) echo $place; ?>
                    </p>
                  <?php } ?>
                   <?php if ($start_date){?>
                        <p class="event_date"><i class="fa fa-calendar" aria-hidden="true"></i>
                        <?php echo $start_date; ?>
                        <?php if ($end_date && $start_date && $start_date != $end_date) echo ' - ' .  $end_date; ?>
                        </p>
                    <?php } ?>

                    <?php the_content(); // Dynamic Content ?>



                        <?php  get_template_part('partials/single', 'boutiques'); ?>


                </div>
            </div>



        </div>  <!-- END OF CONTAINER -->

    </article>
    <!-- /article -->

<?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <article class="container">

        <h1><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h1>

    </article>
    <!-- /article -->

<?php endif; ?>



<?php get_footer(); ?>
