<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
?>
<?php
/*
 * `.fw-iconbox` supports 3 styles:
 * `fw-iconbox-1`, `fw-iconbox-2` and `fw-iconbox-3`
 */
?>
<div class="fw-iconbox clearfix <?php echo esc_attr($atts['style']); ?>">
	<div class="fw-iconbox-image">
		<i class="<?php echo esc_attr($atts['icon']); ?>"></i>
	</div>
	<div class="fw-iconbox-aside">
		<?if(!empty($atts['icon_add_link'])):?>
            <a href="<?if(!empty($atts['icon_link'])) echo $atts['icon_link']?>">
		<?endif;?>
		<div class="fw-iconbox-title">
			<h3><?php echo $atts['title']; ?></h3>
		</div>
		<?if(!empty($atts['icon_add_link'])):?>
            </a>
		<?endif;?>
		<div class="fw-iconbox-text">
			<p><?php echo $atts['content']; ?></p>
		</div>
	</div>
</div>