<?php

$posts = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' =>  4
));
?>


<?php  if ($posts->have_posts() ) :  ?>
    <div class="container">


        <h2><span>À la une</span></h2>





        <?php $p = 0; while($posts->have_posts()) : $posts->the_post();   ?>

            <?php if ($p == 0) : ?>
                <?php $image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'large') : ''; ?>
                <?php $url = get_the_permalink(); ?>
                <article class="featured_article" style="background-image:url('<?php echo $image; ?>')">

                    <div class="article_text">
                        <h3><a href="<?php echo $url; ?>"><?php echo get_the_title(); ?></a></h3>
                        <p><?php echo get_the_excerpt(); ?></p>
                        <p><a href="<?php echo $url; ?>" class="button button_light">Lire plus</a></p>
                    </div>
                </article>

                <div class="other_articles">
                    <div class="row">

                    <?php else : ?>
                        <?php $image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'large') : ''; ?>
                        <?php $url = get_the_permalink(); ?>
                        <div class="col-sm-4">
                            <article>
                                <a href="<?php echo $url; ?>" class="article_image" style="background-image:url('<?php echo $image; ?>')"></a>
                                <h3><a href="<?php echo $url; ?>"><?php echo get_the_title(); ?></a></h3>
                                <p><?php echo get_the_excerpt(); ?></p>

                            </article>

                        </div>
                    <?php endif; ?>

                    <?php $p++; endwhile; ?>

                </div> <!-- END OF ROW -->


                <p class="more_articles"><a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="button">Plus d'articles</a></p>
            </div><!-- END OF OTHER ARTICLES -->


        </div>

    <?php endif; ?>
