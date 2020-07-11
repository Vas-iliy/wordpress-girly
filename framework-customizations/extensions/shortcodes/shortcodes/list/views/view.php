<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<!--<ul>-->
    <p
        <?if(!empty($atts['list_class'])) echo "class='{$atts['list_class']}'"?>
        <?if(!empty($atts['list_id'])) echo "id='{$atts['list_id']}'"?>
    >

	    <?if(!empty($atts['list_wrapper'])):?>
            <a <?if(!empty($atts['list_link'])) echo "href='{$atts['list_link']}'"?>>
        <?endif;?>

            <?if(!empty($atts['list_content'])) echo $atts['list_content']?>

	    <?if(!empty($atts['list_wrapper'])):?>
            </a>
	    <?endif;?>
    </p>
<!--</ul>-->


