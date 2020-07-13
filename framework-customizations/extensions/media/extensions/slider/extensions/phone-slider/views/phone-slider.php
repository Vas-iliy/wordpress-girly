<?php if (!defined('FW')) die('Forbidden'); ?>
<? if($data['slides']): ?>

<script type="text/javascript">
    jQuery('document').ready(function () {
        jQuery('.bxslider').bxSlider();
    });
</script>

<div class="carousel-default owl-carousel carousel-hide-arrows margin-m-top-bottom-50">
    <?foreach ($data['slides'] as $slide):?>
        <div class="item">
            <img class="margin-bottom" src="<?=$slide['src']?>"/>
        </div>
    <?endforeach;?>
</div>

<?endif;?>
