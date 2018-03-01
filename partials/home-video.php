    <?php $video = get_field('video_url', 'option'); ?>
    <?php $title = get_field('video_title', 'option'); ?>
    <?php $subtitle = get_field('video_subtitle', 'option'); ?>
    <?php $show_vid = get_field('show_vid', 'option'); ?>


<?php if ($show_vid) : ?>
<div class="container">
  <h2><span><?php echo $title; ?></span></h2>
  <p class="category" style="text-align:center; margin: -30px 0 30px;"><?php echo $subtitle; ?></p>
  <div class="home_vid"><?php echo $video; ?></div>

</div>
<?php endif; ?>
