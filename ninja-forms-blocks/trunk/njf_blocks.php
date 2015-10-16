<?php
   /*
   Plugin Name: Ninja Forms Blocks
   Description: Add blocks functionality to Ninja Forms
   Version: 1.2
   Author: Alexander Chernov
   Author URI: http://alexuslab.com
   License: GPL2
   */
add_action( 'init', 'register_njf_blocks' );
function register_njf_blocks() {
	$open_args = array(
		'name' => '[BLOCK]',
		'display_function' => 'njf_display_block_open',
		'sidebar' => 'layout_fields',
		'group' => 'layout_elements',
		'display_label' => false,
		'display_wrap' => false,
		'edit_label' => false,
		'edit_label_pos' => false,
		'edit_req' => false,
		'edit_custom_class' => true,
		'edit_help' => false,
		'edit_meta' => false,
		'edit_conditional' => true,
		'process_field' => false,
	);
	$close_args = array(
		'name' => '[/BLOCK]',
		'display_function' => 'njf_display_block_close',
		'sidebar' => 'layout_fields',
		'group' => 'layout_elements',
		'display_label' => false,
		'display_wrap' => false,
		'edit_label' => false,
		'edit_label_pos' => false,
		'edit_req' => false,
		'edit_custom_class' => true,
		'edit_help' => false,
		'edit_meta' => false,
		'edit_conditional' => true,
		'process_field' => false,
	);
	if( function_exists( 'ninja_forms_register_field' ) ) {
	  ninja_forms_register_field('_njf_open_block', $open_args);
	  ninja_forms_register_field('_njf_close_block', $close_args);
	}
}

function njf_display_block_open($field_id, $data){
	print '<div id="ninja_forms_field_'.$field_id.'" class="njf-block '.strip_tags($data['class']).'">';
}
function njf_display_block_close($field_id, $data){
	print '</div>';
}
?>