<?php

$blockvuejs = get_field('element_vue_js');
$IdElementVueJS = $blockvuejs[0];

if( have_rows('elements_inclus', $IdElementVueJS) ):
    while( have_rows('elements_inclus', $IdElementVueJS) ): the_row(); 
        echo the_sub_field('script');
    endwhile; 
endif;

echo get_field('contenu_du_block', $IdElementVueJS);



?>

