<?php if(have_rows('slider')) : ?>

<ul class="bxslider">

<?php $thumbs = array(); ?>
	<?php while ( have_rows('slider') ) : the_row() ; ?>


		<?php $image =  get_sub_field('image'); ?>
		<?php $content = get_sub_field('content'); ?>
		<?php $link =  get_sub_field('link'); ?>

        <?php  array_push( $thumbs, $image['sizes']['small']); ?>



		<li  class="single_slide" >
            <div class="row">

                <div class="col-sm-9">
                    <img src="<?php echo $image['sizes']['large']; ?>" alt="">
                </div>
                <div class="col-sm-3">
                     <div class="slide_content">
                         <?php echo $content; ?>
                            <?php if($link && $link != '') : ?>
                                <p><a class="button button_light button_block" href="<?php echo $link; ?>" target="_blank"><?php echo $link; ?></a></p>
                            <?php endif; ?>
                     </div>
                </div>
            </div>
            <div class="background_blur" style="background-image:url(<?php echo $image['sizes']['large']; ?>);"></div>
		</li>
	<?php endwhile; ?>


</ul>


<div id="bx-pager" class="pager_thumbnails">
    <?php $ti = 0; foreach ($thumbs as $thumb) : ?>
      <a data-slide-index="<?php echo $ti; ?>" href=""><img src="<?php echo $thumb; ?>" /></a>
    <?php $ti++; endforeach; ?>
</div>

<?php endif ; ?>
