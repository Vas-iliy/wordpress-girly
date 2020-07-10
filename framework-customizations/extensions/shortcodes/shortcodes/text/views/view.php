<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

    <p
        <?if(!empty($atts['text_class'])) echo "class='{$atts['text_class']}'"?>
        <?if(!empty($atts['text_id'])) echo "id='{$atts['text_id']}'"?>
        <?if(!empty($atts['text_data_attrs'])) echo $atts['text_data_attrs']?>
    >
        <?=$atts['content']?>
    </p>
