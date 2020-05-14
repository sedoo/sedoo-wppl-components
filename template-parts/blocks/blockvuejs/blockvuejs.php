<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'sedoo_component-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
// Create class attribute allowing for custom "className" and "align" values.
$className = 'sedoo_blocks_component';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$blockvuejs = get_field('element_vue_js');
$IdElementVueJS = $blockvuejs[0];

if( have_rows('elements_inclus', $IdElementVueJS) ):
    while( have_rows('elements_inclus', $IdElementVueJS) ): the_row(); 
        echo the_sub_field('script');
    endwhile; 
endif;
?>
<section class="sedoo-component <?php echo $className;?>">
<?php
echo get_field('contenu_du_block', $IdElementVueJS);
?>
</section>

