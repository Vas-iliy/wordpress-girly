<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'iframe'    => array(
		'type'  => 'text',
		'label' => __( 'iframe', 'fw' )
	),

	'style'    => array(
		'type'  => 'text',
		'label' => __( 'style', 'fw' )
	),
	'data_attrs'    => array(
		'type'  => 'text',
		'label' => __( 'Attributes', 'fw' ),
		'desc'  => __( 'Attributes', 'fw' ),
	)

);