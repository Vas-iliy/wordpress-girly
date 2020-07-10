<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'content'    => array(
		'type'  => 'text',
		'label' => __( 'Span Content', 'fw' ),
		'desc'  => __( 'Span Content', 'fw' ),
	),

	'text_class'    => array(
		'type'  => 'text',
		'label' => __( 'Span Class', 'fw' ),
		'desc'  => __( 'Span Class', 'fw' ),
	),

	'text_id'    => array(
		'type'  => 'text',
		'label' => __( 'Span ID', 'fw' ),
		'desc'  => __( 'Span ID', 'fw' ),
	),

	'text_data_attrs'    => array(
		'type'  => 'text',
		'label' => __( 'Attributes', 'fw' ),
		'desc'  => __( 'Attributes', 'fw' ),
	)

);