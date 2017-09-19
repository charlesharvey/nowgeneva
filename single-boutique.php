<?php get_header(); ?>




<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>




        <div class="container">


                <div class="row">


                    <div class="col-sm-3">

                        <h1><span><?php the_title(); ?></span></h1>
                        <p class="single-category"><?php the_category(','); ?></p>
                        <?php the_content(); // Dynamic Content ?>

                    </div>
                    <div class="col-sm-9">
                            <?php $image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'large') : ''; ?>
                            <img src="<?php echo $image; ?>" alt="" />


                            <div id="map_container"></div>
                            <script type='text/javascript'>
                                var location_address = '<?php echo get_field("address"); ?>' ;
                            </script>

                    </div>
                </div>





            <?php edit_post_link(); // Always handy to have Edit Post Links available ?>



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
