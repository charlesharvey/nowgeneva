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
                <?php $image_caption = ( has_post_thumbnail()) ? get_post(get_post_thumbnail_id())->post_excerpt : ''; ?>
                <?php $url = get_the_permalink(); ?>
                <?php   $excerpt = explode(' ', strip_tags( get_the_excerpt()));
                       $excerpt = implode(' ',  array_slice($excerpt, 0, 35) ); ?>


                <article class="featured_article">
                    <a href="<?php echo $url; ?>" class="article_image" style="background-image:url('<?php echo $image;?>')">
                    </a>

                    <div class="article_text">

                    <h3><a href="<?php echo $url; ?>"><?php echo get_the_title(); ?></a></h3>
                    <?php $categories = wp_get_post_terms( get_the_ID(), 'category');   ?>
                    <?php if (sizeof($categories) > 0) : ?>
                    <p class="category"><?php echo ($categories[0]->name); ?></p>
                    <?php endif; ?>
                    <p><?php echo $excerpt; ?></p>
                    <p class="read_more"><a href="<?php echo $url; ?>" class="button button_light">Lire plus</a></p>

                    </div>

                </article>

                <div class="other_articles">
                    <div class="row">

                    <?php else : ?>
                        <?php $image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'large') : ''; ?>
                        <?php $url = get_the_permalink(); ?>
                        <?php $categories = wp_get_post_terms( get_the_ID(), 'category');   ?>
                        <?php   $excerpt = explode(' ', strip_tags( get_the_excerpt()));
                               $excerpt = implode(' ',  array_slice($excerpt, 0, 35) ); ?>
                        <div class="col-sm-4">
                            <article>
                                <a href="<?php echo $url; ?>" class="article_image" style="background-image:url('<?php echo $image;?>')">
                                </a>

                                <h3><a href="<?php echo $url; ?>"><?php echo get_the_title(); ?></a></h3>
                                <?php if (sizeof($categories) > 0) : ?>
                                <p class="category"><?php echo ($categories[0]->name); ?></p>
                                <?php endif; ?>
                                <p><?php echo $excerpt; ?></p>

                            </article>

                        </div>
                    <?php endif; ?>

                    <?php $p++; endwhile; ?>

                </div> <!-- END OF ROW -->


                <p class="more_articles"><a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="button">Plus d'articles</a></p>
            </div><!-- END OF OTHER ARTICLES -->


        </div>

    <?php endif; ?>
