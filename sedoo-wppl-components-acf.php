<?php

function register_acf_block_types_vuejs() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'sedoo_blocks_vuejs',
        'title'             => __('VueJS'),
        'description'       => __('Ajoute un élément VueJS'),
        'render_callback'   => 'sedoo_blocks_components_render_callback',
        'category'          => 'widgets',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Vuejs', 'sedoo' ),
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types_vuejs');
}