<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<iframe src="<?=$atts['iframe']?>" frameborder="0" <?if(!empty($atts['style'])) echo "style = '{$atts['style']}'"?>
	<?if(!empty($atts['data_attrs'])) echo $atts['data_attrs'];?>></iframe>

