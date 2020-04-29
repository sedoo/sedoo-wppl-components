<?php


function sedoo_blocks_components_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	$templateURL = plugin_dir_path(__FILE__) . "template-parts/blocks/blockvuejs/blockvuejs.php";
    // include a template part from within the "template-parts/block" folder
    
	if( file_exists( $templateURL)) {
		include $templateURL;
    }
}

function set_sso_var_login() {
	setcookie("wordpress_aeris_sso_login_status", 1);
}
add_action('wp_login', 'set_sso_var_login');

function set_sso_var_logout() {
	setcookie("wordpress_aeris_sso_login_status", 0);
}
add_action('wp_logout', 'set_sso_var_logout');
