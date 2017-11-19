<?php
$chilly_supermenus = array();

$home_url = get_home_url();

$categories = get_terms( array(
       'hide_empty' => false,
       'taxonomy' => 'category',
       'parent' => 0,
       'exclude' => 1
)  );



$portraits = get_posts(array('post_type' => 'portrait', 'posts_per_page' =>  3 ));
$supermenu = '<div id="supermenu_portraits" class="supermenu"><div class="container"><div class="row">';
$supermenu .= '<div class="col-sm-3"><blockquote>Chaque mois la rédaction met en lumière des personnalités qui font l’actualité dans la mode, la culture, le monde des affaires ou encore la politique.</blockquote></div>';
foreach ( $portraits as $post ) : setup_postdata( $post );
  $image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'small') : '';
  $permalink = get_the_permalink();
  $supermenu .= '<div class="col-sm-3"><a  class="article_image" href="'. $permalink .'" style="background-image:url(' . $image . ');" title=""></a><h3><a href="'.$permalink.'">'. get_the_title()  .'</a></h3><p class="the_date">'. get_the_date() .'</p></div>';
endforeach; wp_reset_postdata();
$supermenu .= '</div></div></div>';
array_push($chilly_supermenus, $supermenu);


$today = date("Y-m-d");
$events = get_posts(array(
    'post_type' => 'event',
     'posts_per_page' =>  3,
      'meta_key' => 'start_date',
      'orderby' => 'meta_value',
      'order' => 'ASC',
      'meta_query' => array(
          'relation' => 'OR',
          array(
              'key' => 'start_date', // Check the start date field is
              'value' => $today,
              'compare' => '>=',
              'type' => 'DATE'
          ),
          array(
              'key' => 'end_date', // Check the start date field is
              'value' => $today,
              'compare' => '>=',
              'type' => 'DATE'
          ),

      )
 ));
$supermenu = '<div id="supermenu_events" class="supermenu"><div class="container"><div class="row">';
$supermenu .= '<div class="col-sm-3"><blockquote>Inscrivez vous vite pour recevoir en avant première les ventes privées, soldes ou offres privilégiées accordées aux abonnés(es) de Now Geneva.</blockquote></div>';
foreach ( $events as $post ) : setup_postdata( $post );
$start_date = get_field('start_date');
$image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'small') : '';
$permalink = get_the_permalink();
$place = get_field('place');
$boutiques = get_field('boutiques');

$title = ($boutiques) ?  $boutiques[0]->post_title : 'Boutique';
$title .= ($place)   ? ' - ' . $place: '';


$supermenu .= '<div class="col-sm-3"><a  class="article_image" href="'. $permalink .'" style="background-image:url(' . $image . ');" title=""></a><h3><a href="'.get_the_permalink().'">'. $title  .'</a></h3><p class="the_date">Le '. $start_date .'</p></div>';
endforeach; wp_reset_postdata();
$supermenu .= '</div></div></div>';
array_push($chilly_supermenus, $supermenu);


 ?>

<nav id="site_nav">
        <div class="container">
    <a href="#" id="open_nav">Menu</a>


        <ul>

            <?php
            foreach ($categories as $category) :

                 $parent_id = $category->term_id;
                 $child_cats = get_terms( array('hide_empty' => false,'taxonomy' => 'category','parent' => $parent_id)  );
                 $latest = get_posts(array('post_type' => 'post', 'posts_per_page' =>  3, 'category'=> $parent_id ));
                 $slug = 'supermenu_' . $category->slug;
                 $supermenu = '<div id="' .  $slug .'" class="supermenu">';
                 $supermenu .= '<div class="container"><div class="row">';
                 $supermenu .= '<div class="col-sm-3"><ul>';
                    foreach ($child_cats as $child_cat) {
                        $supermenu .= '<li><a href="'.  $home_url . '/category/'. $child_cat->slug .'">'. $child_cat->name   . '</a></li>';
                    };
                 $supermenu .= ' </ul></div>';
                 foreach ( $latest as $post ) : setup_postdata( $post );
                   $image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'small') : '';
                   $permalink = get_the_permalink();

                  $supermenu .= '<div class="col-sm-3"><a  class="article_image" href="'. $permalink .'" style="background-image:url(' . $image . ');" title=""></a><h3><a href="'. $permalink.'">'. get_the_title()  .'</a></h3><p class="the_date">'. get_the_date() .'</p></div>';
                endforeach; wp_reset_postdata();
                 $supermenu .=  '</div></div></div>';



                  ?>
            <li  class="supermenu_li" data-supermenu="<?php echo $slug; ?>">
                <a  href="<?php echo  $home_url; ?>/category/<?php echo $category->slug; ?>"><?php echo $category->name; ?></a>
            </li>
            <?php array_push($chilly_supermenus, $supermenu); ?>
            <?php endforeach; ?>

             <?php chilly_nav('primary-navigation'); ?>

            <li  class="supermenu_li" data-supermenu="supermenu_portraits"><a href="<?php echo  $home_url; ?>/portrait/">Portraits</a></li>
            <li  class="supermenu_li" data-supermenu="supermenu_events"><a href="<?php echo  $home_url; ?>/events-ventes/">EVENTS &amp; VENTES</a></li>


        </ul>

  </div> <!-- END OF CONTAINER -->
    <div id="supermenu_container">
        <?php echo implode("\n", $chilly_supermenus); ?>
    </div>


</nav>
