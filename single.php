<?php get_header(); ?>




<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>




        <div class="container">



            <h1><span><?php the_title(); ?></span></h1>
            <p class="single-category"><?php the_category(','); ?></p>
            <?php the_content(); // Dynamic Content ?>




            <?php $boutiques = get_field('boutiques'); ?>


            <?php if ($boutiques) : ?>
                <h3>Boutiques</h3>
                <ul class="boutiques_list row">
            <?php $bb= 0 ; foreach($boutiques as $boutique):  ?>
                 <?php $image = ( has_post_thumbnail($boutique->ID)) ? thumbnail_of_post_url($boutique->ID,  'medium') : ''; ?>
                 <?php $url = $boutique->guid; ?>
                <li class="col-sm-4 boutique_item">
                    <a href="<?php echo $url; ?>" class="boutique_image" style="background-image:url('<?php echo $image; ?>')"></a>
                    <h3><a href="<?php echo $url; ?>"><?php echo $boutique->post_title; ?></a></h3>

                </li>

                    <?php if ($bb % 3 == 2)  echo '</ul><!--  END OF ROW --><ul class="boutiques_list row">'; ?>

            <?php $bb++; endforeach; ?>
            </ul>
            <?php endif; ?>


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
