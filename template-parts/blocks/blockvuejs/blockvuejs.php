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


?>
<section class="sedoo-component <?php echo $className;?>">
<?php
echo get_field('contenu_du_block', $IdElementVueJS);
// load script after content block
if( have_rows('elements_inclus', $IdElementVueJS) ):
    while( have_rows('elements_inclus', $IdElementVueJS) ): the_row(); 
        if(get_field('nom_de_la_campagne', 'option')) {
            $nom_campagne = get_field('nom_de_la_campagne', 'option');
            $campaign_replaced = str_replace('$$CAMPAIGNNAME$$', $nom_campagne, get_sub_field('script'));
            
            $current_lang = substr( get_bloginfo ( 'language' ), 0, 2 );
            if ( function_exists('pll_the_languages') ) {
                $current_lang = pll_current_language();
            }


            echo str_replace('$$LANGUAGE$$', $current_lang, $campaign_replaced);
        } else {
            echo the_sub_field('script');
        }
    endwhile; 
endif;
?>
</section>

