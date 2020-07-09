<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="<?=$atts['url']?>"
            allowfullscreen></iframe>
</div>
