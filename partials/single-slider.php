<?php if(have_rows('slider')) : ?>

<ul class="bxslider">

<?php $thumbs = array(); ?>
	<?php while ( have_rows('slider') ) : the_row() ; ?>


		<?php $image =  get_sub_field('image'); ?>
		<?php $nom_produit =  get_sub_field('nom_produit'); ?>
		<?php $content = get_sub_field('content'); ?>
		<?php $link =  get_sub_field('link'); ?>
		<?php $boutique =  get_sub_field('boutique'); ?>

        <?php  array_push( $thumbs, $image['sizes']['small']); ?>

        <li  class="single_slide" >
            <article>
                <div class="article_image" style="background-image:url('<?php echo $image['sizes']['large']; ?>')">
                </div>

                <h4><?php echo $nom_produit; ?></h4>
                <?php if($boutique ) : ?>
                    <p class="category"><a class="boutique_link" href="<?php echo $boutique->guid; ?>" ><?php echo $boutique->post_title; ?></a></p>
                <?php endif; ?>
                <p><?php echo $content; ?></p>
                <?php if($link && $link != '') : ?>
                    <p><a class="buy_link" href="<?php echo $link; ?>" target="_blank">Acheter</a></p>
                <?php endif; ?>



            </article>
        </li>


	<?php endwhile; ?>


</ul>


<?php endif ; ?>
