<?php /* Template Name: Street look */ get_header(); ?>
<div class="container">
  <h1><span><?php the_title(); ?></span></h1>
  <?php the_content(); ?>

  <?php
    setlocale(LC_TIME, "fr_FR");
    $month = date('m', strtotime('0 month'));
    $prev_month = date('m', strtotime('-1 month'));
    $MonthName = strftime('%B', mktime(0, 0, 0, $month));
    $PrevMonthName = strftime('%B', mktime(0, 0, 0, $prev_month));
    $month = utf8_encode($MonthName);
    $prev_month = utf8_encode($PrevMonthName);
  ?>




  <?php $i = 1; ?>
  <?php if( have_rows('street_looks') ): while ( have_rows('street_looks') ) : the_row(); ?>
  <?php if($i ==1): ?>
  <h2><span>Notre gagnant du mois de <?php echo $prev_month; ?></span></h2>
  <div class="row">
    <div class="col-sm-6"><?php echo get_sub_field('embed_insta'); ?></div>
    <div class="col-sm-6">
      <h3><?php echo get_sub_field('title'); ?></h3>
        <p class="insta_meta"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_sub_field('date'); ?> - <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo get_sub_field('lieu'); ?></p>
      <?php echo get_sub_field('texte_descriptif'); ?>
    </div>
  </div>
  </div>
  <br class="clear">
  <div class="container">
  <h2><span>La sélection du mois de <?php echo $month; ?></span></h2>
  <div ><p style="text-align:center">Votez pour votre look préféré! La photo avec le plus de likes sera affichée le mois prochain.</p></div>
  <div class="insta_container">

  <?php elseif($i < 5): ?>
    <div class=insta_div>
      <?php echo get_sub_field('embed_insta'); ?>
      <p style="padding:0;"><strong><?php echo get_sub_field('title'); ?></strong></p>
      <p class="insta_meta"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_sub_field('date'); ?> - <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo get_sub_field('lieu'); ?></p>
    </div>
  <?php else: ?>
    <?php if($i == 5): ?>
    </div>  <!-- Close insta_container -->
    <h2><span>Nos anciens gagnants</span></h2>
    <div class="insta_container">
  <?php endif; ?>
  <div class=insta_div>
    <?php echo get_sub_field('embed_insta'); ?>
    <p style="padding:0;"><strong><?php echo get_sub_field('title'); ?></strong></p>
    <p class="insta_meta"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_sub_field('date'); ?> - <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo get_sub_field('lieu'); ?></p>
  </div>
  <?php endif; ?>

  <?php $i++; ?>

  <?php endwhile; endif; ?>
</div>
</div>


<?php get_footer(); ?>
