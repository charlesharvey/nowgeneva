<?php get_header(); ?>




<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php  $boutique_cats = get_the_terms( get_the_ID(), 'boutique_cat' ); ?>


        <div class="container">

            <h1><span><?php the_title(); ?></span></h1>
            <?php  if ($boutique_cats) : ?>
                <p class="single-category"><?php  echo $boutique_cats[0]->name; ?></p>
            <?php endif; ?>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <?php the_post_thumbnail();?>
                </div>
                <div class="col-sm-6 col-md-6">
                    <?php the_content(); // Dynamic Content ?>
                </div>
            </div>

            <div class="info_map">
                <div class="row" >
                    <div class="col-sm-6">
                        <div class="infos_boutique">
                            <h2><span><?php the_title(); ?></span></h2>
                            <div class="boutique_tags"><?php echo get_field('extra'); ?></div>
                            <div class="row">
                                <?php if(get_field('when')){ ?>
                                  <div class="col-sm-7">
                                    <?php echo '<h6>Horaires d\'ouverture</h6>' . get_field('when'); ?>
                                  </div>
                                <?php } ?>
                              <div class="col-sm-5">
                                <h6>Contact</h6>
                                  <?php if(get_field('address')){ echo '<p>' . get_field('address') . '</p>'; } ?>
                                  <?php if(get_field('website')){ echo '<p><a href="' . get_field('website') . '" target="_blank">' . get_field('website') . '</a></p>'; } ?>
                                  <?php if(get_field('email')){ echo '<p><a href="' . get_field('phone') . '" target="_blank">' . get_field('email') . '</a></p>'; } ?>
                                  <?php if(get_field('phone')){ echo '<p>' . get_field('phone') . '</p>'; } ?>
                              </div>
                            </div>
                            <?php if(get_field('social_media')){ ?>
                              <hr>
                              <?php if(get_field('facebook')){ echo '<a class="social_media facebook" target="_blank" href="' . get_field('facebook') . '"><i class="fa fa-facebook" aria-hidden="true"></i></a>'; } ?>
                              <?php if(get_field('twitter')){ echo '<a class="social_media twitter" target="_blank" href="' . get_field('twitter') . '"><i class="fa fa-twitter" aria-hidden="true"></i></a>'; } ?>
                              <?php if(get_field('instagram')){ echo '<a class="social_media instagram" target="_blank" href="' . get_field('instagram') . '"><i class="fa fa-instagram" aria-hidden="true"></i></a>'; } ?>
                              <?php if(get_field('pinterest')){ echo '<a class="social_media pinterest" target="_blank" href="' . get_field('pinterest') . '"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>'; } ?>
                            <?php  } ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div id="map_container"></div>
                        <script type='text/javascript'>
                        var location_address = '<?php echo preg_replace( "/\r|\n/", "", strip_tags(get_field("lat_lng"))); ?>' ;
                        </script>

                    </div>
                </div>

            </div>


            <?php get_template_part('partials/single', 'posts-from-shop'); ?>








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
