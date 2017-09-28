
<?php $boutiques = get_field('boutiques'); ?>


<?php if ($boutiques) : ?>
    <div class="boutiques_container">
    <ul class="boutiques_list ">
        <li class="boutique_item"> <strong>Nos boutiques:</strong> </li>
        <?php  foreach($boutiques as $boutique):  ?>
            <?php $url = $boutique->guid; ?>
            <li class="boutique_item">
                <a href="<?php echo $url; ?>"><?php echo $boutique->post_title; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        </div>
    <?php endif; ?>
