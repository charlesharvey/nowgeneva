<?php

$page_url = get_permalink( get_page_by_path( 'boutiques' ) );

$boutique_cats = get_terms( array(
       'hide_empty' => false,
       'taxonomy' => 'boutique_cat',
       'parent' => 0
)  );
?>

<div class="container">
<ul class="boutique_cats">
    <li class="boutique_cat">
        <a href="<?php echo $page_url; ?>">All</a>
    </li>
<?php foreach ($boutique_cats as $cat) : ?>
    <li class="boutique_cat">
        <a href="<?php echo $page_url; ?>?cat=<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></a>
    </li>
<?php endforeach; ?>
</ul>
</div>
