<?php if (get_field('image_pub', 'option')){ ?>


    <?php $image = get_field('image_pub', 'option')['url']; ?>
      <?php $caption = get_field('image_pub', 'option')['caption']; ?>
      <?php $captionclass =  (trim($caption) != '') ? '' : 'nocaption'; ?>
      <?php $pub_link = get_field('link_pub', 'option'); ?>
      <?php $pub_title = get_field('texte_pub', 'option'); ?>



<div class="container">
  <a target="_blank" href="<?php echo $pub_link;?>">
      <div class="advert">
          <img src="<?php echo $image; ?>"  alt="<?php echo get_field('text'); ?>">
          <p class="wp-caption-text <?php echo $captionclass; ?>"><?php echo $caption; ?></p>
          <div class="advert_text">
              <h2 style="margin:0;"><?php echo $pub_title; ?></h2>
          </div>
      </div>
    </a>
</div>
<?php } ?>
