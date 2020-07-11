<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $color_class = !empty($atts['color']) ? "fw-btn-{$atts['color']}" : ''; ?>
<a href="<?php echo esc_attr($atts['link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="fw-btn fw-btn-1
<?php if (!empty($atts['class'])) {echo $atts['class'];} echo esc_attr($color_class); ?>">
	<?php echo $atts['label']; ?>
</a>