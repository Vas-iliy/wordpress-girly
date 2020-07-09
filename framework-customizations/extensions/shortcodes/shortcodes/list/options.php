<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'span_icon'       => array(
		'type' => 'icon',
		'label' => __( 'List Icon', 'fw' )
	),

	'list_wrapper'       => array(
		'type' => 'checkbox',
		'label' => __( 'Wrap in link', 'fw' ),
		'text' => '',
	),

	'list_link'       => array(
		'type' => 'text',
		'label' => __( 'Link', 'fw' )
	),

	'list_content'    => array(
		'type'  => 'textarea',
		'label' => __( 'List Content', 'fw' ),
		'desc'  => __( 'List Content', 'fw' ),
	),

	'list_class'    => array(
		'type'  => 'text',
		'label' => __( 'List Class', 'fw' ),
		'desc'  => __( 'List Class', 'fw' ),
	),

	'list_id'    => array(
		'type'  => 'text',
		'label' => __( 'List ID', 'fw' ),
		'desc'  => __( 'List ID', 'fw' ),
	)

);