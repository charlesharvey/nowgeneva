
            <?php $boutiques = get_field('boutiques'); ?>


            <?php if ($boutiques) : ?>
                <h3>Boutiques</h3>
                <ul class="boutiques_list row">
            <?php $bb= 0 ; foreach($boutiques as $boutique):  ?>
                 <?php $image = ( has_post_thumbnail($boutique->ID)) ? thumbnail_of_post_url($boutique->ID,  'medium') : ''; ?>
                 <?php $url = $boutique->guid; ?>
                <li class="col-sm-4 boutique_item">
                    <a href="<?php echo $url; ?>" class="boutique_image" style="background-image:url('<?php echo $image; ?>')"></a>
                    <h3><a href="<?php echo $url; ?>"><?php echo $boutique->post_title; ?></a></h3>

                </li>

                    <?php if ($bb % 3 == 2)  echo '</ul><!--  END OF ROW --><ul class="boutiques_list row">'; ?>

            <?php $bb++; endforeach; ?>
            </ul>
            <?php endif; ?>
