<?php 
if( function_exists('acf_add_local_field_group') ):

// POST TYPE FIELDS
acf_add_local_field_group(array(
	'key' => 'group_5e663e0f3f0c1',
	'title' => 'Block VUE JS',
	'fields' => array(
		array(
			'key' => 'field_5e663e1c5e3e8',
			'label' => 'Elements inclus',
			'name' => 'elements_inclus',
			'type' => 'repeater',
			'instructions' => 'Insérer les lignes d\'inclusion des fichiers css ou js',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5e663e455e3e9',
					'label' => 'Ligne de script',
					'name' => 'script',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
		array(
			'key' => 'field_5e663e8eb83c5',
			'label' => 'Contenu du block',
			'name' => 'contenu_du_block',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'vuejs',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

// BLOCK FIELDS
    acf_add_local_field_group(array(
        'key' => 'group_5e663f5669abd',
        'title' => 'Gutenberg vue js',
        'fields' => array(
            array(
                'key' => 'field_5e663f64b0b3a',
                'label' => 'Element vue JS',
                'name' => 'element_vue_js',
                'type' => 'relationship',
                'instructions' => 'One component per block !',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => array(
                    0 => 'vuejs',
                ),
                'taxonomy' => '',
                'filters' => array(
                    0 => 'search',
                ),
                'elements' => '',
                'min' => '',
                'max' => '1',
                'return_format' => 'object',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/sedoo-blocks-vuejs',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    endif;

?>