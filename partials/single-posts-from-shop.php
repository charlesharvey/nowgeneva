<?php $posts_from_shop = get_posts_from_shop_id(  get_the_ID()  );  ?>

<?php if ($posts_from_shop->have_posts()): ?>
    <h3>Posts about this shop</h3>
    <ul>
        <?php while ($posts_from_shop->have_posts()) : $posts_from_shop->the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
            </li>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>
