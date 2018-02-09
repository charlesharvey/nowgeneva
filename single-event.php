<?php get_header(); ?>




<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


        <?php $start_date = get_field('start_date'); ?>
        <?php $image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'small') : ''; ?>
        <?php $permalink = get_the_permalink(); ?>
        <?php $place = get_field('place'); ?>
        <?php $boutiques = get_field('boutiques'); ?>

        <div class="container">


            <h1><span><?php the_title(); ?></span></h1>

            <p  style="letter-spacing: 6px; "class="single-category">
          <?php if ($boutiques OR $place){ ?>
            <span  class="event_place">
              <?php if ($boutiques) echo $boutiques[0]->post_title; ?>
              <?php if ($boutiques AND $place) echo ' - '; ?>
              <?php if ($place) echo $place; ?>
              </span>
             <?php   if ($start_date) echo ' - ' ?>
          <?php } ?>
           <?php if ($start_date){?>
                <span class="event_date">
                <?php echo $start_date; ?>
                <?php if ($end_date && $start_date && $start_date != $end_date) echo ' - ' .  $end_date; ?>
            </span>
            <?php } ?>
            </p>


            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <?php the_post_thumbnail();?>
                </div>
                <div class="col-sm-6 col-md-6">


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
