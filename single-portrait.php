<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



        <div class="container">

            <h1><span><?php the_title(); ?></span></h1>
                <br>
                <br>
                    <div style="margin-bottom:50px"><?php the_post_thumbnail();?></div>
                    <?php the_content(); // Dynamic Content ?>

                <div class="gallery_container">

                    <?php $galerie = get_field('galerie'); ?>

                    <?php if ($galerie) : ?>
                    <ul class="bxslider">
                        <?php foreach ($galerie as $image) : ?>
                            <li><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['title']; ?>" /></li>
                        <?php endforeach; ?>
                    </ul>

                    <?php endif; ?>
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
