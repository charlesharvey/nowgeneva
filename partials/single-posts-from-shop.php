<?php $posts_from_shop = get_posts_from_shop_id(  get_the_ID()  );  ?>
<?php $featured = array(); $normal = array(); ?>
<?php if ($posts_from_shop->have_posts()): ?>

        <?php
         while ($posts_from_shop->have_posts()) : $posts_from_shop->the_post();

             $image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'small') : '';
             $post_type = get_field('post_type');
             $permalink = get_permalink();
             $title = get_the_title();
             $excerpt = explode(' ', strip_tags( get_the_excerpt()));
             $excerpt = implode(' ',  array_slice($excerpt, 0, 20) );

             $str = '';

            if ($post_type == 'featured') {

                $str .= '<a class="post_from_shop_image" href="' . $permalink .'">
                <img src="' . $image . '" alt="">
                <span class="macaron">Portrait - '. $title .'</span>
                </a>';
                $str .= '<h4><a href="' . $permalink .'">' .  $title . '</a></h4>';
                $str .= '<p>' . $excerpt . '...</p>';


                array_push($featured, $str);

            } else {
                $str .= '<li class="posts_from_shop_item">';
                $str .= '<div class="post_from_shop_info clearfix">';
                $str .= '<h4><a href="' . $permalink .'">' .  $title . '</a></h4>';
                $str .= '<p>' . $excerpt . '...</p>';
                $str .= '</div>';
                $str .= '<a class="post_from_shop_image" href="' . $permalink .'"><img src="' . $image . '" alt=""></a>';
                $str .= '</li>';

                array_push($normal, $str);
            };

            ?>




        <?php endwhile; ?>


<?php endif; ?>

    <h2> <span>Plus sur <?php echo get_the_title(); ?> </span></h2>
<div class="row" >
    <div class="col-sm-6">
        <div class="featured_post_about_shop post_shop_cont_match">
            <?php echo  implode($featured , ''); ?>
            </div>
    </div>
    <div class="col-sm-6">
        <div class="posts_from_shop_container post_shop_cont_match">
            <ul class="posts_from_shop_list">
                <?php echo  implode($normal , ''); ?>
            </ul>
        </div>
    </div>
</div>
