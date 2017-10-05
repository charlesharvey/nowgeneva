<?php get_header(); ?>


<!-- section -->
<section>

    <!-- article -->
    <article id="post-404">
        <div class="container">
            <h1><span><?php _e( 'Page not found', 'webfactor' ); ?></span></h1>
            <p style="text-align:center">
                <a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'webfactor' ); ?></a>
            </p>
        </div>
    </article>
    <!-- /article -->

</section>
<!-- /section -->



<?php get_footer(); ?>
