<?php
$chilly_supermenus = array();

$categories = get_terms( array(
       'hide_empty' => false,
       'taxonomy' => 'category',
       'parent' => 0,
       'exclude' => 1
)  );


$portraits = get_posts(array('post_type' => 'portrait', 'posts_per_page' =>  3 ));
$supermenu = '<div id="supermenu_portraits" class="supermenu"><div class="container"><div class="row">';
$supermenu .= '<div class="col-sm-3"><p>Lipsum</p></div>';
foreach ( $portraits as $post ) : setup_postdata( $post );
$supermenu .= '<div class="col-sm-3"><h3><a href="'.get_the_permalink().'">'. get_the_title()  .'</a></h3><p>'. get_the_excerpt() .'</p></div>';
endforeach; wp_reset_postdata();
$supermenu .= '</div></div></div>';
array_push($chilly_supermenus, $supermenu);



$events = get_posts(array(
    'post_type' => 'event',
     'posts_per_page' =>  3,
      'meta_key' => 'date',
      'orderby' => 'meta_value',
      'order' => 'ASC',
      'meta_query' => array( // WordPress has all the results, now, return only the events after today's date
          array(
          'key' => 'date', // Check the start date field
          'value' => date("Y-m-d"), // Set today's date (note the similar format)
          'compare' => '>=', // Return the ones greater than today's date
          'type' => 'DATE' // Let WordPress know we're working with date
          )
      )
 ));
$supermenu = '<div id="supermenu_events" class="supermenu"><div class="container"><div class="row">';
$supermenu .= '<div class="col-sm-3"><p>Lipsum</p></div>';
foreach ( $events as $post ) : setup_postdata( $post );
$date = get_field('date');
$supermenu .= '<div class="col-sm-3"><h3><a href="'.get_the_permalink().'">'. get_the_title()  .'</a></h3><p>'. get_the_excerpt() .'</p><p>'. $date .'</p></div>';
endforeach; wp_reset_postdata();
$supermenu .= '</div></div></div>';
array_push($chilly_supermenus, $supermenu);


 ?>

<nav id="site_nav">
    <a href="#" id="open_nav">Menu</a>
    <div class="container">

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
                        $supermenu .= '<li><a href="'. $child_cat->slug .'">'. $child_cat->name   . '</a></li>';
                    };
                 $supermenu .= ' </ul></div>';
                 foreach ( $latest as $post ) : setup_postdata( $post );
                 $supermenu .= '<div class="col-sm-3"><h3><a href="'.get_the_permalink().'">'. get_the_title()  .'</a></h3><p>'. get_the_excerpt() .'</p></div>';
                endforeach; wp_reset_postdata();
                 $supermenu .=  '</div></div></div>';



                  ?>
            <li  class="supermenu_li" data-supermenu="<?php echo $slug; ?>">
                <a  href="#"><?php echo $category->name; ?></a>
            </li>
            <?php array_push($chilly_supermenus, $supermenu); ?>
            <?php endforeach; ?>

             <?php chilly_nav('primary-navigation'); ?>

            <li  class="supermenu_li" data-supermenu="supermenu_portraits"><a href="#">Portraits</a></li>
            <li  class="supermenu_li" data-supermenu="supermenu_events"><a href="#">POP-UP EVENTS</a></li>


        </ul>
    </div>

    <div id="supermenu_container">
        <?php echo implode("\n", $chilly_supermenus); ?>
    </div>


</nav>
