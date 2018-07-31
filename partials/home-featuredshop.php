  <?php if(get_field('image_alaune', 'option')){ ?>


<?php $image = get_field('image_alaune', 'option')['url']; ?>
    <?php $caption = get_field('image_alaune', 'option')['caption']; ?>
    <?php $captionclass =  (trim($caption) != '') ? '' : 'nocaption'; ?>
    <?php $boutique_link = get_field('boutique_alaune', 'option'); ?>
    <?php $boutique_title = get_field('texte_alaune', 'option'); ?>

<div class="container">
    <div class="advert">

        <a target="_blank" href="<?php echo ($boutique_link); ?>">
        <img src="<?php echo $image; ?>"  alt="<?php echo get_the_title(); ?>">
        <p class="wp-caption-text <?php echo $captionclass; ?>"><?php echo $caption; ?></p>
        </a>
        <?php if($boutique_title) : ?>
          <div class="advert_text">
              <h2 style="font-size:2em; margin:0;"><a href="<?php echo ($boutique_link); ?>"><?php echo $boutique_title; ?></a></h2>
          </div>
        <?php endif; ?>
    </div>


</div>

<?php } ?>
