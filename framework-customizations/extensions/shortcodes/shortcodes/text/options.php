<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'content'    => array(
		'type'  => 'textarea',
		'label' => __( 'Text Content', 'fw' ),
		'desc'  => __( 'Text Content', 'fw' ),
	),

	'text_class'    => array(
		'type'  => 'text',
		'label' => __( 'Text Class', 'fw' ),
		'desc'  => __( 'Text Class', 'fw' ),
	),

	'text_id'    => array(
		'type'  => 'text',
		'label' => __( 'Text ID', 'fw' ),
		'desc'  => __( 'Text ID', 'fw' ),
	),

	'text_data_attrs'    => array(
		'type'  => 'text',
		'label' => __( 'Attributes', 'fw' ),
		'desc'  => __( 'Attributes', 'fw' ),
	)

);