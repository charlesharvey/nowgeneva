

<?php if ( get_the_author_meta('description')) : ?>
    <div class="author_box">


        <div class="author_details clearfix">
            <?php echo get_avatar(get_the_author_meta('user_email')); ?>
            <div class="author_description">

                <p class="aproposde">A propos de</p>
                <h3> <?php echo get_the_author(); ?></h3>

                <?php echo wpautop( get_the_author_meta('description') ); ?>

                <?php if ( get_the_author_meta('url')) : ?>
                    <p><a target="_blank" href="<?php echo $url = get_the_author_meta('url'); ?>" class=""><?php echo $url; ?></a></p>
                <?php endif; ?>
            </div>
        </div>

    </div>
<?php endif; ?>
