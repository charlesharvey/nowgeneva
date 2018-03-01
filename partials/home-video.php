    <?php $video = get_field('video_url', 'option'); ?>
    <?php $title = get_field('video_title', 'option'); ?>
    <?php $subtitle = get_field('video_subtitle', 'option'); ?>



<div class="container">
  <h2><span><?php echo $title; ?></span></h2>
  <p class="category" style="text-align:center; margin: -30px 0 30px;"><?php echo $subtitle; ?></p>
  <!-- <iframe width="560" height="350" style="width:100%" src="https://www.youtube.com/embed/u70uSeycrVY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
  <div class="home_vid"><?php echo $video; ?></div>

</div>
